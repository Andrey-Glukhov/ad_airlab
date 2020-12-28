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

    <?php $args = array(
      'post_type' => 'team',
      'post_status' => 'publish',
      'order' => 'ASC',
      'posts_per_page' => -1,
      'cat' => 3

    );
    $left_column = false;
    $first_cycle= true;
    $st_team = new WP_Query( $args );
    if($st_team->have_posts() ) : while ( $st_team->have_posts() ) : $st_team->the_post();
    if ($left_column){?>
        <div class="col-6 st_team_profiles st_left">
      <?php  }else{
        if($first_cycle){?>
          <div class="col-6 st_left">Meet</div>
  <?php  $first_cycle =!$first_cycle;
      } else{?>
        <div class="col-6 st_left"></div>
      <?php  }
      ?>
        <div class="col-6 st_team_profiles st_right">
        <?php  }
        ?>
        <div class="students_portret">
        <img src="<?php the_field('portret'); ?>"/>
        <?php  if ($left_column){?>
            <div class="students_dash_left"></div>
            <div class="students_mark_left"></div>
          <?php  } else {?>
            <div class="students_dash_right"></div>
            <div class="students_mark_right"></div>
          <?php }?>
          </div>
        <div class="student_data_wraper">
        <p class="st_name"><?php the_title();?></p>
        <div class="st_about"><?php the_content();?></div>
        </div>
      </div>
      <?php  if ($left_column){?>
        <div class="col-6 st_right"></div>
          <?php  }
          $left_column = !$left_column;
          ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>


<?php get_footer(); ?>
