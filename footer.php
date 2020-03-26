<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UCalgary_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="container">
			<div class="row">
				
					<?php dynamic_sidebar('footer_section_one'); ?>
					<?php dynamic_sidebar('footer_section_two'); ?>
					<?php dynamic_sidebar('footer_section_three'); ?>
				
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<script>
	let mainNav = document.getElementById('primary-menu');
	let navBarToggle = document.getElementById('js-navbar-toggle');

	navBarToggle.addEventListener('click', function() {
		mainNav.classList.toggle('active');
	});

	
</script>

<?php wp_footer(); ?>

</body>

</html>