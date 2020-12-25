<?php
/**
*Template Name: Connect Template
*/
get_header(); ?>

<div class="container-fluid connect_container">
    <div class="row justify-content-center connect_row row-eq-height">
      <div class="col-lg-4 col-md-5 col-sm-10 col-10">
        <?php
        $connect = new WP_Query( array( 'page_id' => 15 ) );
        if ( $connect->have_posts() ) : while ( $connect->have_posts() ) : $connect->the_post();
        ?>
        <div class="form_background">
          <?php the_content(); ?></div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-md-6 col-ms-11 col-10 map">
        <img src="http://localhost:8888/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/connect_illustration-01.png" />

      </div>

    </div>
    <div></div>
</div>
<script>
$('input').attr('autocomplete', 'off');
</script>
<?php get_footer(); ?>
