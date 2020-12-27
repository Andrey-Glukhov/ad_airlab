<?php
/**
*Template Name: Researchers Template
*/
get_header(); ?>

<div class="container_fluid">
  <div class="row justify-content-center">
    <div class="col-12 meet_st_pict"><img src="http://localhost:8888/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/Meet_Students-01.png"/>
    </div>
  </div>
  <div class="row st_wraper">
    

    <?php $args = array(
      'post_type' => 'team',
      'post_status' => 'publish',
      'order' => 'ASC',
      'posts_per_page' => -1,
      'cat' => 3

    );
    $left_column = true;
    $first_cycle= true;
    $st_team = new WP_Query( $args );
    if($st_team->have_posts() ) : while ( $st_team->have_posts() ) : $st_team->the_post();
    if ($left_column){?>
        <div class="col-6 st_team_profiles st_left">
          <div class="student_data_wraper">
            <p class="st_name"><?php the_title();?></p>
            <div class="st_about"><?php the_content();?></div>
          </div>
        </div>
        <div class="col-6 st_team_profiles st_right">
          <div class="students_portret">
            <img src="<?php the_field('portret'); ?>"/>
          </div>
        </div>
      <?php  }else{?>
        <div class="col-6 st_team_profiles st_left">
          <div class="students_portret">
            <img src="<?php the_field('portret'); ?>"/>
          </div>
        </div>
        <div class="col-6 st_team_profiles st_right">
          <div class="student_data_wraper">
            <p class="st_name"><?php the_title();?></p>
            <div class="st_about"><?php the_content();?></div>
          </div>
        </div>
        <?php  }
        ?>
        
      <?php $left_column = !$left_column;
    endwhile; ?>
  <?php endif; ?>
</div>
</div>


<?php get_footer(); ?>
