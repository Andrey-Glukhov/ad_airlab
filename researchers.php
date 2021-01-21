<?php
/**
*Template Name: Researchers Template
*/
get_header(); ?>

<div class="container_fluid">
  <div class="row paper_wrapper justify-content-between">
    <div class="col-lg-4 col-md-5 col-sm-10 col-12 papers_slide">
      <h1><span>Meet Researchers</span><br><span class="t_bold">& Staff.</span></h1>
    </div>
    <div class="col-sm-2 col-12 back_button_wraper">
      <button class="back" onclick="window.location.href='http://192.168.1.5:8888//AD_AIRLab/wordpress/people/';">Back</button>
    </div>
  </div>



    <?php $args = array(
      'post_type' => 'team',
      'post_status' => 'publish',
      'order' => 'ASC',
      'posts_per_page' => -1,
      'cat' => 5

    );
    $left_column = true;
    $first_cycle= true;
    $st_team = new WP_Query( $args );
    if($st_team->have_posts() ) : while ( $st_team->have_posts() ) : $st_team->the_post();?>
    <div class="row rs_wraper">
    <?php if ($left_column){?>
      <div class="rs_liner_left"></div>
        <div class="col-sm-6 col-8 researchers_profiles rs_left">
          <div class="researchers_data_wraper">
            <p class="rs_name"><?php the_title();?></p>
            <div class="rs_about"><?php the_content();?></div>
          </div>
        </div>
        <div class="col-sm-6 col-4 researchers_profiles rs_right">
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
        <div class="col-sm-6 col-4 researchers_profiles rs_left">
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
        <div class="col-sm-6 col-8 researchers_profiles rs_right">
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
