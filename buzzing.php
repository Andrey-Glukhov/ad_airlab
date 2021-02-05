<?php
/**
*Template Name: Buzzing Template
*/
get_header();
?>
<div class="container-fluid">
  <div class="row news_wrapper justify-content-center">
<div class="col-md-9 col-sm-10 col-12">
  <div class="container-fluid" style="margin-bottom:20px;">
    <div class="row">
      <div class="col-12 news_title">
        <h2>What’s buzzing? </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 col-sm-12 items_wraper">
        <div class="row">
          <?php $args = array(
            'post_type' => 'news_events',
            'post_status' => 'publish',
            'meta_key'			=> 'date',
	          'orderby'			=> 'meta_value',
	          'order'				=> 'DESC',
            'posts_per_page' => -1,
            'cat' => 16
          );
          $news = new WP_Query( $args );
          if($news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
          <div class="col-md-6 col-sm-12 single_news_wraper with_margin">
            <a href="<?php the_permalink(); ?>"><div class="single_news_title" style="background-color:<?php the_field('color'); ?>">
				<p><?php the_field('date'); ?></p>
				<p><?php the_title(); ?></p>
				</div></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="col-md-5 col-sm-12 tweet_feed">
    <div class="feed_wrapper"><a class="twitter-timeline" href="https://twitter.com/AIforRetail?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="join_wraper"><img src="https://aiforretail.ai/wp-content/uploads/2021/01/twitter-01.png"/><a href="https://twitter.com/AIforRetail?ref_src=twsrc%5Etfw" target="_blank">Join the conversation</a></div>
  </div>

</div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
