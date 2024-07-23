<?php  
	$blog_title			= get_theme_mod('blog_title','Blog');
	$blog_subtitle		= get_theme_mod('blog_subtitle','Our Blog');
	$blog_display_num	= get_theme_mod('blog_display_num','3'); 
?>
	<!-- blog section -->
    <section class="blog-section">
        <div class="container">
            <?php if(!empty($blog_title)  || !empty($blog_subtitle)){ ?>
				<div class="section-title">
					<?php if(!empty($blog_subtitle)): ?>
						<span>
							<?php echo esc_html($blog_subtitle); ?>
						</span>
					<?php endif; ?>
					
					<?php if(!empty($blog_title)): ?>
						<h2>
							<?php echo wp_kses_post($blog_title); ?>
						</h2>
					<?php endif; ?>	
				</div>
			<?php } ?>
            <div class="row">
				<?php 
					$artech_blog_args = array( 'post_type' => 'post', 'posts_per_page' => $blog_display_numbr,'post__not_in'=>get_option("sticky_posts")) ;  	
					
					$artech_wp_query = new WP_Query($artech_blog_args);
					if($artech_wp_query)
					{
					while($artech_wp_query->have_posts()):$artech_wp_query->the_post();
					

				?>
					<div class="col-lg-4">
						<article class="post-item">
							
							<figure class="post-image">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
								<div class="meta top">
									<span class="date">
										<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><?php echo esc_html(get_the_date('j')); ?><span><?php echo esc_html(get_the_date('M')); ?></span></a>
									</span>
								</div>
							</figure>
							<div class="post-content">
								<div class="meta">
									<span class="admin"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"  title="<?php echo esc_url(get_avatar_url(get_the_author_meta( 'name' ))) ?>"><i class="fa fa-user"></i> <?php esc_html(the_author()); ?></a></span>
									<span class="Category"><a href="#"><i class="fa fa-folder-open"></i> <?php the_category(',',''); ?></a></span>
									<?php if(has_tag()){ ?>
										<span class="tags"><a href="#"><i class="fa fa fa-tags"></i> <?php the_tags(',',''); ?></a></span>
									<?php } ?>
								</div>
								<?php     
									if ( is_single() ) :
									
									the_title('<h2 class="post-title">', '</h2>' );
									
									else:
									
									the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
									
									endif; 
								
								if ( !is_single() ) {
									the_excerpt();
								}else{	
									the_content();
								}
								?>
							</div>
						</article>
					</div>
                <?php 
					endwhile; 
					}
					wp_reset_postdata();
				?>
            </div>
        </div>
    </section>
    <!-- end -->