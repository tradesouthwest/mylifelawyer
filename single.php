<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Artech Pro
 */

get_header();
$artech_blog_single_layout 			= get_theme_mod('blog_single_layout', 'artech_rsb');
$pg_blog_ttl 		= get_theme_mod('pg_blog_ttl','Mind Blowing Blog');
$pg_blog_subttl 	= get_theme_mod('pg_blog_subttl','Our Blog');
$enable_author_box 	= get_theme_mod('enable_author_box','1');
$col_class = ($artech_blog_single_layout == 'artech_fullwidth')?'col-lg-10':'col-lg-8';
artech_breadcrumbs_style();
?>
	<!-- blog section -->
    <section class="blog-section">
        <div class="container">
			<?php if(!empty($pg_blog_ttl)  || !empty($pg_blog_subttl) || !empty($pg_blog_desc)): ?>
				<div class="section-title col-lg-6 mx-auto">
					<?php if(!empty($pg_blog_subttl)): ?>
						<span>
							<?php echo esc_html($pg_blog_subttl); ?>
						</span>
					<?php endif; ?>
					
					<?php if(!empty($pg_blog_ttl)): ?>
						<h2>
							<?php echo wp_kses_post($pg_blog_ttl); ?>
						</h2>
					<?php endif; ?>
					
				</div>
			<?php endif; ?>
		
            <div class="row">
                <?php //if($artech_blog_single_layout == 'artech_lsb'): get_sidebar(); endif; ?>
				<!--<div class="<?php echo esc_attr($col_class); ?>">-->

				            <div class="col-lg-9 centered-col" >
									<?php if ( has_post_thumbnail() ) { ?>
										<figure class="post-image ">	
											<?php the_post_thumbnail('medium'); ?>
											<!--<div class="meta top">
												<span class="date">
													
												</span>
											</div>-->
										</figure>
									<?php } ?>
							<!--</div>
                        <div class="col-lg-8">-->
							<?php 
								if( have_posts() ): 
								while( have_posts() ): the_post(); 
							?>
								<article class="post-item">
									
								
									<div class="post-content">
										<div class="single-post-header">
										<?php the_title('<h1 class="post-title">', '</h1>' ); ?>
											<div class="meta">
												<span class="admin-maybe"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>" title="<?php echo esc_url(get_avatar_url(get_the_author_meta( 'name' ))) ?>"><?php esc_html(the_author()); ?></a></span> <span class="mdot"> • </span> 
												<span class="date-heading"><a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><span><?php echo esc_html(get_the_date()); ?></span></a></span> <span class="mdot"> • </span>
												<span class="Category"><a href="#"><?php the_category(',',''); ?></a></span>
											</div>
										</div>
										
										<?php the_content(); ?>
										
										
									</div>
									
									
										
								</article>
						</div>
							
							<?php 
								endwhile; 
							else: '';
								endif; 
							?>
							
                </div>
               
				<?php //if($artech_blog_single_layout == 'artech_rsb'): get_sidebar(); endif; ?>
			
			
			
            </div><!-- /row -->

    </section>
    <!-- end -->
<?php get_footer(); ?>
