<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Artech
 */

get_header();
$pg_404_ttl			= get_theme_mod('pg_404_ttl','4 0 4');
$pg_404_subtitle	= get_theme_mod('pg_404_subtitle','Page Not Found');
$pg_404_btn_lbl		= get_theme_mod('pg_404_btn_lbl','Back To Home');
$pg_404_btn_url		= get_theme_mod('pg_404_btn_url');
artech_breadcrumbs_style();
?>
<!-- 404 section -->
    <section class="error_404">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error_404_content">
						 
							<h1>
								OOOPS, PAGE NOT FOUND
							</h1>    
			 
						<br>
						<?php if ( ! empty($pg_404_subtitle) ) : ?>		
							<p>
								<?php echo wp_kses_post($pg_404_subtitle); ?>
							</p>   
						<?php endif; ?>
						<br>
						<?php if ( ! empty($pg_404_btn_lbl1) ) : ?>	
							<a href="<?php echo esc_url($pg_404_btn_url); ?>" class="btn_main"><span><?php echo esc_html($pg_404_btn_lbl); ?></span></a>
						<?php endif; ?>
						<br>
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>Search on this site 
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit"
		value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 section -->
<?php get_footer(); ?>
