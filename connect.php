<?php
/**
*Template Name: Connect Template
*/
get_header(); ?>

<div class="container-fluid connect_container">
    <div class="row justify-content-center">
      <div class="col-lg-2 col-md-1 d-none d-sm-none d-md-block">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-10">
        <?php
        $connect = new WP_Query( array( 'page_id' => 15 ) );
        if ( $connect->have_posts() ) : while ( $connect->have_posts() ) : $connect->the_post();
        ?>
        <div class="form_background">
          <?php the_content(); ?></div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-6 col-md-5">

      </div>

    </div>
</div>
<?php get_footer(); ?>
