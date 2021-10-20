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

                    the_posts_pagination();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>

                <div class="list_navi">
                    <div class="wp-pagenavi">
                        <span class="pages">Page 1 of 2</span><span class="current">1</span><a class="page larger" title="Page 2" href="https://somethingfishyfishingcharters.co.uk/page/2/?s=day">2</a><a class="nextpostslink" rel="next" href="https://somethingfishyfishingcharters.co.uk/page/2/?s=day">»</a>
                    </div>
                </div><!--item options-->

            </section>
        </div>
    </div>


<?php
get_sidebar();
get_footer();
