<?php while (have_posts()) : the_post(); ?>
  <?php if ( is_page() && $post->post_parent > 0 ): ?>
    <?php get_template_part('templates/page', 'header'); ?>
  <?php endif; ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
