<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rodionov_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i&amp;subset=cyrillic" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rodionov-theme' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container container-special">
            <div class="row align-items-center align-items-lg-baseline site-header-components">

                <div class="col-auto">
                    <div id="site-header-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php rodionov_theme_the_asset('assets/images/ava.png'); ?>" width="66" height="66"></a></div>
                </div>

                <div id="site-header-branding" class="col-auto col-lg-3 text-mono links-no-decoration">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Родионов</a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Родионов</a></p>
                        <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description screen-reader-text"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                    endif; ?>
                </div><!-- .site-branding -->


                <nav id="site-navigation" class="d-none d-lg-block main-navigation col-lg-auto text-mono links-no-decoration">
                    <button class="menu-toggle d-none" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rodionov-theme' ); ?></button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'row m-0 list-unstyled',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </nav><!-- #site-navigation -->


                <nav id="site-header-social" class="align-self-center col-auto col-lg-auto ml-auto">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1-social',
                        'menu_class'     => 'row m-0 list-unstyled',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </nav>

            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
