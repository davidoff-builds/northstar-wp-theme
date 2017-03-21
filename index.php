<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package northstar
 */

get_header(); ?>

<section id="blog-banner" class="full-sec-banner" style="background: linear-gradient(rgba(20,20,20,.3),rgba(20,20,20,.3)) 0 0/cover,url('<?php bloginfo('template_url') ?>/assets/blog.jpg') center/cover no-repeat;">
		<div class="container-fluid">
			<div class="row text-center">
				<h1>Blog</h1>
			</div>
		</div>
	</section>

<section id="blog-feed">
	<div class="container">
		<div class="row">
			<?php
				    $args=array(
				    'post_type' => 'post',
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
				   
					   <?php get_template_part( 'template-parts/content-post', get_post_format() );
					   ?>
				   </div>

				<?php 
				endwhile;
				}
				wp_reset_query();
				?>
		</div>
	</div>
</section>

	

<?php
get_footer();
