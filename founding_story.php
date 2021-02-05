<?php
/**
*Template Name: Founding Story Template
*/
get_header(); ?>
<div id="btnScrollRigth"></div>
<div id="btnScrollLeft"></div>

<div class="outer-wrapper">
  <div class="wrapper about_wrapper">
    <?php $args = array(
      'page_id' => 21,
      'meta_key' => 'date',
      'orderby'			=> 'meta_value',
      'order' => 'ASC',
    );

    $story = new WP_Query( $args );
    $current_year ="";
    ?>

    <div class="title_slide first">
      <h1><span>About Our</span><br><span class="t_bold">AIRLabs</span></h1>
      <div class="about_section"><div class="inner_about_section"><?php the_content();?></div></div>
    </div>
	  <div class="line_middle"></div>
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
        <div class="on_hover time_circle <?php the_sub_field('direction_class');?> <?php the_sub_field('length_class');?>">
          <div class="outer_circle">
          </div>
          <div class="inner_circle">
          </div>
          <div class="image_circle" style="background-image:url(<?php the_sub_field('event_image');?>);">
          </div>
          <div class="description popup_top"><img src="<?php the_sub_field('pictogramm');?>"/>
            <p class="timeline_date"><?php the_sub_field('title'); ?></p>
            <?php the_sub_field('description'); ?>
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
        <div class="description popup_bottom"><img src="<?php the_sub_field('pictogramm');?>"/>
          <p class="timeline_date"><?php the_sub_field('title'); ?></p>
          <?php the_sub_field('description'); ?>
        </div>
      </div>

    <?php  }

      ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<div class="title_slide second">
  <h1><span>Scientific R&amp;D</span><br><span class="t_bold">at Ahold Delhaize</span></h1>
  <?php
    $statement = new WP_Query( array( 'page_id' => 2 ));
    if ( $statement->have_posts() ) : while ( $statement->have_posts() ) : $statement->the_post();
  ?>
  <div class="about_section"><div class="inner_about_section"><?php the_content(); ?></div></div>
<?php endwhile; ?>
<?php endif; ?>

</div>
<div class="ceo_portrait"></div>
</div>
</div>

<?php get_footer(); ?>

