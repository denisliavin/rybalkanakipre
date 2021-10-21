<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rybalkanakipre
 */


    if( has_post_thumbnail() ){
        $img_url = get_the_post_thumbnail_url();
    }else{
        $img_url = get_template_directory_uri() . '/assets/images/noimage.jpg';
    }
?>

<div class="child" id="child-row1">
    <a class="child_image archiveImageA" href="<?php echo get_permalink();?>" title="<?php the_title(); ?>">
        <div class="archiveImage" style="background: url(<?php echo $img_url; ?>) no-repeat center;"></div>
    </a>
    <div class="child-texthome2">
        <h3>
            <a href="<?php echo get_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h3>
        <p><?php the_excerpt(); ?><span class="more"><a href="<?php echo get_permalink();?>" title="read more »: <?php the_title(); ?>">read more »</a></span></p>
    </div>
</div>
