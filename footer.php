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
        <div class="container container-special site-footer-components">

            <div class="row align-items-sm-baseline">
                <div id="site-footer-header" class="col-auto col-lg-3 text-gray links-no-decoration">
                    <p id="site-footer-title" class="m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Блог <span class="text-accent">Родионова</span></a></p>
                </div>
                <nav id="site-footer-menu" class="col-12 col-lg-7 text-gray links-no-decoration">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'menu_class'     => 'row m-0 list-unstyled',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </nav><!-- #site-navigation -->
                <nav id="site-footer-social" class="col-auto ml-auto text-gray links-no-decoration">
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
                <div id="site-footer-under-title" class="col-12 col-lg-3 text-gray">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2-under-title',
                        'menu_class'     => 'm-0 list-unstyled',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </div>
                <div id="site-footer-about" class="col-12 col-lg-5 text-gray">
                    <?php rodionov_theme_footer_about(); ?>
                </div>
                <div id="site-footer-powered" class="col-12 col-lg-4 text-gray">
                    <p class="m-0">Сайт работает на&nbsp;<a href="https://setka.io/ru/" target="_blank" class="setka-logo align-middle"><svg class="logo-bw">
                            <use xlink:href="<?php rodionov_theme_the_asset('assets/images/general.svg#setka-editor-logo-black-white'); ?>" title="Setka Editor"
                                 alt="Setka Editor logo" />
                        </svg>
                        <svg class="logo-color">
                            <use xlink:href="<?php rodionov_theme_the_asset('assets/images/general.svg#setka-editor-logo-color'); ?>" title="Setka Editor"
                                 alt="Setka Editor logo" />
                        </svg></a></p>
                </div>
            </div>

        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
