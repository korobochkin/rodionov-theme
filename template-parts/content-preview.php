<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rodionov_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <?php if( has_post_thumbnail() ) : ?>
            <div class="entry-cover col-12">
                <figure class="entry-preview mb-lg-0">
                    <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </figure>
            </div>
        <?php endif; ?>

        <header class="entry-header col-12">
            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta text-mono links-no-decoration"><?php rodionov_theme_post_meta(); ?></div>
            <?php endif;
            the_title( '<h2 class="entry-title text-mono links-no-decoration"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            ?>
        </header><!-- .entry-header -->

        <div class="entry-excerpt col-12">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
