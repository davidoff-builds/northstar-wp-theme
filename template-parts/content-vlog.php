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
	<div class="col-md-12 text-center vlog">
		<h2><?php the_title(); ?></h2>
		<?php the_field('vlog_embed') ?>

	</div>

	</div>
