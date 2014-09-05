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
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-38960598-1', 'auto');
		  ga('send', 'pageview');
		
		</script>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="_container _container-1 clearfix">
			<?php echo do_shortcode("[metaslider id=32]"); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	    	<div class="logodiv"></div>
		</div>
