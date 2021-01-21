<?php
/**
*Template Name: News Template
*/
get_header();
?>
<div class="container-fluid">
  <div class="row news_wrapper">
    <div class="col-md-4 papers_slide">
      <h1><span>Our</span><br><span class="t_bold">News.</span></h1>
      <?php
      $about_news = new WP_Query( array( 'page_id' => 219 ));
      if ( $about_news->have_posts() ) : while ( $about_news->have_posts() ) : $about_news->the_post();
      ?>
      <div class="papers_section"><?php the_content(); ?></div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<div class="col-8">
  <div class="container">
    <div class="row">
      <div class="col-12 news_title">
        <h2>News</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-6 items_wraper">
        <div class="row">
          <?php $args = array(
            'post_type' => 'news_events',
            'post_status' => 'publish',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'cat' => 15
          );
          $news = new WP_Query( $args );
          if($news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
          <div class="col-6 single_news_wraper">
            <div class="single_news_title" style="background-color:<?php the_field('color'); ?>"><?php the_title(); ?></div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="col-6 tweet_feed">
    <div class="feed_wrapper"><a class="twitter-timeline" href="https://twitter.com/AIforRetail?ref_src=twsrc%5Etfw">Tweets by AIforRetail</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="join_wraper"><img src="http://192.168.1.5:8888//AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/twitter-brands-01.png"/><p>Join the conversation</p></div>
  </div>

</div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
