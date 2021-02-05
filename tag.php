<?php

get_header(); ?>

<div class="container-fluid">
  <div class="row paper_wrapper justify-content-center">
    <div class="col-lg-4 col-md-7 col-sm-10 col-12 papers_slide order-sm-1 order-3">
      <h1><span>Research Papers</span><br><span class="t_bold">& Talks</span></h1>
      <?php
	  global $query_string;
	  $q_string=''; 
	  $q_array = explode("&", $query_string);
	 
	  foreach($q_array as $q_part) {
		  if (strpos($q_part,'tag=') !== false) {
			list($q_string) = sscanf($q_part, "tag=%s");
			break;
		  }
	  }
	  $about_papers = new WP_Query( array( 'page_id' => 33 ));
      if ( $about_papers->have_posts() ) : while ( $about_papers->have_posts() ) : $about_papers->the_post();
      ?>
      <div class="papers_section"><?php the_content(); ?></div>
    <?php endwhile; ?>
  <?php endif; 
  $tag_list = get_terms_by_post_type(['post_tag'],['papers_and_talks']); ?>
  <div class="tag_wraper paper">
  <?php foreach($tag_list as $tag_item) { ?>
    <li class="tag_item" data-tag="<?php echo $tag_item->slug;?>">
      <a href="<?php echo esc_url(get_tag_link($tag_item->term_id));?>">
      <?php echo $tag_item->name; ?>
      </a>
  </li>
      <?php  } ?>
	  <li class="tag_item" data-tag="all_tags">
      <a href="https://aiforretail.ai/research-papers-talks/">
      All
      </a>
  </li>
  
	</div>
</div>

<div class="col-md-3 d-sm-none d-md-flex d-lg-none order-2"></div>
<div class="col-sm-2 col-12 d-flex d-sm-flex d-md-flex d-lg-none paper_buton_wraper order-sm-3 order-1">
  <button class="back" onclick="window.location.href='http://192.168.1.5:8888//AD_AIRLab/wordpress/what/';">Back</button>
</div>
<div class="col-lg-8 col-md-10 col-sm-12 col-10 order-sm-4 order-4">
  <div class="row paper_row paper_board">
    <div class="col-12 d-none d-sm-none d-md-none d-lg-flex paper_buton_wraper">
      <button class="back" onclick="window.location.href='http://192.168.1.5:8888//AD_AIRLab/wordpress/what/';">Back</button>
    </div>
    <?php $args = array(
	  'post_type' => 'papers_and_talks',
      'post_status' => 'publish',
      'order' => 'ASC',
      'posts_per_page' => -1,
	);
	if ($q_string) {
		$args['tag'] = $q_string; 
	}
	$r_paper = new WP_Query( $args );
    $row_count =0;
    if($r_paper->have_posts() ) : while ( $r_paper->have_posts() ) : $r_paper->the_post();
    $category = get_the_category();
    if ($row_count%3 == 0) :?>

  <?php endif;?>
  <div class="col-lg-4 col-sm-6 col-10 paper-box" data-row="<?php echo $row_count?>">
    <a href="<?php the_permalink(); ?>" class="paper_link">
      <div class="paper_background"> <img src="<?php the_field('background_paper'); ?>"/> </div>
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
