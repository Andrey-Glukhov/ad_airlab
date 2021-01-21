<?php
/**
*Template Name: Connect Template
*/
get_header(); ?>

<div class="container-fluid connect_container">
    <div class="row justify-content-center connect_row row-eq-height">
      <div class="col-lg-4 col-md-5 col-sm-8 col-12">
        <?php
        $connect = new WP_Query( array( 'page_id' => 15 ) );
        if ( $connect->have_posts() ) : while ( $connect->have_posts() ) : $connect->the_post();
        ?>
        <div class="form_background">
          <?php the_content(); ?>
          <div class="connect-icons">
                        <a href="https://www.linkedin.com/company/aiforretail" target="_blank"><img src="http://192.168.1.5:8888//AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/linkedin-brands.png"/></a>
                        <a href="https://twitter.com/AIforRetail" target="_blank"><img src="http://192.168.1.5:8888//AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/twitter-square-brands.png"></a></div>
          <div class="search_name"><p>@AIRLAB</p></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-md-6 col-ms-11 col-10 map">
        <img src="http://192.168.1.5:8888//AD_AIRLab/wordpress/wp-content/themes/ad_airlab/img/connect_illustration-01.png" />

      </div>

    </div>
</div>

<?php get_footer(); ?>
