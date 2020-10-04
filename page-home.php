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

    <section class="container-fluid hero" style="background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 0%), url('<?php echo esc_url($section_0['image']['url']); ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="row hero-wrapper no-gutter">
            <div class="hero-content text-center ">
                <h1 class="hero-title"><?php print_r($section_0['title']); ?></h1>
                <div class="subtitle mb-5 text-white"><?php print_r($section_0['subtitle']) ?></div>
                <a class="btn-basic btn-basic-1 btn-basic--solid" href="<?php print_r($section_0['button']); ?>"><?php print_r($section_0['button_text']); ?></a>
            </div>
        </div>
    </section>
<?php
endif;
$section_1 = get_field('section-1');
if ($section_1) :
?>
    <Section id="theacademy" class="py-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_1['image']['url']); ?>" alt="profile" />
                </div>
                <div class="col-sm-12 col-md-6">
                    <h2><?php print_r($section_1['title']) ?></h2>
                    <p class="subtitle mb-4"><?php print_r($section_1['subtitle']) ?></p>
                    <div class="mb-5"> <?php print_r($section_1['description']) ?></div>
                    <a class="btn-basic btn-basic-1 btn-basic--outline" href="<?php print_r($section_0['button']); ?>"><?php print_r($section_0['button_text']); ?></a>
                </div>

            </div>
        </div>
    </Section>
<?php
endif;
?>

<section class="program py-10 bg-gray">
    <div class="container  ">
        <div class="row">
            <div class="col-12">
                <?php
                if (have_rows('section-2')) : while (have_rows('section-2')) : the_row(); ?>
                        <div class="subtitle text-center  mb-2"><?php echo get_sub_field('sub-title') ?></div>
                        <h2 class="mb-5 text-center"><?php echo get_sub_field('title') ?></h2>
            </div>
            <?php
                        if (have_rows('articles')) : while (have_rows('articles')) : the_row();
                                $image = get_sub_field('image'); // Get image URL 
            ?>
                    <div class="card-article col-sm-12 col-md-4">
                        <img src="<?php echo esc_url($image['url']); ?>" />
                        <h4><?php echo get_sub_field('title'); ?></h4>
                        <a href="#">Read More</a>

                    </div>
    <?php
                            endwhile;
                        endif;
                    endwhile;
                endif; ?>
    <div class="col-12  mt-4 text-center">
        <a class="btn-basic btn-basic-1 btn-basic--outline " href="<?php print_r($section_0['button']); ?>"><?php print_r($section_0['button_text']); ?></a>
    </div>
        </div>
    </div>
</section>

<section class="assembles">
    <div class="container py-10">
        <div class="row">
            <?php
            if (have_rows('section-3')) : while (have_rows('section-3')) : the_row(); ?>
                    <div class="col-12">
                    <div class="subtitle text-center mb-2"><?php echo get_sub_field('sub-title') ?></div>

                        <h2 class="mb-5 text-center"><?php echo get_sub_field('title') ?></h2>
                    </div>
                    <?php
                    if (have_rows('articles')) : while (have_rows('articles')) : the_row();
                            $image = get_sub_field('image'); // Get image URL 
                    ?>
                            <div class="card-article col-sm-12 col-md-3">
                                <img src="<?php echo esc_url($image['url']); ?>" />
                                <h4><?php echo get_sub_field('title'); ?></h4>
                                <a href="#">Read More</a>
                            </div>
            <?php
                        endwhile;
                    endif;
                endwhile;
            endif; ?>
<div class="col-12  mt-4 text-center">
        <a class="btn-basic btn-basic-1 btn-basic--outline " href="<?php print_r($section_0['button']); ?>"><?php print_r($section_0['button_text']); ?></a>
    </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container-fluid">
        <div class="row no-gutter">
            <?php
            $images = get_field('section-4');
            if ($images) : ?>

                <?php foreach ($images as $image) : ?>
                    <div class="col-md-3 grid px-0" style="background-image:url(<?php echo esc_url($image['sizes']['medium']); ?>); background-size: cover;>">
                        <a href="<?php echo esc_url($image['url']); ?>">
                        </a>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container-sponsor">
    <?php
            $sponsors = get_field('section-5');
            if ($sponsors) : ?>
                <?php foreach ($sponsors as $image) : ?>
                    <div class="item-sponsor">
                        <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="">
                    </div>
                    
                <?php endforeach; ?>

            <?php endif; ?>
            </div>
</section>


<?php
// get_sidebar();
get_footer();
