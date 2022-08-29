<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Omega
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<header>
		<div class="container">

			<div class="row">

				<div class="logo">
					<a href="/"><img alt="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png"></a>
				</div>

				<nav>
					<div class="nav_burger"></div>

					<?php wp_nav_menu(array(
						'theme_location'  => 'top',
						'container'       => null,
						'menu_class'      => 'nav',

					)); ?>
				</nav>
			</div>
		</div>
	</header>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>