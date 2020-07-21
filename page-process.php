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
                <div class="hero-text"><?php print_r($section_0['description']); ?></div>
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
    <Section class="thenewnormal py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_1['image-1']['url']); ?>" alt="profile" />
                    <div class="mb-4 text-blue"> <?php print_r($section_1['title-1']) ?></div>
                    <div class="mb-5"> <?php print_r($section_1['description-1']) ?></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_1['image-2']['url']); ?>" alt="profile" />
                    <div class="mb-4 text-blue"> <?php print_r($section_1['title-2']) ?></div>
                    <div class="mb-5"> <?php print_r($section_1['description-2']) ?></div>
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
            <div class="row text-center">
                <div class="col-sm-12">
                    <h3 class="text-blue"> <?php print_r($section_2['text']) ?></h3>
                    <img class="mb-4" src="<?php echo esc_url($section_2['image']['url']); ?>" alt="profile" />
                </div>
            </div>
        </div>
    </Section>
<?php
endif;
?>

<Section class="services py-5">
    <div class="container">
        <div class="row text-center">
            <?php
            // Check rows exists.
            if (have_rows('section-3')) :
                // Loop through rows.
                while (have_rows('section-3')) : the_row();
                    // Load sub field value.
                    $title = get_sub_field('title');
                    $url = get_sub_field('image'); ?>
                    <div class="col-sm-12 col-md-4">
                        <img class="mb-4" src="<?php echo $url['url']; ?>" alt="profile" />
                        <h3 class="text-blue"> <?php echo $title; ?></h3>
                    </div>
            <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</Section>

<?php
$section_7 = get_field('section-7');
if ($section_7) :
?>
    <Section class="thenewnormal py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-blue"> <?php print_r($section_7['title']) ?></h3>
                    <div><?php print_r($section_7['description']) ?></div>
                </div>
            </div>
        </div>
    </Section>
<?php
endif;
?>

<?php
$section_4 = get_field('section-4');
if ($section_4) :
?>
    <Section>
        <div class="container-fluid">
            <div class="row no-gutter bg-light-green">
                <div class="col-sm-12 col-md-6 py-4 align-self-center ">
                    <h3 class="mb-4"> <?php print_r($section_4['title']) ?></h3>
                    <div class="mb-4"> <?php print_r($section_4['list']) ?></div>
                </div>
                <div class="col-sm-12 col-md-6 px-0  box-container">
                    <div class="box-fluid">
                        <img class="box-fluid-image" src="<?php echo esc_url($section_4['image']['url']); ?>" alt="profile" />
                    </div>
                </div>
            </div>
        </div>
    </Section>
<?php
endif;
?>

<?php
$section_5 = get_field('section-5');
if ($section_5) :
?>
    <Section>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-sm-12 col-md-4 px-0  box-container">
                    <div class="box-fluid">
                        <img class="box-fluid-image" src="<?php echo esc_url($section_5['image']['url']); ?>" alt="profile" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 py-4 align-self-center ">
                    <h3 class="mb-4"> <?php print_r($section_5['title']) ?></h3>
                    <div class="mb-4"> <?php print_r($section_5['description']) ?></div>
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
