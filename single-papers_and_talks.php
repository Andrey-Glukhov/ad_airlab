<?php get_header();
if (have_posts()) : while ( have_posts() ) : the_post();
$category = get_the_category();
$posttags = get_the_tags();?>

<div class="container-fluid abstract_container">
  <div class="row justify-content-center">
    <div class="col-lg-10 col-md-11 back_button">
      <button class="back" onclick="window.location.href='http://aiforretail.ai/research-papers-talks/';">Back</button>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-3 col-sm-10 col-10 abstract_data">
      <div class="left_wrapper">
      <div class="single_paper_wraper">
        <div class="single_title_wraper">
          <p><?php the_field('title'); ?></p>
          <p>by <?php the_field('author'); ?>/ <br><?php echo $category[0]->name; ?></p>
        </div>
        <img src="<?php the_field('background_paper'); ?>"/>
      </div>
		  <?php if (strpos(get_field('link'), 'http') !== false) {?>
      <button class="download" onclick=" window.open('<?php the_field('link'); ?>','_blank')">DOWNLOAD!</button><?php } elseif (strpos(get_field('learn_more'), 'http') !== false) {?>
	<button class="download" onclick=" window.open('<?php the_field('learn_more'); ?>','_blank')">LEARN MORE!</button><?php } elseif (strpos(get_field('watch'), 'http') !== false) {?>
	<button class="download" onclick=" window.open('<?php the_field('watch'); ?>','_blank')">WATCH!</button><?php }?>
    </div>
      <div class="author"><img src="<?php the_field('portrait'); ?>"/><p><?php the_field('author'); ?></p></div>
    </div>
    <div class="col-1 d-none d-sm-none d-md-none d-lg-block"></div>
	  
    <div class="col-lg-6 col-md-8 col-sm-10">
       <?php if (has_category('publications')) { ?> 
    <div class="abstract_content">
        <div class="abstract_wrapper">
          <h1>Abstract</h1>
          <?php the_content(); ?>
        </div>
      </div>
      <ul class="tag_wraper"><?php  if ($posttags) {
        foreach($posttags as $tag) {
        echo '<li>' .$tag->name. '</li>';
        }
      }?>
    </ul>
    <?php } elseif (has_category('talks')){?>
		<div class="talks_content_wraper"> <?php the_content();?></div>
    <?php  }?>
	
    </div>
  </div>

</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
