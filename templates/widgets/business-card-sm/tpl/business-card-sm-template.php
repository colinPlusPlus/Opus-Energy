<div class="card-wrapper">
	<div class="card-header blue">
		<div class="center-items">
	  	<h2 class="text-center"><?php echo wp_kses_post($instance['header_section']['widget_title']) ?></h2>
		</div>
	</div>
	<div class="card-body">
		<p> <?php echo $instance['body_section'] ?></p>
	</div>
	<div class="card-footer">
		<button class="btn <?php echo $instance['button_section']['button_selection_footer'] ?>" 
						role="button" 
						href="#">
						<?php echo $instance['button_section']['button_text_footer']?>
		</button>
	</div>
</div>