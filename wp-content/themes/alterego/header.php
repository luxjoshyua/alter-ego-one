<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterego
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<!-- firstly we check to see if there are any notices  -->
		<?php if ( wc_notice_count() ) : ?>

		<!-- here we print out our notifications/flash messages -->
			<?php wc_print_notices(); ?>

		<?php endif; ?>

	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alterego' ); ?></a>
		<!-- here we use conditional tags to check whether we are on either
		the homepage or a product category page. If we are, then we are going 
		to show the category/home header -->
		<?php if(is_home() or is_product_category()) : ?>

		<!-- here we grab the custom field from our category and display the colour an inline style -->
		<!-- enable flexbox on the header -->
		<header id="masthead" class="site-header flex-ns relative" style="<?php category_header_background(); ?>">
		
		<!-- here we include our category navigation component -->
		<?php get_template_part('template-parts/category-navigation'); ?>

		<!-- here we include our featured image component -->
		<?php get_template_part('template-parts/featured-image'); ?>
		
	
		</header><!-- #masthead -->

		<!--here if we are NOT on a product page, we are going to render out
		our regular page header  -->
	<?php elseif (!is_product()) : ?>

			<?php get_template_part('template-parts/page-header'); ?>

	<?php endif; ?>




	<div id="content" class="site-content">
			
