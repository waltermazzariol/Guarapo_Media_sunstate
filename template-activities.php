<?php /* Template Name: Activities template */

get_header();
if (has_post_thumbnail()) {
    $featured_image = get_the_post_thumbnail();
}
?>

<section class="container-fluid cover" style="background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 0%), url('<?php echo the_post_thumbnail_url()  ?>'); background-repeat: no-repeat; background-size: cover;background-position-y: center;">
    <div class="container">
        <div class="row cover-wrapper">
            <div class="cover-content">
                <h1 class="cover-title mb-4"><?php the_title(); ?></h1>
            </div>
        </div>

    </div>
</section>

<?php
$headline = get_field('headline');
?>
<section class="headline pattern-dots-sm">
    <div class="container" <div class="row">
        <div class="col-12">
            <h3 class="text-uppercase"><?php print_r($headline) ?></h3>
        </div>
    </div>
    </div>
</section>


<Section id="theacademy" class="py-5">
    <div class="container">
        <div class="row">
            <?php
            // Check rows exists.
            if (have_rows('activities')) :
                // Loop through rows.
                while (have_rows('activities')) : the_row();
                    // Load sub field value.
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $button_text = get_sub_field('button_text');
                    $button_link = get_sub_field('button_link');
            ?>
                    <div class="col-sm-12 col-md-6 my-4">
                        <h3 class="text-capitalize"><?php echo $title ?></h3>
                        <hr/>
                        <p><?php echo $description ?></p>
                        <a class="btn-basic btn-basic-1 btn-basic--solid" href="<?php echo $button_link ?>"><?php echo $button_text ?></a>
                    </div>
            <?php endwhile;
            endif ?>
        </div>
    </div>
</Section>

<?php
// get_sidebar();
get_footer();
