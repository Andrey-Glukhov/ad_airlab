<?php get_header();
if (have_posts()) : while ( have_posts() ) : the_post();
$category = get_the_category();
$posttags = get_the_tags();?>

<div class="container-fluid abstract_container">
  <div class="row justify-content-center">
    <div class="col-9 back_button">
      <button class="back" onclick="window.location.href='http://localhost:8888/AD_AIRLab/wordpress/research-papers-talks/';">Back</button>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-2 abstract_data">
      <div class="single_paper_wraper">
        <div class="single_title_wraper">
          <p><?php the_field('title'); ?></p>
          <p class="">by <?php the_field('author'); ?>/ <br><?php echo $category[0]->name; ?></p>
        </div>
        <img src="<?php the_field('background_paper'); ?>"/>
      </div>
      <button class="download" onclick=" window.open('<?php the_field('link'); ?>','_blank')">DOWNLOAD!</button>
      <div class="author"><img src="<?php the_field('portrait'); ?>"/><p><?php the_field('author'); ?></p></div>
    </div>
    <div class="col-1"></div>
    <div class="col-6">
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
    </div>
  </div>

</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
