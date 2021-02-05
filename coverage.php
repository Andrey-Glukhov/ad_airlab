<?php
/**
*Template Name: Coverage Template
*/
get_header();
?>
<div class="container-fluid">
  <div class="row news_wrapper justify-content-center">
<div class="col-md-9 col-sm-10 col-12">
	<div class="container-fluid" style="margin-bottom:20px;">
    <div class="row">
      <div class="col-12 news_title">
        <h2>Coverage.</h2>
      </div>
</div>
 <div class="row">
	 <div class="row flex-row" >
        <?php $args = array(
          'post_type' => 'news_events',
          'post_status' => 'publish',
          'meta_key'			=> 'date',
	        'orderby'			=> 'meta_value',
	        'order'				=> 'DESC',
          'posts_per_page' => -1,
          'cat' => 15
        );
        $news = new WP_Query( $args );
        if($news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
        
        <div class="col-md-4 col-sm-6 col-12 with_margin">
			<a href="<?php the_field('coverage_link'); ?>" target="_blank">
				<div class="single_news_title" style="background-color:<?php the_field('color'); ?>">
					<p><?php the_title(); ?></p>
					<p style="font-family: 'Connary-Fagen-Visby-CF-Light';"><?php the_field('date'); ?></p>
				</div>
				<div class="news_img_hover"></div>
			</a>
			</div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
	 </div>
 </div>
</div>
</div>
</div>	


<?php get_footer(); ?>
