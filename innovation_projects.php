<?php
/**
*Template Name: Innovation Template
*/
get_header(); ?>
<div class="container-fluid">
  <div class="row paper_wrapper justify-content-center">
    <div class="col-lg-4 col-md-5 col-sm-10 col-12 papers_slide">
      <h1><span class="t_bold">Innovation</span><br><span class="t_bold">Projects.</span></h1>
      <?php
      $inovation_projects = new WP_Query( array( 'page_id' => 37 ));
      if ( $inovation_projects->have_posts() ) : while ( $inovation_projects->have_posts() ) : $inovation_projects->the_post();
      ?>
      <div class="papers_section"><?php the_content(); ?></div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<div class="col-lg-8 col-md-6 col-sm-10 col-12">
	
  <div class="row justify-content-around">
	  <div class="col-11 back_button" style="padding-right: 0;">
      <button class="back" onclick="window.location.href='https://aiforretail.ai/what/';">Back</button>
    </div>
    <?php
    $args = array(
      'post_type' => 'innovation_projects',
      'post_status' => 'publish',
      'order' => 'ASC',
      'posts_per_page' => -1,
    );
    $single_progect = new WP_Query( $args );

    if($single_progect->have_posts() ) : while ( $single_progect->have_posts() ) : $single_progect->the_post();
    ?>
   <div class="col-sm-5 col-8 in_pr_title">
     <a href="<?php the_permalink(); ?>">
		 <p><?php the_title(); ?></p>
     </a>
	   <div class="hover_img" style="background-image:url(<?php the_field('featured_image'); ?>);"></div>
   </div>

  <?php endwhile; endif ?>
    </div>
</div>

</div>
</div>

<?php get_footer(); ?>
