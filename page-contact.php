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
?>

<?php
$section_0 = get_field('section-0');
if ($section_0) :
?>
<section class="container-fluid bg-light-blue">
    <div class="row no-gutter">
        <div class="container my-5 bg-lighter-blue">
            <div class="row">
                <div class="col-sm-12 col-md-6 bg-white p-5">
                    <h2 class="mb-4 text-blue"> <?php print_r($section_0['title']); ?></h2>
                    <div class="mb-4"> <?php echo ($section_0['text']); ?></div>
                    <?php echo do_shortcode('[contact-form-7 id="212" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
?>

<?php
// get_sidebar();
get_footer();
