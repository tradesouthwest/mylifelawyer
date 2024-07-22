<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>

<?php 
	$front_pallate_enable = get_theme_mod('front_pallate_enable');
	if($front_pallate_enable == '1') {
		
?>	
<body <?php body_class(); ?>  onload="noStyleChange()">
<?php }else{ ?>
<body <?php body_class(); ?>>
<?php } ?>
<?php wp_body_open(); ?>

	<div id="page">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'artech' ); ?></a>
		
	<div class="mylaw-header">
	<?php get_template_part('template-parts/sections/section','header'); ?>
	</div>
	<?php get_template_part('template-parts/sections/section','navigation'); ?>
		
	<div id="content" class="artech-content">
	