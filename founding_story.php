<?php
/**
*Template Name: Founding Story Template
*/
get_header(); ?>

<div class="outer-wrapper">
  <div class="wrapper">
    <div class="title_slide">
      <h1>Founding Story</h1>
      <img src="http://localhost:8888/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/FoundStory.png"/>

  </div>

    <?php $args = array(
					'page_id' => 21,
          'meta_key' => 'date',
          'orderby'			=> 'meta_value',
					 'order' => 'ASC',
				);

				$story = new WP_Query( $args );
				$current_year ="";
        if( have_rows('single_story') ) : while( have_rows('single_story') ) : the_row();
				$story_year = substr(get_sub_field('date'), -4);
				if ($current_year != $story_year) {
					$current_year = $story_year;
					?>
					<div class="slide one story_date_heading"><?php echo($current_year);?></div>
					<?php
				} else {

				}?>
    <div class="half_slide <?php the_sub_field('length_class');?> <?php the_sub_field('direction_class');?>">
      <?php if(get_sub_field('direction_class') == 'top') {  ?>
        <p><?php the_sub_field('date');?></p>
        <div class="on_hover time_circle <?php the_sub_field('direction_class');?> <?php the_sub_field('length_class');?>">
          <div class="outer_circle">
          </div>
          <div class="inner_circle">
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
      </div>
      <p><?php the_sub_field('date');?></p>
    <?php  }

      ?>


    </div>
    <div class="slide">
      <div class="divider"></div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

  </div>
</div>



<?php get_footer(); ?>
