<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package UCalgary_Theme
 */

get_header();
?>


<?php if (has_post_thumbnail()) : ?>
	<div class="fluid-container">
		<div class="row">
			<div class="hero-text-block">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
				<p><?php the_excerpt(); ?></p>
			</div>
			<div class="hero">
				<?php ucalgary_post_thumbnail(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<div class="row">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
