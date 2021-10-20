<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rybalkanakipre
 */

?>
<div class="item">

    <?php
        if( has_post_thumbnail() ){
    ?>
    <a class="item_image" href="<?php echo get_permalink();?>" title="<?php the_title(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </a>
    <?php
        }
    ?>

    <h4 class="item-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
    <p><?php the_excerpt(); ?>
        <span class="more"><a href="<?php the_permalink(); ?>" title="read more »: <?php the_title(); ?>">read more »</a></span></p>

</div>

