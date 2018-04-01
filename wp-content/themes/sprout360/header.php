<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
            <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_header_class(); ?>" role="banner">
                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0">
                        <div class="row fluid mx-auto">
                            <div class="navbar-brand col-6 col-md-4 col-lg-3">
                                <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                <img class="img-fluid site-logo" src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                                <?php else : ?>
                                <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <?php esc_url(bloginfo('name')); ?>
                                </a>
                                <?php endif; ?>

                            </div>
                            <div class="col-md-9 col-lg-7 ml-auto my-auto hide lg-show-b ">
                                <?php include("navigation.php"); ?>
                            </div>
                            <?php include("mobile-navigation.php"); ?>

                        </div>


                    </nav>
                </div>
            </header>
            <!-- #masthead -->
            <?php endif; ?>
            <div id="content" class="site-content">
                <div class="container-fluid p-0">
                    <div class="row m-0">
