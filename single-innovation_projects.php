<?php get_header();
if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<div class="container-fluid">
  <div class="row paper_wrapper justify-content-center">
    <div class="col-md-5 col-sm-10 col-12 papers_slide small">
		<div class="sm-butt back_button" style="padding-right: 0;">
      <button class="back" onclick="window.location.href='https://aiforretail.ai/innovation-projects/';">Back</button>
    </div>
      <h1><span class="t_bold"><?php the_title(); ?></span></h1>
      <div class="papers_section"><?php the_field('introduction'); ?></div>
    </div>
	 <div class="col-md-6 col-sm-10 col-12 papers_slide">
		 <div class="md-butt back_button" style="padding-right: 0;">
      <button class="back" onclick="window.location.href='https://aiforretail.ai/innovation-projects/';">Back</button>
    </div>
      <?php the_content(); ?>
    </div>
  </div>
</div>



<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
