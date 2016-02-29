<header class="banner">
  <div class="container">
    <a href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'?>" class="pull-left logo" alt="logo"/></a>
    <button class="btn btn-default pull-right green">My account</button>
  </div>
</header>
<nav class="nav-primary navbar navbar-default">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php
    if (has_nav_menu('primary_navigation')) :
         /**
          * Displays a navigation menu
          * @param array $args Arguments
          */
        $args = array(
          'theme_location' => 'primary_navigation',
          'menu' => '',
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'bs-example-navbar-collapse-1',
          'menu_class' => 'nav navbar-nav',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          'before' => '',
          'after' => '',
          'link_before' => '',
          'link_after' => '',
          'items_wrap' => '<ul class = "%2$s" id = "%1$s" >%3$s</ul>',
          'depth' => 0,
          'walker' => new wp_bootstrap_navwalker()
        );
        wp_nav_menu( $args );

    endif;
    ?>
  </div>
</nav>
