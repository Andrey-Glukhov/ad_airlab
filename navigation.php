<nav class="navbar navbar-expand-md">
  <a class="navbar-brand" href="http://aiforretail.ai/"><img src="http://aiforretail.ai/wp-content/themes/ad_airlab/img/AirlabLogo-01.png"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <div class="animated-icon1"><span></span><span></span><span></span></div>
  </button>

  <?php
         wp_nav_menu( array(
             'theme_location'    => 'primary',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => 'collapse navbar-collapse',
             'container_id'      => 'bs-example-navbar-collapse-1',
             'menu_class'        => 'nav navbar-nav',
             'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
             'walker'            => new WP_Bootstrap_Navwalker(),
         ) );
         ?>
</nav>
