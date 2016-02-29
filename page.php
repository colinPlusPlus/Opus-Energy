<?php while (have_posts()) : the_post(); ?>
  <?php if ( is_page() && $post->post_parent > 0 ): ?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
		</div>
  <?php endif; ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
