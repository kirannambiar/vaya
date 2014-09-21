<?php 
	get_header();
?>

<div id="main">
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts to display'); ?></p>
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>