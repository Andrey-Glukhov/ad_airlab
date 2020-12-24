<?php
/**
*Template Name: Connect Template
*/
get_header(); ?>

<div class="container connect_container">
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col-lg-4 col-md-6">
        <?php
        $connect = new WP_Query( array( 'page_id' => 15 ) );
        if ( $connect->have_posts() ) : while ( $connect->have_posts() ) : $connect->the_post();
        ?>
        <div class="form_background">
          <?php the_content(); ?></div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-6">

      </div>

    </div>
</div>
<?php get_footer(); ?>
