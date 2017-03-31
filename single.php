<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package northstar
 */

get_header(); ?>

<section id="single-post-banner" class="full-sec-banner">
		<img src="<?php the_field('section_banner_image'); ?>" alt="" class="img-full-width img-responsive">
</section>

	<section id="solo-post">
		<div class="container-fluid">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );


			endwhile; // End of the loop.
			?>
		</div>
	</section>
		

<?php
get_footer();
