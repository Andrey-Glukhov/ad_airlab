<?php get_header();
if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<div class="container-fluid">
  <div class="row paper_wrapper justify-content-center">
    <div class="col-md-3 col-sm-10 col-12 buzzing_card">
      <div class="buzzing_section">
		  <?php the_field('date'); ?></div>
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="col-md-8 col-sm-10 col-12 buzzing_content">
		<button class="back" onclick="window.location.href='https://aiforretail.ai/whats-buzzing/';" style="align-self: flex-end;">Back</button>
      <div class=""><?php the_content(); ?></div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
