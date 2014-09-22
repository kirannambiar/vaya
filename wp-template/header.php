<html>
	<head>
		<title>Vaya</title>
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' /> 

		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
		<link href="//fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<script>
			$(document).ready(function(){
				var $root = $('html, body');
				$('a[href*=#]').on('click',function (e) {
				      // prevent normal scrolling action
					  e.preventDefault();
					  // grab the target url from the anchor's href
					  var target = $(this.hash);
					  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					  if (target.length) {
					     $root.stop().animate({
					         scrollTop: target.offset().top - 90
					    }, 1000);
					    window.location.hash = this.hash;
						return false;
					}
				});
			
				$("div.align-left-img").each(function(){
				    // Uncomment the following if you need to make this dynamic
				    var refH = $(this).height();
				    var refW = $(this).width();
				    var refRatio = refW/refH;
				
				    var imgH = $(this).children("img").height();
				    var imgW = $(this).children("img").width();
				
				    if ( (imgW/imgH) < refRatio ) { 
				        $(this).addClass("portrait");
				    } else {
				        $(this).addClass("landscape");
				    }
				});
				$("div.align-right-img").each(function(){
				    // Uncomment the following if you need to make this dynamic
				    var refH = $(this).height();
				    var refW = $(this).width();
				    var refRatio = refW/refH;
				
				    var imgH = $(this).children("img").height();
				    var imgW = $(this).children("img").width();
				
				    if ( (imgW/imgH) < refRatio ) { 
				        $(this).addClass("portrait");
				    } else {
				        $(this).addClass("landscape");
				    }
				});
			});
		</script>

		<?php
			wp_head(); 
		?>
	</head>
	<body>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		<div class="header-container clearfix">
			<?php echo do_shortcode("[metaslider id=32 percentwidth=100]"); ?>
		</div>
