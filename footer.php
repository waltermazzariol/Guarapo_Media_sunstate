<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_gulp_starter
 */

?>
<section class="footer py-5 bg-green">
	<div class="container">
		<div class="row text-white">
			<div class="col-sm-12 col-md-6">
				<?php dynamic_sidebar('footer_area_one'); ?>
			</div>

			<div class="col-sm-12 col-md-2">
				<?php dynamic_sidebar('footer_area_two'); ?>
			</div>

			<div class="col-sm-12 col-md-2">
				<?php dynamic_sidebar('footer_area_three'); ?>
			</div>

			<div class="col-sm-12 col-md-2">
				<?php dynamic_sidebar('footer_area_four'); ?>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="footer bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-12 footer-text">Copyright &copy; 2020 -
				<a href="https://guarapomedia.com" target="_blank" rel="noopener noreferrer">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/guarapo_logo.svg" class="icon icon-logo" alt="Guarapo Media" />
				</a>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>