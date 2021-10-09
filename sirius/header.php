<?php
	/**
	* The header for our theme
	*
	* This is the template that displays all of the <head> section and everything up until <div id="content">
		*
		* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		*
		* @package SiRiUS
		*/

	?>
	<!doctype html>
		<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="https://gmpg.org/xfn/11">
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

			<?php wp_head(); ?>
				
		</head>

		<body <?php body_class(); ?>>
			<?php wp_body_open(); ?>

				<header id="masthead" class="site-header">

					<div class="head-swap">
						<div class="max">
							<div class="head-cont">
								<div class="site-branding">
									<?php
										the_custom_logo();
										if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
										else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
										endif;
										$sirius_description = get_bloginfo( 'description', 'display' );
										if ( $sirius_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $sirius_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
									<?php endif; ?>
								</div><!-- .site-branding -->

								
								<div class="dest_menu">
									<?php wp_nav_menu(); ?>
								</div>
								
								<div class="head-block">
									<?php
										if ( function_exists('dynamic_sidebar') )
										dynamic_sidebar('sidebar-header');
									?>
								</div>
						
								<div style="display: none;" class="burger">
									<div class="bar1"></div>
									<div class="bar2"></div>
									<div class="bar3"></div>
								</div>		
							</div>
						</div>
					</div>
				</header><!-- #masthead -->
