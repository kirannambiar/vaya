<?php get_header(); ?>
<div id="main">
	<div id="content">
		<!--<?php while (have_posts()): the_post(); ?>
			<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php endwhile; ?>-->
		<?php
			$philosophy_page = get_page_by_path('philosophy');
			$brands_page = get_page_by_path('brands');
			$products_page = get_page_by_path('products');
			$events_page = get_page_by_path('events');
		?>
		<div class="main-content main-section">
			<h1 class="page-title"><a name="philosophy" class="page-title"><?php echo $philosophy_page->post_title; ?></a></h1>
			<p><?php echo $philosophy_page->post_content; ?></p>
		</div>
		<div class="brands-content main-section left-heading">
			<h1 class="page-title"><a name="brands" class="page-title"><?php echo $brands_page->post_title; ?></a></h1>
			<p><?php echo $brands_page->post_content; ?></p>
		</div>
		
		<div class="products-content main-section right-heading">
			<h1 class="page-title"><a name="products" class="page-title"><?php echo $products_page->post_title; ?></a></h1>
			<p><?php echo $products_page->post_content; ?></p>
		</div>	
		
		<div class="events-content main-section left-heading">
			<h1 class="page-title"><a name="events" class="page-title"><?php echo $events_page->post_title; ?></a></h1>
			<p><?php echo $events_page->post_content; ?></p>
		</div>
		
	</div>
	<div id="delimiter"></div>
</div>
<?php get_footer(); ?>



