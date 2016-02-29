<?php	$url = explode(':', $instance['url']); ?>
<a class="btn <?php echo $instance['button'] ?>" 
	 href="<?php echo esc_url ( strstr ($url[1], '/' ) ? $url[1] : get_permalink ( $url[1] ) ) ?>" 
	 role="button">
	 <?php echo $instance['button_text'] ?>
</a>