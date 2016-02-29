<?php	$url = explode(':', $instance['url']); ?>
<div class="card-wrapper-sm">
	<img src="<?php echo wp_get_attachment_url($instance['image']) ?>" class="img-sidebar-widget"/>
	<div class="card-footer-sm">
		<a class="btn <?php echo $instance['button'] ?>" 
						role="button" 
						href="<?php echo esc_url ( strstr ($url[1], '/' ) ? $url[1] : get_permalink ( $url[1] ) ) ?>">
						<?php echo $instance['button_text']?>
		</a>
	</div>
</div>
