<?php
function airlab_script_enqueue(){
//css
	wp_enqueue_style( 'airlab-stylesheet', get_template_directory_uri() . '/css/airlab.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'js-scroll-stylesheet', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '1.0.0', 'all' );
	
  //js
  // unregister jQuery
  wp_deregister_script('jquery-core');
  wp_deregister_script('jquery');

  // register
  wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
  wp_register_script( 'jquery', false, array('jquery-core'), null, true );

  // enqueue
  wp_enqueue_script( 'jquery' );
  // Bootstrap
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), null, true );
  // ScrollMagic
  wp_enqueue_script( 'scroll-magic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.js', array('jquery'), null, true );
  wp_enqueue_script( 'add-indicators-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery', 'scroll-magic-js'), null, true );
  // GSAP
  wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.0/gsap.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'gsap-animation-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array('jquery', 'gsap-js'), null, true );

	//Typed.js
	wp_enqueue_script( 'typed-js', 'https://cdn.jsdelivr.net/npm/typed.js@latest/lib/typed.min.js');
	wp_enqueue_script( 'js-scroll-js', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true );
	
  wp_enqueue_script( 'airlab-js', get_template_directory_uri() . '/js/airlab.js', array('jquery', 'scroll-magic-js', 'gsap-js', 'typed-js', 'bootstrap-js', 'js-scroll-js'), null, true );


}
add_action( 'wp_enqueue_scripts', 'airlab_script_enqueue' );

/** Register Menu */
function airlab_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
}
/** Register Custom Navigation Walker */
function register_navwalker(){
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_action('init', 'airlab_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-formats', array('aside', 'chat', 'gallery','link','image','quote','status','video'));
add_theme_support('post-thumbnails');

add_shortcode( 'showhide', 'showhide_shortcode' );
function showhide_shortcode( $atts, $content = null ) {
	// Variables
	$post_id = get_the_id();
	$word_count = number_format_i18n( sizeof( explode( ' ', strip_tags( $content ) ) ) );

	// Extract ShortCode Attributes
	$attributes = shortcode_atts( array(
		'type' => 'pressrelease',
		'more_text' => __( 'Show Press Release (%s More Words)', 'wp-showhide' ),
		'less_text' => __( 'Hide Press Release (%s Less Words)', 'wp-showhide' ),
		'hidden' => 'yes'
	), $atts );

	// More/Less Text
	$more_text = sprintf( $attributes['more_text'], $word_count );
	$less_text = sprintf( $attributes['less_text'], $word_count );
  //$more_text = '>>>';
  //$less_text = '<<<';
	// Determine Whether To Show Or Hide Press Release
	$hidden_class = 'sh-hide';
	$hidden_css = 'display: none;';
	$hidden_aria_expanded = 'false';
	if( $attributes['hidden'] === 'no' ) {
		$hidden_class = 'sh-show';
		$hidden_css = 'display: block;';
		$hidden_aria_expanded = 'true';
		$tmp_text = $more_text;
		$more_text = $less_text;
		$less_text = $tmp_text;
	}

	// Format HTML Output
	$output  = '<div id="' . $attributes['type'] . '-link-show' . $post_id . '" class="sh-link ' . $attributes['type'] . '-link ' . $hidden_class .'"><a href="#" onclick="showhide_show(\'' . esc_js( $attributes['type'] ) . '\', ' . $post_id . '); return false;" aria-expanded="' . $hidden_aria_expanded .'"><span id="' . $attributes['type'] . '-toggle-show' . $post_id . '">' . $more_text . '</span></a></div>';
	$output .= '<div id="' . $attributes['type'] . '-content-' . $post_id . '" class="sh-content ' . $attributes['type'] . '-content ' . $hidden_class . '" style="' . $hidden_css . '">' . do_shortcode( $content ) ;
	$output .= '<div id="' . $attributes['type'] . '-link-hide' . $post_id . '" class="sh-link ' . $attributes['type'] . '-link ' . $hidden_class .'"><a href="#" onclick="showhide_hide(\'' . esc_js( $attributes['type'] ) . '\', ' . $post_id . '); return false;" aria-expanded="' . $hidden_aria_expanded .'"><span id="' . $attributes['type'] . '-toggle-hide' . $post_id . '">' . $less_text . '</span></a></div></div>';
	return $output;
}
function get_terms_by_post_type ($taxo_term, $post_types ) {
	global $wpdb;
$query = $wpdb->prepare(
                            "SELECT term.*, COUNT(*) from $wpdb->terms AS term
                            INNER JOIN $wpdb->term_taxonomy AS texo ON term.term_id = texo.term_id
                            INNER JOIN $wpdb->term_relationships AS tr ON tr.term_taxonomy_id = texo.term_taxonomy_id
                            INNER JOIN $wpdb->posts AS post ON post.ID = tr.object_id
                            WHERE post.post_type IN('%s') AND texo.taxonomy IN('%s')
                            GROUP BY term.term_id",
                            join( "', '", $post_types ),
                            join( "', '", $taxo_term)
                        );

$results = $wpdb->get_results( $query );
return $results;

}	

?>
