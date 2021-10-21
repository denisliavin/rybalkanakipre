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
 * @package rybalkanakipre
 */

get_header('front-page');
?>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade front-page-carousel" data-ride="false">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/slider3.jpeg'?>" class="d-block w-100" alt="...">
                            <div class="slider_text">
                                <div class="slider_text_main">
                                    <div class="slider_text_main2 ">
                                        <h2 class="slide-title1"><a href="https://somethingfishyfishingcharters.co.uk/trips/"> Come Sea Fishing</a></h2>
                                        <div class="slide-text2">With Something Fishy Fishing Charters Chichester</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/slider2.jpeg'?>" class="d-block w-100" alt="...">
                            <div class="slider_text">
                                <div class="slider_text_main">
                                    <div class="slider_text_main2 ">
                                        <h2 class="slide-title1"><a href="https://somethingfishyfishingcharters.co.uk/contact/"> Join Adam and the Something Fishy Fishing Charters crew</a></h2>
                                        <div class="slide-text2">
                                            A range of trips to suit experienced anglers, novice sea fishers and holiday makers who would like to explore beautiful Chichester Harbour from the water.                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/slider1.jpeg'?>" class="d-block w-100" alt="...">
                            <div class="slider_text">
                                <div class="slider_text_main">
                                    <div class="slider_text_main2 ">
                                        <h2 class="slide-title1"><a href="https://somethingfishyfishingcharters.co.uk/trips/harbour-and-wildlife-bird-watching/"> Our magical seal watching trips</a></h2>
                                        <div class="slide-text2">
                                            An unforgettable chance to get close to these elusive creatures                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

    <div class="childhomefull">
        <section class="child-row-home">
            <div id="carousel">
                <?php $query = new WP_Query( array(
                    'posts_per_page' => 4,
                ) ); ?>

                <?php if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php
                    if( has_post_thumbnail() ){
                        $img_url = get_the_post_thumbnail_url();
                    }else{
                        $img_url = get_template_directory_uri() . '/assets/images/noimage.jpg';
                    }
                    ?>

                    <div class="child-home" id="child-home-row1">
                        <a class="child_image_home" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="img" style="background: url(<?php echo $img_url; ?>) no-repeat center;"></div>
                        </a>
                        <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <?php the_excerpt(); ?>
                    </div>

                    <?php $i++; endwhile; ?>
                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            </div>


        </section>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <?php
                while ( have_posts() ) :
                    the_post();

                    the_title('<h1>', '</h1>');
                    the_content();

                endwhile; // End of the loop.
                ?>
            </div>
            <div class="d-none col-lg-3 d-lg-block d-xl-block">
                <?php echo get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php

get_footer();
