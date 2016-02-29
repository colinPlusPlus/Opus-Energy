<?php	$url = explode(':', $instance['url']); ?>
<div class="img-wrap">
	<?php if ($instance['background_image']): ?>
    <img src="<?php echo wp_get_attachment_url($instance['background_image']); ?>" class="img-responsive" />
  <?php endif; ?>
  <div class="img-card-sm-wrap">
  	<?php if ( $instance['header'] ): ?>
    	<h3 class="text-uppercase text-center"><?php echo wp_kses_post($instance['header']) ?></h3>
 		<?php endif; ?>
  	<?php if ( $instance['text_area'] ): ?>
	  	<p class="text-left"><?php echo wp_kses_post($instance['text_area']) ?></p>
  	<?php endif; ?>
    <?php if ( $instance['button_text'] ): ?>
      <a class="btn <?php echo $instance['button'] ?>" 
         href="<?php echo esc_url ( strstr ($url[1], '/' ) ? $url[1] : get_permalink ( $url[1] ) ) ?>" 
         role="button">
         <?php echo $instance['button_text'] ?>
      </a>
    <?php endif; ?>
  </div>
</div>