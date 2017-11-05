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
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i|Roboto:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rodionov-theme' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row align-items-sm-baseline site-header-components">
                <div class="site-branding col-sm-3 text-mono links-no-decoration">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Блог <span class="text-accent">Родионова</span></a></h1>
                    <?php else : ?>
                        <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Блог <span class="text-accent">Родионова</span></p>
                    <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description screen-reader-text"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php
                    endif; ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation col-auto text-mono links-no-decoration">
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

                <nav class="site-header-social col-auto ml-auto">
                    social
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
