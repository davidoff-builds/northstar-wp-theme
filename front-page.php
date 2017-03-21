<?php
/**
 * The template for the front page
 *
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

<section id="home-top-banner" class="full-sec-banner" style="background: linear-gradient(rgba(20,20,20,.3),rgba(20,20,20,.3)) 0 0/cover,url('<?php bloginfo('template_url') ?>/assets/main.jpg') center/cover no-repeat;">
	<div class="container-fluid">
		<div class="row text-center">
			<h1>Creating Meaningful Lives.<br>Learn. Grow. Prosper.</h1>

			<div class="btn-wrap"><a href="/blog" class="btn-white">Explore</a></div>
		</div>
	</div>
</section>

<section id="newsletter">
	<div class="container">
		<div class="row mailing-list-wrap">
			<div class="col-md-6 text-wrap">
				<h3><?php the_field('email_signup_verbage'); ?></h3>
			</div>
			<div class="col-md-6 list-wrap">
				<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

					<div id="mc_embed_signup">
					<form action="//perell.us13.list-manage.com/subscribe/post?u=d1b6b629c4668755252d7ca6d&amp;id=27c3f5a97c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<input type="email" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d1b6b629c4668755252d7ca6d_27c3f5a97c" tabindex="-1" value=""></div>
					    <div class="clear submit-btn"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn-white-alt"></div>
					    </div>
					</form>
					</div>
			</div>
		</div>
	</div>
</section>

<section id="feature-split">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 feat-podcast text-right" style="background: linear-gradient(rgba(20,20,20,.3),rgba(20,20,20,.3)) 0 0/cover,url('<?php the_field('featured_podcast_image'); ?>') center/cover no-repeat;">
				<h1>Featured<br>Podcast</h1>
				<h2><?php the_field('featured_podcast_title'); ?></h2>
				<div class="btn-wrap"><a href="<?php the_field('featured_podcast_url'); ?>" class="btn-white">Listen Now</a></div>
			</div>
			<div class="col-md-6 feat-vlog" style="background: linear-gradient(rgba(20,20,20,.3),rgba(20,20,20,.3)) 0 0/cover,url('<?php the_field('featured_vlog_image'); ?>') center/cover no-repeat;">
				<h1>Featured<br>Vlog</h1>
				<h2><?php the_field('featured_vlog_title'); ?></h2>
				<div class="btn-wrap"><a href="<?php the_field('featured_vlog_url'); ?>" class="btn-white">Watch Now</a></div>
			</div>
		</div>
	</div>
</section>



<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
	

<?php
get_footer();
