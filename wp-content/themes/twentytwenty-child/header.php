<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<div id='logo'><a href='/SCE2021/projet/public_html'><img src='wp-content/themes/twentytwenty-child/img/logo.png' style='border-radius: 15px;'></a> </div>

					<div class="header-titles">

						<h1 class="site-title">
							<a href="/SCE2021/projet/public_html">Cognitive Animation</a>
						</h1>


					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<!-- <span class="toggle-inner"> -->
							<img src='wp-content/themes/twentytwenty-child/img/burger_menu.png'>
							<!-- <div class='menu-btn-burger'></div>
							<span class="toggle-icon">
								<?php //twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span> -->
						<!-- </span> -->
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">
					<div class='menu-head'><a href='#ethical'>Informations</a></div>
					<div class='menu-head'><a href='#domain'>Fields</a></div>
					<div class='menu-head'><a href='#experience'>Experiments</a></div>
					<div class='menu-head account'><a href='#'>Researchers Account</a></div>
				</div>

			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
