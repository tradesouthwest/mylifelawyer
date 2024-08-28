<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Artech
 */
$categories = get_the_category();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
		<?php if ( has_post_thumbnail() ) { ?>
			<figure class="post-image ">	
				<?php the_post_thumbnail('medium'); ?>
				<div class="meta top">
					<span class="date">
						<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><?php echo esc_html(get_the_date('j')); ?><span><?php echo esc_html(get_the_date('M')); ?></span></a>
					</span>
				</div>
			</figure>
		<?php } ?>
	
		<div class="post-content">
			<div class="meta">
				<span class="admin"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>" title="<?php echo esc_url(get_avatar_url(get_the_author_meta( 'name' ))) ?>"><i class="fa fa-user"></i> <?php esc_html(the_author()); ?></a></span>
				<span class="Category"><a href="#"><i class="fa fa-folder-open"></i> <?php the_category(' ',''); ?></a></span>
				<!--<?php if(has_tag()){ ?>
					<span class="tags"><a href="#"><i class="fa fa fa-tags"></i> <?php the_tags(',',''); ?></a></span>
				<?php } ?>-->
			</div>
			<?php     
				if ( is_single() ) :
				
				the_title('<h2 class="post-title">', '</h2>' );
				
				else:
				
				the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				
				endif; 
			?> 
			<?php 
			if ( !is_single() ) {
				the_excerpt();
			}else{	
				the_content();
			}
			?>
			<?php if (  is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() ) :  ?>
			<span class="date-after-excerpt">
				<?php echo esc_html(get_the_date()); ?>
			</span><?php endif; ?>
		</div>
	</article>