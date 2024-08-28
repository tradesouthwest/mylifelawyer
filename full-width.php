<?php
/**
 * Template Name: Full Width Limited
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package artech pro
 */

get_header();
$artech_default_pg_layout 		= get_theme_mod('artech_default_pg_layout', 'artech_rsb'); 

$col_class = ($artech_default_pg_layout == 'artech_fullwidth')?'col-lg-10 mx-auto':'col-lg-8';

artech_breadcrumbs_style();

?>
<section class="blog-section blog-page full-width-limited">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12">
			
				<?php 		
					if( have_posts()) :  the_post();
					
					the_content(); 
					//endif;
					
					if( $post->comment_status == 'open' ) { 
						 comments_template( '', true ); // show comments 
					}
				?>
				<?php		
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'artech' ),
					'after'  => '</div>',
				) );
				
				the_posts_pagination( array(
				'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
				'next_text'          => '<i class="fa fa-angle-double-right"></i>',
				) ); ?>
				<?php
				else: '';
				endif; ?>
				
			</div>

		</div>		
	</div>
</section>
<?php get_footer(); ?>