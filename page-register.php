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

<?php
$section_0 = get_field('section-0');
if ($section_0) :
?>
<section class="container-fluid bg-gray">
    <div class="row no-gutter">
        <div class="container my-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 bg-white p-5">
                    <h2 class="mb-4 text-blue"> <?php print_r($section_0['title']); ?></h2>
                    <div class="mb-4"> <?php echo ($section_0['text']); ?></div>
                    <?php echo do_shortcode($section_0['contact_form']); ?>
                </div>
                <div class="col-sm-12 col-md-6 px-0 box-container">
                    <div class="box-fluid">
                        <img class="box-fluid-image" src="<?php echo esc_url($section_0['image']['url']); ?>" alt="profile" />
                    </div>
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
