<?php
/**
*Template Name: Researchers Template
*/
get_header(); ?>

<div class="container_fluid">
  <div class="row justify-content-center">
    <div class="col-12 meet_researchers">
      <h2>Meet the team</h2>
    </div>
  </div>
  
    

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
    if($st_team->have_posts() ) : while ( $st_team->have_posts() ) : $st_team->the_post();?>
    <div class="row rs_wraper">
    <?php if ($left_column){?>
      <div class="rs_liner_left"></div>
        <div class="col-6 researchers_profiles rs_left">
          <div class="researchers_data_wraper">
            <p class="rs_name"><?php the_title();?></p>
            <div class="rs_about"><?php the_content();?></div>
          </div>
        </div>
        <div class="col-6 researchers_profiles rs_right">
          <div class="researchers_portret">
            <div class="portret_mark">
              <img src="<?php the_field('portret'); ?>"/>
              <div class="rs_mark_left">
                <div class="rs_mark_outer_circle"></div>
                <div class="rs_mark_inner_circle"></div>
                <div class="rs_mark_dash"></div>
              </div>
            </div>  
          </div>
        </div>
      <?php  }else{?>
        <div class="rs_liner_right"></div>
        <div class="col-6 researchers_profiles rs_left">
          <div class="researchers_portret">
            <div class="portret_mark">
              <img src="<?php the_field('portret'); ?>"/>
              <div class="rs_mark_right">
                <div class="rs_mark_outer_circle"></div>
                <div class="rs_mark_inner_circle"></div>
                <div class="rs_mark_dash"></div>
              </div>
            </div>  
          </div> 
          </div>
        <div class="col-6 researchers_profiles rs_right">
          <div class="researchers_data_wraper">
            <p class="rs_name"><?php the_title();?></p>
            <div class="rs_about"><?php the_content();?></div>
          </div>
        </div>
        <?php  }
        ?>
    </div> 
    <?php $left_column = !$left_column;
    endwhile; ?>
  <?php endif; ?>
</div>
</div>


<?php get_footer(); ?>
