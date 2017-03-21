<?php
/**
 * The template for displaying the vision page
 * Template Name: Vision
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package northstar
 */

get_header(); ?>

 <?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<section id="vision-banner" class="full-sec-banner" style="background-image: url('<?php echo $image[0]; ?>');">
		<?php endif; ?>
		<div class="container-fluid">
			<div class="row text-center">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<section id="vision-wrap">
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="vision-content content-wrap">
					<?php
							while ( have_posts() ) : the_post();
								the_content();
							endwhile; // End of the loop.
							?>
					</div>

				</div>
		</div>

		</div>
	</section>

<?php
get_footer();
