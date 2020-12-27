<?php
/**
*Template Name: Research Papers Template
*/
get_header();

?>

<div class="container-fluid">
  <div class="row paper_wrapper">
    <div class="col-md-4 papers_slide">
      <h1><span>Research Papers</span><br><span class="t_bold">& Talks</span></h1>
        <?php
          $about_papers = new WP_Query( array( 'page_id' => 33 ));
          if ( $about_papers->have_posts() ) : while ( $about_papers->have_posts() ) : $about_papers->the_post();
        ?>
        <div class="papers_section"><?php the_content(); ?></div>
      <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <div class="col-md-8">
    <div class="row paper_row paper_board">
      <?php $args = array(
        'post_type' => 'papers_and_talks',
        'post_status' => 'publish',
        'order' => 'ASC',
        'posts_per_page' => -1,
      );
      $r_paper = new WP_Query( $args );
      $row_count =0;
      if($r_paper->have_posts() ) : while ( $r_paper->have_posts() ) : $r_paper->the_post();
      $category = get_the_category();
        if ($row_count%3 == 0) :?>

        <?php endif;?>
      <div class="col-lg-4 col-md-6 col-10 paper-box" data-row="<?php echo $row_count?>">
      <a href="<?php the_permalink(); ?>" class="paper_link">
      <div class="paper_background"> <img src="<?php the_field('background_paper'); ?>"> </div>
      <div class="paper_heading">  <p><?php the_field('title'); ?></p> <p class="author_cat">by <?php the_field('author'); ?>/ <br><?php echo $category[0]->name; ?></p></div>
     </a>
        </div>
         <?php $row_count++;
        if ($row_count%3 == 0) :?>

          <?php endif;
        endwhile; ?>
          </div>
  <?php endif; ?>
</div>
</div>
</div>


<?php get_footer(); ?>
