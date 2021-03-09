<!doctype html>
<?php $site_url = site_url(); ?>
<?php $template_directory = get_template_directory_uri();?>


<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager by Mightily -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TFPB8KQ');</script>
	<!-- End Google Tag Manager by Mightily -->

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php } ?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo $template_directory; ?>/dist/assets/img/favicon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="New Directions"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?php echo $template_directory; ?>/dist/assets/img/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?php echo $template_directory; ?>/dist/assets/img/favicon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo $template_directory; ?>/dist/assets/img/favicon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?php echo $template_directory; ?>/dist/assets/img/favicon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo $template_directory; ?>/dist/assets/img/favicon/mstile-310x310.png" />

</head>

<body <?php body_class('front-end'); ?>>

	<!-- Google Tag Manager by Mightily (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFPB8KQ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager  by Mightily(noscript) -->
	
	<?php do_action('wp_body_open'); ?>	

	<?php if ( is_front_page() && !isset($_COOKIE['mightilyPreloader']) ): ?>
		<div class="preloader">
			<div id="preloader-lottie"></div>
		</div>
	<?php endif; ?>
	
	<nav class="skip-nav">
		<ul class="skip-menu">
			<a href="#main-menu" class="menu-item">Skip to main menu</a>
			<a href="#main" class="menu-item">Skip to main content</a>
		</ul>
	</nav>

	<header class="header">
		<div class="wrapper">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img class="svg" src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/logo.svg" alt="New Directions Home Page">
			</a>
			<div class="tagline">
				<p><?php echo get_bloginfo('description'); ?></p>
			</div>
			<button id="nav-toggle" class="nav-toggle">
                <span class="toggle-text">Menu</span>
                <span class="toggle-wrapper">
                    <span class="toggle-bar toggle-bar-1"></span>
                    <span class="toggle-bar toggle-bar-2"></span>
                </span>
            </button>
			<nav id="main-menu" class="header-nav">
				<ul class="main-menu left">
					<?php
						$args = array(
							'theme_location' => 'main-menu-left',
							'menu' => 'main-menu-left',
							'container' => 'false',
							'items_wrap' => '%3$s'
						);
					?>
					<?php wp_nav_menu($args); ?>
				</ul>
				<ul class="main-menu right">
					<?php
						$args = array(
							'theme_location' => 'main-menu-right',
							'menu' => 'main-menu-right',
							'container' => 'false',
							'items_wrap' => '%3$s'
						);
					?>
					<?php wp_nav_menu($args); ?>
				</ul>
			</nav>
		</div>
	</header>

	<main id="main">
