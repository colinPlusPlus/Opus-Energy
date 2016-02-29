<?php	
	$body_url = explode(':', $instance['button_section']['body_url']); 
	$footer_url = explode(':', $instance['button_section']['footer_url']);
?>
<div class="card-wrapper">
	<div class="card-header blue">
		<div class="center-items">
			<i class="text-center <?php echo wp_kses_post($instance['header_section']['icon_selection']) ?>"></i>
	  	<h2 class="text-center"><?php echo wp_kses_post($instance['header_section']['widget_title']) ?></h2>
		</div>
	</div>
	<div class="card-body">
		<?php $repeater_items = $instance['body_section']['a_repeater']; ?>
		<?php foreach ($repeater_items as $index => $repeater_item): ?>
			<p>  <?php echo $repeater_item[body_text] ?> </p>
		<?php endforeach; ?>
		<a href="<?php echo esc_url ( strstr ($body_url[1], '/') ? $body_url[1] : get_permalink ( $body_url[1] ) ) ?>"
			 class="btn <?php echo $instance['button_section']['button_selection_body'] ?>" 
			 role="button">
		   <?php echo $instance['button_section']['button_text_body']?>
		</a>
	</div>
	<div class="card-footer">
		<a href="<?php echo esc_url ( strstr ($footer_url[1], '/') ? $footer_url[1] : get_permalink ( $footer_url[1] ) ) ?>"
			 class="btn <?php echo $instance['button_section']['button_selection_footer'] ?>" 
			 role="button" >
			 <?php echo $instance['button_section']['button_text_footer']?>
		</a>
	</div>
</div>