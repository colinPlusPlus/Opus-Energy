<?php	$url = explode(':', $instance['url']); ?>
<div class="img-wrap">
	<img src="<?php echo wp_get_attachment_url($instance['background_image']); ?>" class="img-responsive" />
  <div class="img-card-lg-wrap">
  	<?php if ( $instance['header'] ): ?>
    	<h2 class="text-uppercase"><?php echo wp_kses_post($instance['header']) ?></h2>
 		<?php endif; ?>
  	<?php if ( $instance['text_area'] ): ?>
	  	<p><?php echo wp_kses_post($instance['text_area']) ?></p>
  	<?php endif; ?>
  </div>
  <div class="img-content-footer">
  	<a class="btn <?php echo $instance['button'] ?>" 
  		 href="<?php echo esc_url ( get_permalink ( $url[1] ) ) ?>" 
  		 role="button">
  		 <?php echo $instance['button_text'] ?>
		</a>
  </div>
</div>