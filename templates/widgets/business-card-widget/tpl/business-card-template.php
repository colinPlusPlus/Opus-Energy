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
		<button class="btn <?php echo $instance['button_section']['button_selection_body'] ?>" 
						role="button" 
						href="#">
						<?php echo $instance['button_section']['button_text_body']?>
		</button>
	</div>
	<div class="card-footer">
		<button class="btn <?php echo $instance['button_section']['button_selection_footer'] ?>" 
						role="button" 
						href="#">
						<?php echo $instance['button_section']['button_text_footer']?>
		</button>
	</div>
</div>

