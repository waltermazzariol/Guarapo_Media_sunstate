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
    <section class="container-fluid hero" style="background-image: url('<?php echo esc_url($section_0['image']['url']); ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="row hero-wrapper no-gutter">
            <div class="col-sm-12 col-md-6">
                <h1 class="hero-title"><?php echo get_the_title() ?></h1>
                <div class="hero-text"><?php print_r($section_0['text']); ?></div>
            </div>
        </div>
    </section>
<?php
endif;
?>

<?php
$section_1 = get_field('section-1');
if ($section_1) :
?>
    <Section>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-sm-12 col-md-4 px-0  box-container">
                    <div class="box-fluid">
                        <img class="box-fluid-image" src="<?php echo esc_url($section_1['image']['url']); ?>" alt="profile" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 py-5 align-self-center">
                    <div class="mb-4"> <?php print_r($section_1['text']) ?></div>
                </div>
            </div>
        </div>
    </Section>
<?php
endif;
?>

<?php
$section_2 = get_field('section-2');
if ($section_2) :
?>
    <Section>
        <div class="container-fluid">
            <div class="row no-gutter bg-light-blue">
                <div class="col-sm-12 col-md-6 py-4 align-self-center ">
                    <h2 class="mb-4"> <?php print_r($section_2['title']) ?></h2>
                    <div class="mb-4"> <?php print_r($section_2['text']) ?></div>
                </div>
                <div class="col-sm-12 col-md-6 px-0  box-container">
                    <div class="box-fluid">
                        <img class="box-fluid-image" src="<?php echo esc_url($section_2['image']['url']); ?>" alt="profile" />
                    </div>
                </div>
            </div>
        </div>
    </Section>
<?php
endif;
?>

<?php
// get_sidebar();
get_footer();
