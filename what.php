<?php
/**
*Template Name: What Template
*/
get_header(); ?>


<div class="container-fluid">
  <div class="row paper_wrapper justify-content-center">
    <div class="col-lg-4 col-md-5 col-sm-10 col-12 papers_slide">
      <h1><span>What</span><br><span class="t_bold">We Do.</span></h1>
      <?php
      $about_what = new WP_Query( array( 'page_id' => 11 ));
      if ( $about_what->have_posts() ) : while ( $about_what->have_posts() ) : $about_what->the_post();
      ?>
      <div class="papers_section"><?php the_content(); ?></div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-12 what_choise_wrapper">
  <div class="what_choise">
    <a href="http://localhost:8888/AD_AIRLab/wordpress/research-papers-talks/">
      <div class="what_background"> <img src="http://localhost:8888/AD_AIRLab/wordpress/wp-content/uploads/2020/12/PaperGreen.png"/> </div>
      <div class="what_heading"><h2>Research Papers & Talks</h2></div>
    </a>
  </a>
</div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-12 what_choise_wrapper">
  <div class="what_choise">
    <a href="http://localhost:8888/AD_AIRLab/wordpress/student-projects/">
      <div class="what_background"> <img src="http://localhost:8888/AD_AIRLab/wordpress/wp-content/uploads/2020/12/PaperGreen_2.png"/> </div>
      <div class="what_heading"><h2>Innovation Projects</h2></div>
    </a>
  </div>
</div>
</div>
</div>


<?php get_footer(); ?>
