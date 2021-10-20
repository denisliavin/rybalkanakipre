<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rybalkanakipre
 */

get_header();
?>
    <div id="wrapper">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div id="content">
                    <section id="lists">
                        <h1>Search Results for: "<strong><?php echo get_search_query() ?></strong>"</h1>
                        <?php if ( have_posts() ) : ?>
                            <?php
                            while ( have_posts() ) :
                                the_post();

                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'search' );

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
            <div class="d-none col-lg-3 d-lg-block d-xl-block">
                <?php echo get_sidebar(); ?>
            </div>
        </div>
    </div>


<?php

get_footer();
