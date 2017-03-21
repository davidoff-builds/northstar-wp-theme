<?php
/**
 * The template for displaying the vision page
 * Template Name: Podcast
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


<section id="podcast-banner" class="full-sec-banner" style="background: linear-gradient(rgba(20,20,20,.3),rgba(20,20,20,.3)) 0 0/cover,url('<?php the_field('section_banner_image'); ?>') center/cover no-repeat;">
		<div class="container-fluid">
			<div class="row text-center">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<section id="podcast-wrap">
		<div class="container">
			<div class="podcast-content">
				<?php the_content(); ?>
				<?php
				    $args=array(
				    'post_type' => 'podcast',
				    'post_status' => 'publish',
				    'posts_per_page' => 12,
				    'caller_get_posts'=> 1
				    );
				    $my_query = null;
				    $my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				    echo '';
				$i = 0;
				while ($my_query->have_posts()) : $my_query->the_post(); ?> 
				    <div class="article-row row">
				   
					   <?php get_template_part( 'template-parts/content', 'podcast' );
					   ?>
				   </div>

				<?php 
				endwhile;
				}
				wp_reset_query();
				the_posts_pagination()
				?>
			</div>
		</div>
	</section>


<?php
get_footer();
