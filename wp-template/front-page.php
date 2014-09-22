<?php 
	get_header();
	$philosophy_page = get_page_by_path('philosophy');
	$products_page = get_page_by_path('products');
	$events_page = get_page_by_path('events');
	$stores_page = get_page_by_path('stores');
	$press_page = get_page_by_path('press-links');
?>

<div id="main">
	<div id="content clearfix">
		
		<div class="intro main-section clearfix">
			<h1 class="page-title philosophy"><a name="philosophy" class="page-title"><?php echo $philosophy_page->post_title; ?></a></h1>
			<?php echo $philosophy_page->post_content; ?>
		</div>

		<div class="products-content main-section clearfix">
			<h1 class="page-title"><a name="products" class="page-title"><?php echo $products_page->post_title; ?></a></h1>
			<div class="main-sub-section"><?php echo $products_page->post_content; ?></div>
			<?php echo do_shortcode("[metaslider id=1985 percentwidth=100]"); ?>
		</div>

		<div class="events-content main-section clearfix">
			<h1 class="page-title left-heading clearfix"><a name="events" class="page-title"><?php echo $events_page->post_title; ?></a></h1>
			<div class="main-sub-section clearfix"><?php echo do_shortcode('[events_list scope="future" limit=5 pagination=1]'); ?></div>
		</div>

		<div class="store-loc-content main-section clearfix">
			<h1 class="page-title left-heading"><a name="stores" class="page-title"><?php echo $stores_page->post_title; ?></a></h1>
			<?php echo $stores_page->post_content; ?>
		</div>

		<div class="newsletter main-section clearfix">
			<?php echo do_shortcode("[sp-signup email_label='SUBSCRIBE TO THE VAYA NEWSLETTER' listids='109' redirect_page='' lists_checked='1' label_display='false' thank_you='Thank you for subscribing!' button_text='Submit' ]"); ?>
		</div>
		
		<div class="press-content main-section clearfix">
			<h1 class="page-title left-heading"><a name="press" class="page-title"><?php echo $press_page->post_title; ?></a></h1>
			<?php echo $press_page->post_content; ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>


