<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress_gulp_starter
 */

get_header();
if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail();
}
?>

<section class="container-fluid cover" style="background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 0%), url('<?php echo the_post_thumbnail_url()  ?>'); background-repeat: no-repeat; background-size: cover;    background-position-y: center;">
        <div class="container">
            <div class="row cover-wrapper">
                <div class="cover-content">
                    <h1 class="cover-title mb-4"><?php the_title(); ?></h1>
                </div>
            </div>

        </div>
    </section>

<Section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'page');

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>
</Section><!-- #main -->

<?php
// get_sidebar();
get_footer();
