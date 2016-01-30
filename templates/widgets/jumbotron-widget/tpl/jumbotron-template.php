<div class="container">
  <?php if ( $instance['header'] ): ?>
    <h1 class="center"><?php echo wp_kses_post($instance['header']) ?></h1>
  <?php endif; ?>
  <?php if ( $instance['Text Area'] ): ?>
	  <p><?php echo wp_kses_post($instance['Text Area']) ?></p>
  <?php endif; ?>
  <!-- <p class="center"> --><button class="btn btn-primary" href="#" role="button">Learn more</button><!-- </p> -->
</div>
