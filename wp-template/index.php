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
			$stores_page = get_page_by_path('stores');
		?>
		<div class="main-content main-section">
			<h1 class="page-title philosophy"><a name="philosophy" class="page-title"><?php echo $philosophy_page->post_title; ?></a></h1>
			<div class="page-content"><?php echo $philosophy_page->post_content; ?></div>
		</div>
		<!--<div class="brands-content main-section">
			<h1 class="page-title left-heading"><a name="brands" class="page-title"><?php echo $brands_page->post_title; ?></a></h1>
			<div class="page-content"><?php echo $brands_page->post_content; ?></div>
		</div>-->
		
		<div class="products-content main-section">
			<h1 class="page-title right-heading"><a name="products" class="page-title"><?php echo $products_page->post_title; ?></a></h1>
			<div class="page-content"><?php echo $products_page->post_content; ?></div>
		</div>	
		<!--
		<div class="events-content main-section">
			<h1 class="page-title left-heading"><a name="events" class="page-title"><?php echo $events_page->post_title; ?></a></h1>
			<div class="page-content"><?php echo $events_page->post_content; ?></div>
		</div>
		-->
		<div class="store-loc-content main-section">
			<h1 class="page-title left-heading"><a name="stores" class="page-title"><?php echo $stores_page->post_title; ?></a></h1>
			<div class="page-content"><?php echo $stores_page->post_content; ?></div>
		</div>
		
		<div class="main-section">
			<?php echo do_shortcode("[sp-signup email_label='SUBSCRIBE TO THE VAYA NEWSLETTER' listids='109' redirect_page='' lists_checked='1' label_display='false' thank_you='Thank you for subscribing!' button_text='Submit' ]"); ?>
		</div>

		
	</div>
</div>
<?php get_footer(); ?>



