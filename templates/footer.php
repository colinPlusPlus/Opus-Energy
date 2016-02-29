<footer class="content-info">
  <div class="container">
  	<?php if (has_nav_menu('our-sites')): ?>
  		<h4>OUR SITES </h4>
	  	<?php    /**
	  		* Displays Our Sites menu
	  		* @param array $args Arguments
	  		*/
	  	
	  		$args = array(
	  			'theme_location' => 'our-sites',
	  			'menu' => '',
	  			'container' => 'div',
	  			'container_class' => '',
	  			'container_id' => '',
	  			'menu_class' => 'list-inline',
	  			'menu_id' => '',
	  			'echo' => true,
	  			'fallback_cb' => 'wp_page_menu',
	  			'before' => '',
	  			'after' => '',
	  			'link_before' => '',
	  			'link_after' => '',
	  			'items_wrap' => '<ul class = "%2$s">%3$s</ul>',
	  			'depth' => 0,
	  			'walker' => ''
	  		);
  			
  			wp_nav_menu( $args );
			?>
		<?php endif; ?>

		<?php if (has_nav_menu( 'find-on' )): ?>
			<h4>FIND US ON</h4>
			<?php    /**
				* Displays Find Us On menu
				* @param array $args Arguments
				*/
				$args_find_us = array(
					'theme_location' => 'find-on',
					'menu' => '',
	  			'container' => 'div',
	  			'container_class' => '',
	  			'container_id' => '',
	  			'menu_class' => 'list-inline last-ul',
	  			'menu_id' => '',
	  			'echo' => true,
	  			'fallback_cb' => 'wp_page_menu',
	  			'before' => '',
	  			'after' => '',
	  			'link_before' => '',
	  			'link_after' => '',
	  			'items_wrap' => '<ul class = "%2$s">%3$s</ul>',
	  			'depth' => 0,
	  			'walker' => ''
				);
			
				wp_nav_menu( $args_find_us ); ?>
		<?php endif;  ?>

		<?php if (has_nav_menu( 'find-on' )): ?>
			<?php    /**
				* Displays a navigation menu
				* @param array $args Arguments
				*/
				$args_footer = array(
					'theme_location' => 'footer',
					'menu' => '',
	  			'container' => 'div',
	  			'container_class' => '',
	  			'container_id' => '',
	  			'menu_class' => 'list-inline gray',
	  			'menu_id' => '',
	  			'echo' => true,
	  			'fallback_cb' => 'wp_page_menu',
	  			'before' => '',
	  			'after' => '',
	  			'link_before' => '',
	  			'link_after' => '',
	  			'items_wrap' => '<ul class = "%2$s">%3$s</ul>',
	  			'depth' => 0,
	  			'walker' => ''
				);
			
				wp_nav_menu( $args_footer ); ?>
		<?php endif;  ?>


    <?php //dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
