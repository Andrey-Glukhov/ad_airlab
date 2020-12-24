<?php
/**
*Template Name: Meet Students Template
*/
get_header(); ?>

<div class="container_fluid">
<div class="row justify-content-center">
  <div class="col-12 meet_st_pict"><img src="http://localhost:8888/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/Meet_Students-01.png"/>
  </div>
</div>
        <div class="row st_wraper">
          <div class="st_line"></div>

          <div class="col-6">Meet the Students</div>

<?php $args = array(
					'post_type' => 'team',
					'post_status' => 'publish',
					 'order' => 'ASC',
					'posts_per_page' => -1,
          'cat' => 3

				);
        $left_column = true;

				$st_team = new WP_Query( $args );
        if($st_team->have_posts() ) : while ( $st_team->have_posts() ) : $st_team->the_post();
        if ($left_column){?>
          <div class="col-6 st_team_profiles st_left">
      <?php  }else{?>
          <div class="col-6 st_team_profiles st_right">
    <?php  }
    $left_column = !$left_column;
        ?>
            <img src="<?php the_field('portret'); ?>"/>
            <p><?php the_title();?></p>
              <p><?php the_content();?></p>
          </div>

      <?php endwhile; ?>
<?php endif; ?>
  </div>
</div>


<?php get_footer(); ?>
