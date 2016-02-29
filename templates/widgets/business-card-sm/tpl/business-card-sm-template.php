<?php	$url= explode(':', $instance['button_section']['url']); ?>
<div class="card-wrapper-sm">
	<div class="card-header-sm blue">
		<div class="center-items">
	  	<h2 class="text-center"><?php echo wp_kses_post($instance['header_section']['widget_title']) ?></h2>
		</div>
	</div>
	<div class="card-body-sm">
		<p>  <?php echo $instance['body_section']['body_text'] ?> </p>
	</div>
	<div class="card-footer-sm">
		<a href="<?php echo esc_url( strstr ($url[1], '/') ? $url[1] : get_permalink( $url[1] ) ) ?>" 
		   class="btn <?php echo $instance['button_section']['button_selection_footer'] ?>" 
			 role="button" >
			 <?php echo $instance['button_section']['button_text_footer']?>
		</a>
	</div>
</div>