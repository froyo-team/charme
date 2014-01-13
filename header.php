<!Doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
	<head>
		<meta http-equiv=Content-Type content="text/html;<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url);?>" media="screen">
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page">
			<header class="site-header" role="banner">
				<hgroup>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description">
						<?php bloginfo( 'description' ); ?>
					</h2>
				</hgroup>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h3 class="menu-toggle">
						菜单
					</h3>
					<?php wp_nav_menu( 
							array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>	
			</header>
			<div id="main" class="wrapper">