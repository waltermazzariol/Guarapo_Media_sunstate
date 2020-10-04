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

if (has_post_thumbnail()) {
    $featured_image = get_the_post_thumbnail();
}
?>

<section class="container-fluid cover" style="background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 0%), url('<?php echo the_post_thumbnail_url()  ?>'); background-repeat: no-repeat; background-size: cover;     background-position-y: center;">
    <div class="container">
        <div class="row cover-wrapper">
            <div class="cover-content">
                <h1 class="cover-title mb-4"><?php the_title(); ?></h1>
            </div>
        </div>

    </div>
</section>

<Section class="our-team container py-5">
    <div class="row">

        <?php $page_description = get_field('page_description'); ?>
        <?php $team_title = get_field('team_title'); ?>
        
        <?php
        if ($page_description) : ?>
            <p class="my-4" align="center"> <?php echo $page_description; ?></p>
        <?php
        endif;
        ?>
        <?php
        if ($team_title) : ?>
            <div class="col-12">
                <h2 class="my-5" style=" text-align: center;"> <?php echo $team_title; ?></h2>
            </div>
        <?php
        endif;
        ?>

        <?php
        // Check rows exists.
        if (have_rows('meet_our_team')) :
            // Loop through rows.
            while (have_rows('meet_our_team')) : the_row();
                // Load sub field value.
                $name = get_sub_field('team_name');
                $position = get_sub_field('team_position');
                $description = get_sub_field('team_description');
                $experience = get_sub_field('team_experience');
                $email = get_sub_field('team_email');
                $url = get_sub_field('team_profile_image'); ?>
                <div class="col-sm-12 col-lg-3 col-md-6 mt-4 text-center">
                    
                        <?php if (isset($url['url'])) : ?>
                            <img src="<?php echo $url['url']; ?>" alt="" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/avatar.jpg" alt="" />
                        <?php endif ?>
                        <h3 class="mt-2"> <?php echo $name ?></h3>
                        <div><?php echo $position ?></div>
                        <hr/>
                   
                </div>


        <?php
            endwhile;
        endif; ?>
    </div>
</Section>

<?php
/* 
	
	Finish ACF HTML 
	
	*/
?>

<?php
// get_sidebar();
get_footer();
