<?php	$url = explode(':', $instance['url']); ?>
<div class="img-wrap">
	<img src="<?php echo wp_get_attachment_url($instance['background_image']); ?>" class="img-responsive jumbo-image" />
  <div class="img-content-wrap">
  	<?php if ( $instance['header'] ): ?>
    	<h1 class="center"><?php echo wp_kses_post($instance['header']) ?></h1>
 		<?php endif; ?>
  	<?php if ( $instance['Text Area'] ): ?>
	  	<p><?php echo wp_kses_post($instance['Text Area']) ?></p>
  	<?php endif; ?>
  	<?php if ( $instance['button_text'] ): ?>
	  	<a class="btn <?php echo $instance['button'] ?>" 
	  		 href="<?php echo esc_url ( get_permalink ( $url[1] ) ) ?>" 
	  		 role="button">
	  		 <?php echo $instance['button_text'] ?>
			</a>
		<?php endif; ?>
  </div>
</div>
