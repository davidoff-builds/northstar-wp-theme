<?php
/**
 * The template for displaying the book page
 * Template Name: Journey
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

	<section id="journey-banner" class="full-sec-banner" style="background: linear-gradient(rgba(20,20,20,.3),rgba(20,20,20,.3)) 0 0/cover,url('<?php the_field('section_banner_image'); ?>') center/cover no-repeat;">
		<div class="container-fluid">
			<div class="row text-center">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<section id="journey-wrap">
		<div class="container-fluid">
			<div class="journey-content">
			<?php
				// Example for any archive page using the Wordpress Loop
				if ( have_posts() ) {
				    while ( have_posts() ) { ?>
				        <?php the_post(); ?>
				        <?php global $post; ?>
				    <?php } // end while ?>
				    <?php wp_pagenavi(); ?>
				<?php } // end if ?>

				<?php 
				// Example for adding WP PageNavi to a new WP_Query call
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$args = array('post_type' => 'vlog', 'posts_per_page' => 7, 'orderby' => 'date', 'paged' => $paged);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    <div class="vlog-row row">
				   
					   <?php get_template_part( 'template-parts/content-vlog', get_post_format() ); ?>
				   </div>
				<?php endwhile; ?>

				<?php wp_pagenavi( array( 'query' => $loop ) ); ?>
			</div>
		</div>
	</section>



<?php
get_footer();
