<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package northstar
 */

?>


<footer class="footer">
	<div class="container">
		<div class="row top-footer">
			<div class="col-md-4 first-foot">
				<img src="<?php bloginfo('template_url') ?>/assets/img-logo.png" alt="North Star" class="img-responsive">
			</div>
			<div class="col-md-4 second-foot">
			</div>
			<div class="col-md-4 third-foot">
				<ul class="line">
					<li><a href="http://northstar.store/vision/">About</a></li>
					<li><a href="mailto:david@perell.com">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="copyright-wrap row">
			<div class="col-md-12 text-center">
				&copy; <?php echo date("Y"); ?> The North Star. All rights reserved.
			</div>
		</div>
	</div>
</footer>





</section> <!-- end page content -->


<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>
	function fadeIn(obj) {
    $(obj).fadeIn(1000);
}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69276455-7', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
