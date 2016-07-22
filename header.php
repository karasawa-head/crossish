<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php include_once( "analytics.php" ); ?>
	<div class="site-container">
		<header role="banner" class="header">

			<div class="site-description">
				<p class="site-description__text"><?php bloginfo( 'description' ); ?></p>
			</div>

			<div class="header__inner">
				<h1 class="header__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</h1>
			</div>

			<?php if ( has_nav_menu( 'main-nav' ) ) : ?>
			<nav role="navigation" class="main-nav">
			<?php
				wp_nav_menu( array(
					'menu_class' => 'main-nav-list',
					'theme_location' => 'main-nav',
					'container' => false,
				) );
			?>
			</nav>
			<?php endif; ?>

		</header>
