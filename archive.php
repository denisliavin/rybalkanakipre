<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rybalkanakipre
 */

get_header();
?>

    <div id="wrapper">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div id="content">
                    <?php
                        the_archive_title( '<h1>', '</h1>' );
                        the_archive_description( '', '' );
                    ?>
                    <div id="child_wrapper">
                        <section class="child-row">
                            <?php if ( have_posts() ) :

                                while ( have_posts() ) :
                                    the_post();

                                    get_template_part( 'template-parts/content', "page" );

                                endwhile;

                                    the_posts_pagination(array(
                                        'prev_text'    => __('«'),
                                        'next_text'    => __('»'),
                                    ));

                                else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif;
                                ?>
                        </section>
                    </div>
                </div>
            </div>
            <div class="d-none col-lg-3 d-lg-block d-xl-block">
                <?php echo get_sidebar(); ?>
            </div>
        </div>

    </div>

<?php
get_footer();
