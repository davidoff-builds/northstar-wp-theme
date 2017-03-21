<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package northstar
 */

get_header(); ?>


<section class="full-sec-banner" id="solo-book"  style="background: linear-gradient(rgba(20,20,20,.4),rgba(20,20,20,.4)) 0 0/cover,url('<?php bloginfo('template_url') ?>/assets/library.jpg') center/cover no-repeat;">
	<div class="container-fluid">
		<div class="row text-center">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>

<section id="single-book-wrap" class="line">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-podcast', get_post_format() );

					endwhile; // End of the loop.
					?>
			</div>
		</div>
	</div>
</section>

		

<?php
get_footer();
