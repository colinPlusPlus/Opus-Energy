<div class="card-wrapper-sm">
	<img src="<?php echo wp_get_attachment_url($instance['image']) ?>" class="img-sidebar-widget"/>
	<div class="card-footer-sm">
		<button class="btn <?php echo $instance['button'] ?>" 
						role="button" 
						href="<?php echo $instance['url'] ?>">
						<?php echo $instance['button_text']?>
		</button>
	</div>
</div>
