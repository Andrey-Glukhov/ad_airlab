<?php
/**
*Template Name: People Template
*/
get_header(); ?>

<div class="container-fluid">
  <div class="row paper_wrapper justify-content-center">
    <div class="col-lg-4 col-md-5 col-sm-10 col-12 papers_slide">
      <h1><span class="t_bold">Our</span><br><span class="t_bold">People.</span></h1>
      <?php
      $about_people = new WP_Query( array( 'page_id' => 13 ));
      if ( $about_people->have_posts() ) : while ( $about_people->have_posts() ) : $about_people->the_post();
      ?>
      <div class="papers_section"><?php the_content(); ?></div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<div class="col-lg-4 col-md-3 col-sm-8 col-12 people_choise">
  <a href="http://aiforretail.ai/researchers-staff/">
    <h2 class="aligner">Our Students</h2>
  <img src="http://aiforretail.ai/wp-content/uploads/2020/12/team_portrets-03.png"/>
  <h2>Researchers and Staff</h2>
</a>
</div>
<div class="col-lg-4 col-md-3 col-sm-8 col-12 people_choise">
  <a href="http://aiforretail.ai/our-students/">
  <h2 class="desctop_students" class="mobile_people">Our Students</h2>
  <img src="http://aiforretail.ai/wp-content/uploads/2020/12/team_portrets-04.png"/>
  <h2 class="aligner">Researchers and Staff</h2>
  <h2 class="mobile_students">Our Students</h2>
  </a>
</div>
</div>
</div>


<?php get_footer(); ?>
