<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rybalkanakipre
 */

get_header();
?>
    <div id="wrapper">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div id="content">
            <h1><?php the_title(); ?></h1>
            <?php
                if( has_post_thumbnail() ){
            ?>

            <img class="content_image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="">
            <?php
                }
            ?>
            <?php the_content(); ?>
        </div>
            </div>
            <div class="d-none col-lg-3 d-lg-block d-xl-block">
                <?php echo get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();
