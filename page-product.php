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
        <div class="row hero-wrapper no-gutter justify-content-end">
            <div class="col-sm-12 col-md-6">
                <h1 class="hero-title text-white"><?php echo get_the_title(); ?></h1>
                <div class="hero-text text-white"><?php echo ($section_0['text']); ?></div>
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
                <div class="col-sm-12 col-md-8 py-4 align-self-center ">
                    <h2 class="mb-4 text-blue"> <?php print_r($section_1['title']); ?></h2>
                    <div class="mb-4"> <?php echo ($section_1['descriptionn']); ?></div>
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
    <Section class="thenewnormal py-5 bg-light-blue">
        <div class="container">
            <div class="row text-center ">
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_2['image-1']['url']); ?>" alt="profile" />
                    <div class="mb-4 text-blue"> <?php print_r($section_2['title-1']) ?></div>
                    <div class="mb-5"> <?php print_r($section_2['description-1']) ?></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_2['image-2']['url']); ?>" alt="profile" />
                    <div class="mb-4 text-blue"> <?php print_r($section_2['title-2']) ?></div>
                    <div class="mb-5"> <?php print_r($section_2['description-2']) ?></div>
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
