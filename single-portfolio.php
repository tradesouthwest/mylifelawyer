<?php
/**
 * template for portfolio pages
*/

get_header();
artech_breadcrumbs_style();
?>
<section class="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
			<?php 		
				the_post(); the_content(); 
				
				if( $post->comment_status == 'open' ) { 
					 comments_template( '', true ); // show comments 
				}
			?>
			</div>
			<div class="col-lg-6">
				<?php if ( has_post_thumbnail() ) { ?>
										<figure class="post-image ">	
											<?php the_post_thumbnail('large'); ?>
			
											</figure>
				<?php } ?>
		    </div>
		</div>
	</div>
</section> 
<?php get_footer(); ?>

