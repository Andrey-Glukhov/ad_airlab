<?php
/**
*Template Name: Founding Story Template
*/
get_header(); ?>

<div class="outer-wrapper">
  <div class="wrapper">
    <?php $args = array(
					'page_id' => 21,
          'meta_key' => 'date',
          'orderby'			=> 'meta_value',
					 'order' => 'ASC',
				);

				$story = new WP_Query( $args );
				$current_year ="";
        	?>

    <div class="title_slide">
      <h1><span>About Our</span><br><span class="t_bold">AIRLabs</span></h1>
      <div class="about_section"><?php the_content();?></div>

  </div>


			<?php
      if( have_rows('single_story') ) : while( have_rows('single_story') ) : the_row();
      $story_year = substr(get_sub_field('date'), -4);

				if ($current_year != $story_year) {
					$current_year = $story_year;
					?>
					<div class="slide one story_date_heading"><?php echo($current_year);?></div>
					<?php
				} else {?>
          <div class="slide">
            <div class="divider"></div>
          </div>

			<?php	}?>
    <div class="half_slide <?php the_sub_field('length_class');?> <?php the_sub_field('direction_class');?>">
      <?php if(get_sub_field('direction_class') == 'top') {  ?>
        <div class="pict_wraper on_top" style="background-image:url(<?php the_sub_field('pictogramm');?>);"></div>
        <div class="on_hover time_circle <?php the_sub_field('direction_class');?> <?php the_sub_field('length_class');?>">
          <div class="outer_circle">
          </div>
          <div class="inner_circle">
          </div>
          <div class="image_circle" style="background-image:url(<?php the_sub_field('event_image');?>);">
          </div>
        </div>
        <div class="time_line"></div>
    <?php  }else{  ?>
      <div class="time_line"></div>
      <div class="on_hover time_circle <?php the_sub_field('direction_class');?> <?php the_sub_field('length_class');?>">
        <div class="outer_circle">
        </div>
        <div class="inner_circle">
        </div>
        <div class="image_circle" style="background-image:url(<?php the_sub_field('event_image');?>);">
        </div>
      </div>
      <div class="pict_wraper on_bottom" style="background-image:url(<?php the_sub_field('pictogramm');?>);"></div>
    <?php  }

      ?>
    </div>


  <?php endwhile; ?>
<?php endif; ?>

  </div>
</div>



<?php get_footer(); ?>