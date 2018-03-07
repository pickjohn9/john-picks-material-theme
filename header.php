<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Runs enqueded styles + scripts -->
		<?php wp_head(); ?>

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body 
	<?php ?>

	<?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">

					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav light-blue lighten-1" role="navigation">
						<div class="nav-wrapper container">

							<a href="<?php echo home_url(); ?>" id="logo-container" class="brand-logo">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>

							<?php primary_nav(); ?>
							<?php mobile_nav(); ?>
							 <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
						</div>
					</nav>

					<!-- /nav -->

			</header>
			<!-- /header -->

