<?php 
	get_header();
	$philosophy_page = get_page_by_path('philosophy');
	$products_page = get_page_by_path('products');
	$events_page = get_page_by_path('events');
	$stores_page = get_page_by_path('stores');
	$press_page = get_page_by_path('press-links');
?>

<div id="main">
	<div id="content">
		
		<div class="main-content main-section">
			<h1 class="page-title philosophy"><a name="philosophy" class="page-title"><?php echo $philosophy_page->post_title; ?></a></h1>
			<?php echo $philosophy_page->post_content; ?>
		</div>

		<div class="products-content main-section">
			<h1 class="page-title right-heading"><a name="products" class="page-title"><?php echo $products_page->post_title; ?></a></h1>
			<?php echo $products_page->post_content; ?>
		</div>

		<div class="events-content main-section">
			<div><h1 class="page-title left-heading"><a name="events" class="page-title"><?php echo $events_page->post_title; ?></a></h1></div>
			<div class="main-sub-section"><?php echo do_shortcode('[events_list scope="future" limit=5 pagination=1]'); ?></div>
		</div>

		<div class="store-loc-content main-section">
			<h1 class="page-title left-heading"><a name="stores" class="page-title"><?php echo $stores_page->post_title; ?></a></h1>
			<?php echo $stores_page->post_content; ?>
		</div>

		<div class="newsletter main-section">
			<?php echo do_shortcode("[sp-signup email_label='SUBSCRIBE TO THE VAYA NEWSLETTER' listids='109' redirect_page='' lists_checked='1' label_display='false' thank_you='Thank you for subscribing!' button_text='Submit' ]"); ?>
		</div>
		
		<div class="press-content main-section">
			<h1 class="page-title left-heading"><a name="press" class="page-title"><?php echo $press_page->post_title; ?></a></h1>
			<?php echo $press_page->post_content; ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>


