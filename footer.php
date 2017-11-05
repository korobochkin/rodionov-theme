<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rodionov_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-gray">
        <div class="container site-footer-components ">

            <div class="row text-footer">
                <div class="site-info col-sm-3">
                    <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                </div><!-- .site-info -->
                <nav id="site-navigation" class="main-navigation col-auto">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'footer-primary-menu',
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
                        'theme_location' => 'menu-2-social',
                        'menu_class'     => 'row m-0 list-unstyled',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </nav>
            </div>
            <div class="site-footer-dash"></div>
            <div class="row text-footer">
                <div class="col-sm-4">
                    1
                </div>
                <div class="col-sm-6">
                    2
                </div>
                <div class="col-sm-2">
                    3
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
