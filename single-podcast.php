<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package northstar
 */

get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<section class="full-sec-banner" id="solo-podcast"  style="background: linear-gradient(rgba(20,20,20,.4),rgba(20,20,20,.4)) 0 0/cover,url('<?php the_field('main_banner_image') ?>') center/cover no-repeat;">
<?php endif; ?>
	<div class="container-fluid">
		<div class="row text-center">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>

<section id="single-podcast-wrap" class="line">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="file-wrap">
					<?php the_field('podcast_url') ?>
					<p>Listen on <a href="<?php the_field('itunes_link') ?>">iTunes</a> or <a href="<?php the_field('overcast_link') ?>">Overcast</a></p>
				</div>
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-podcast-solo', get_post_format() );

					endwhile; // End of the loop.
					?>
			</div>
		</div>
	</div>
</section>

		

<?php
get_footer();
