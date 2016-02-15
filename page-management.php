<?php 
	
	global $wp_query;
	$opus_row_index; // current row index
	
	$args = array(
    'post_type'	  	 	=> 'People',
    'posts_per_page' 	=> '-1',
    'order'           => 'ASC'
  );

$wp_query = new WP_Query( $args ); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'management'); ?>
<?php endwhile; ?>

<?php wp_reset_query(); ?>