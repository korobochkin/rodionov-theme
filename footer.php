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

	<footer id="colophon" class="site-footer">
        <div class="container site-footer-components ">

            <div class="row align-items-sm-baseline">
                <div class="site-footer-header col-sm-3 text-gray links-no-decoration">
                    <p class="site-footer-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Блог <span class="text-accent">Родионова</span></a></p>
                </div>
                <nav class="site-footer-menu col-auto text-gray links-no-decoration">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'menu_class'     => 'row m-0 list-unstyled',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </nav><!-- #site-navigation -->
                <nav class="site-footer-social col-auto ml-auto text-gray links-no-decoration">
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

            <div class="row">
                <div class="site-footer-under-title col-sm-3 text-gray">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2-under-title',
                        'menu_class'     => 'm-0 list-unstyled',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </div>
                <div class="site-footer-about col-sm-5 text-gray">
                    <?php rodionov_theme_footer_about(); ?>
                </div>
                <div class="site-footer-powered col-sm-4 text-gray">
                    Сайт работает на Setka Editor
                    <svg class="icon">
                        <use xlink:href="<?php rodionov_theme_the_asset('assets/images/general.svg#setka-editor-logo-black-white'); ?>" />
                    </svg>
                </div>
            </div>

        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
