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

<section class="container-fluid cover" style="background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 0%), url('<?php echo the_post_thumbnail_url()  ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row cover-wrapper">
                <div class="cover-content">
                    <h1 class="cover-title mb-4"><?php the_title(); ?></h1>
                </div>
            </div>

        </div>
    </section>
<?php

$section_1 = get_field('section-1');
if ($section_1) :
?>
    <Section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_1['image']['url']); ?>" alt="profile" />
                </div>
                <div class="col-sm-12 col-md-6">
                    <h2><?php print_r($section_1['title']) ?></h2>
                    <p><?php print_r($section_1['subtitle']) ?></p>
                    <div class="mb-4"> <?php print_r($section_1['description']) ?></div>
                </div>

            </div>
        </div>
    </Section>
<?php
endif;
$section_2 = get_field('section-2');
if ($section_2) :
?>
    <Section class="py-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2><?php print_r($section_2['title']) ?></h2>
                    <p><?php print_r($section_2['subtitle']) ?></p>
                    <div class="mb-4"> <?php print_r($section_2['description']) ?></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_2['images']['url']); ?>" alt="profile" />
                </div>

            </div>
        </div>
    </Section>
<?php
endif;
$section_3 = get_field('section-3');
if ($section_3) :
?>
    <Section class="py-5 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img class="mb-4" src="<?php echo esc_url($section_3['image']['url']); ?>" alt="profile" />
                </div>
                <div class="col-sm-12 col-md-6  text-white">
                    <h2 class=" text-white"><?php print_r($section_3['title']) ?></h2>
                    <p><?php print_r($section_3['subtitle']) ?></p>
                    <div class="mb-4"> <?php print_r($section_3['description']) ?></div>
                </div>

            </div>
        </div>
    </Section>
<?php
endif;
?>

<?php
// f
get_footer();
