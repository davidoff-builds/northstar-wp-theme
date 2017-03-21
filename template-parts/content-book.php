<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package northstar
 */

?>



<div class="article-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<div class="col-md-6 post-img" style="background: url('<?php echo $image[0]; ?>');">
	<?php endif; ?>
	</div>

		<div class="col-md-6 post-excerpt line">
			<div class="title-wrap"><h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3></div>
			<p><?php echo limit_words(get_the_excerpt(), '100'); ?><br><div class='btn-wrap'><a class='btn-ns-blue' href="<?php the_permalink();?>">Read more</a></div></p>
		</div>
	</div>
