<?php
/**
*Template Name: Research Papers Template
*/
get_header(); 

$background_names = array(
  '/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/PaperGreen-min.png',
  '/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/PaperGreen_1-min.png',
  '/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/PaperGreen_2-min.png',
  '/AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/PaperGreen_3-min.png'
);
?>
<>
<div class="container-fluid">
  <div class="row paper_wrapper">
    <div class="col-md-3">
      <h1><span>RESEARCH</span> <span>PAPERS</span></h1>
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
    <div class="col-md-9 ">
    <div class="row paper_row paper_board">
      <?php $args = array(
        'post_type' => 'papers_and_talks',
        'post_status' => 'publish',
        'order' => 'ASC',
        'posts_per_page' => -1,
        'cat' => 6
      );
      $r_paper = new WP_Query( $args );
      $row_count =0;
      if($r_paper->have_posts() ) : while ( $r_paper->have_posts() ) : $r_paper->the_post();
        if ($row_count%3 == 0) :?>
          
        <?php endif;?>    
      <div class="col-md-4 col-sm-6 col-xs-1 paper-box" data-row="<?php echo $row_count?>">
      <a href="<?php the_permalink(); ?>" class="paper_link">
      <div class="paper_background"> <img src="<?php echo $background_names[$row_count%4]; ?>"> </div>
      <div class="paper_heading">  <p><?php the_field('title'); ?></p></div> 
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
