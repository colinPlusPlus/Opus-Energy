<div class="container">
  <?php if ( $instance['header'] ): ?>
    <h1 class="center"><?php echo wp_kses_post($instance['header']) ?></h1>
  <?php endif; ?>
  <?php if ( $instance['Text Area'] ): ?>
    <div>
      <?php echo wp_kses_post($instance['Text Area']) ?>
    </div>
  <?php endif; ?>
  <p class="center"><a class="btn btn-primary" href="#" role="button">Learn more</a></p>
</div>
