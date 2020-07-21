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
            <div class="col-12">
                <h1 class="hero-title fade-in"><?php print_r($section_0['title']); ?></h1>
            </div>
        </div>
    </section>
<?php
endif;
$section_1 = get_field('section-1');
if ($section_1) :
?>
    <Section class="thenewnormal py-5 bg-light-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="mb-4 fade-in"> <?php print_r($section_1['text']) ?></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4 fade-in" src="<?php echo esc_url($section_1['image']['url']); ?>" alt="profile" />
                </div>
            </div>
        </div>
    </Section>
<?php
endif;
?>

<Section class="services">
    <div class="container-fluid px-0">
        <div class="box-wrapper">
            <?php
            // Check rows exists.
            if (have_rows('section-2')) :
                // Loop through rows.
                while (have_rows('section-2')) : the_row();
                    // Load sub field value.
                    $title = get_sub_field('title');
                    $url = get_sub_field('image');
                    $description = get_sub_field('description'); ?>
                    <div class="box flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="<?php echo $url['url']; ?>" alt="Avatar">
                                <div class="service-title">
                                    <?php echo $title ?>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <?php echo $description ?>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="box" style="background-image: url('<?php echo $url['url']; ?>'); background-size: cover;">
                        <div class="service-box">
                            <div class="service-title">
                                <?php echo $title ?>
                            </div>
                            <div class="service-info">
                                <?php echo $description ?>
                            </div>
                        </div>
                    </div> -->
            <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</Section>

<?php
$section_3 = get_field('section-3');
?>

<section class="quality">
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="text-blue mb-5  fade-in"><?php print_r($section_3['title']) ?></h3>
            </div>
            <div class="col-md-4 mb-4  fade-in">
                <span class="fa-stack fa-lg mb-4">
                    <i class="fa fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                </span>
                <h3><?php print_r($section_3['sub-title-1']) ?></h3>
                <p><?php print_r($section_3['description-1']) ?></p>
            </div>
            <div class="col-md-4  mb-4  fade-in">
                <span class="fa-stack fa-lg mb-4">
                    <i class="fa fa-circle fa-stack-2x text-blue"></i>
                    <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                </span>
                <h3><?php print_r($section_3['sub-title-2']) ?></h3>
                <p><?php print_r($section_3['description-2']) ?></p>
            </div>
            <div class="col-md-4  mb-4 fade-in">
                <span class="fa-stack fa-lg mb-4">
                    <i class="fa fa-circle fa-stack-2x text-green"></i>
                    <i class="fab fa-superpowers fa-stack-1x fa-inverse"></i>
                </span>
                <h3><?php print_r($section_3['sub-title-3']) ?></h3>
                <p><?php print_r($section_3['description-3']) ?></p>
            </div>
        </div>
    </div>
</section>


<?php
$section_4 = get_field('section-4');
if ($section_4) :
?>

    <section class="container-fluid hero" style="background-image: url('<?php echo esc_url($section_4['image']['url']); ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="row hero-wrapper no-gutter text-white justify-content-end">
            <div class="col-sm-12 col-md-6 align-self-top">
                <h1 class="hero-title text-white"><?php echo esc_html($section_4['title']); ?></h1>
                <div class="hero-description"><?php echo esc_html($section_4['text']); ?></div>

            </div>
        </div>
    </section>
<?php
endif; ?>

<?php
// get_sidebar();
get_footer();
