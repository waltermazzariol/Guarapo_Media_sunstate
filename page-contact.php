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


    <section class="container-fluid bg-light-blue" >
        <div class="row no-gutter">
            <div class="col-sm-12 col-md-6">
                <?php echo do_shortcode( '[contact-form-7 id="212" title="Contact form"]' ); ?>
            </div>
        </div>
    </section>


<?php
// get_sidebar();
get_footer();
