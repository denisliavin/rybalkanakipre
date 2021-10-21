<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rybalkanakipre
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header>
        <div id="header">
            <div class="logo">
                <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.jpeg'?>" alt="Information" title="Information">
                </a>
            </div>
            <div class="header_right">
                <ul class="ul_social">
                </ul>
                <div class="contact">
                    <span class="tel">01243 671153 / 07900 0860</span>
                    <div class="email"><a href="mailto:info@somethingfishyfishingcharters.co.uk">info@somethingfishyfishingcharters.co.uk</a></div>
                </div><!--contact-->
                <div class="searchform_main">
                    <form class="rounded" action="" id="searchform" method="get">
                        <div><label style="display:none" for="s">Quick Search</label>
                            <input type="text" id="s" name="s" placeholder="Quick Search..."></div>
                        <div><input type="submit" value="search" id="searchsubmit"></div>
                    </form>
                </div>
            </div>
            <nav>
                <div id="nav">
                    <a id="nav2"></a>
                    <a id="menu-handheld">Menu</a>
                    <?php wp_nav_menu( [
                            'theme_location' => 'header-menu',
                            'container' => 'ul',
                            'menu_class' => 'round',
                            'menu_id' => 'fish',
                        ]
                    ) ?>
                </div>
            </nav>
        </div><!--header-->
    </header>
