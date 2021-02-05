<?php
/**
*Template Name: Meet Students Template
*/
get_header(); ?>

<div class="container_fluid">
    <div class="row paper_wrapper justify-content-between student_page">
    <div class="col-lg-4 col-md-5 col-sm-10 col-12 papers_slide">
      <h1><span class="t_bold">Meet Our</span><br><span class="t_bold">Students.</span></h1>
    </div>
	  <div class="col-md-4 col-sm-10 col-12 checkbox_wraper">
		  <div class="checkbox_container">
			<label for="check_amsterdam">enrolled
			<input type="checkbox" class="custom-checkbox" id="check_amsterdam" name="chek_tag" checked>
			<span class="checkmark"></span>
			 </label>
			  
			<label for="check_delft">graduated
			<input type="checkbox" class="custom-checkbox" id="check_delft" name="chek_tag" checked>
			  <span class="checkmark"></span>
			</label>
		</div>
	  </div>
    <div class="col-sm-2 col-12 back_button_wraper">
      <button class="back" onclick="window.location.href='https://aiforretail.ai/people/';">Back</button>
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
    if($st_team->have_posts() ) : while ( $st_team->have_posts() ) : $st_team->the_post(); ?>
    <div class="row rs_wraper rs_open
    <?php 
    $all_the_tags = get_the_tags();
    if( $all_the_tags ){
      foreach( $all_the_tags as $this_tag ){
        if( $this_tag->name == 'graduated' ) {
          echo ' class_graduated';
        } 
        elseif( $this_tag->name == 'enrolled' ){
          echo ' class_enrolled';
        }
        else {  
          // не найдена ни одна метка
        }
      }
    }
    ?>
    ">
    <?php if ($left_column){?>
        <div class="col-6 st_team_profiles st_left order-1">
      <?php  }else{
        if($first_cycle){?>
          <div class="col-6 st_left  st_blank order-1" style="opacity:0">Meet</div>
  <?php  $first_cycle =!$first_cycle;
      } else{?>
        <div class="col-6 st_left st_blank order-1"></div>
      <?php  }
      ?>
        <div class="col-6 st_team_profiles st_right order-2">
        <?php  }
        ?>
        <div class="students_portret">
        <img src="<?php the_field('portret'); ?>"/>
        <?php  if ($left_column){?>
            <div class="st_dash students_dash_left"></div>
            <div class="st_mark students_mark_left"></div>
          <?php  } else {?>
            <div class="st_dash students_dash_right"></div>
            <div class="st_mark students_mark_right"></div>
          <?php }?>
          </div>
        <div class="student_data_wraper">
        <p class="st_name"><?php the_title();?></p>
        <div class="st_about"><?php the_content();?></div>
        </div>
      </div>
      <?php  if ($left_column){?>
        <div class="col-6 st_right st_blank order-2"></div>
          <?php  }
          $left_column = !$left_column;
          ?>
      </div>    
    <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>


<?php get_footer(); ?>
