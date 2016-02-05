<?php	$url = explode(':', $instance['url']); ?>
<i class="text-center <?php echo $instance['icon_selection'] ?>"></i>
<?php if ( $instance['icon_text'] ): ?>
	<p class="text-center"><?php echo $instance['icon_text'] ?></p>
<?php endif; ?>
<?php if ( $instance['button'] ): ?>
	<a class="btn <?php echo $instance['button'] ?>" 
     href="<?php echo esc_url ( get_permalink ( $url[1] ) ) ?>" 
     role="button">
     <?php echo $instance['button_text'] ?>
  </a>
<?php endif; ?>