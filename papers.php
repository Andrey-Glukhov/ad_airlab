<?php
/**
*Template Name: Research Papers Template
*/
get_header(); ?>

<div class="container-fluid">
  <div class="row paper_wraper">
    <div class="col-md-4">
      <h1><span>RESEARCH</span><span>PAPERS</span></h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet
        faucibus mauris. Sed id libero eu lectus interdum vestibulum. Etiam sit
        amet lobortis erat, sit amet semper odio. Cras eget lacinia nunc. Praesent
        ligula odio, vulputate ac lobortis at, consequat quis tortor. Donec quis
        magna et est sodales posuere eget vel augue. Mauris euismod feugiat nisl,
        ac porttitor neque dapibus vitae. Quisque varius orci turpis, at mollis
        purus luctus vitae. Quisque vitae rhoncus lacus. Integer sed mi id nulla
        tristique lobortis at in leo.
      </p>
    </div>
    <div class="col-md-8">
      <?php $args = array(
        'post_type' => 'papers_and_talks',
        'post_status' => 'publish',
        'order' => 'ASC',
        'posts_per_page' => -1,
        'cat' => 6
      );
      $r_paper = new WP_Query( $args );
      if($r_paper->have_posts() ) : while ( $r_paper->have_posts() ) : $r_paper->the_post();?>

      <p><?php the_field('title'); ?></p>

    <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>
</div>


<?php get_footer(); ?>
