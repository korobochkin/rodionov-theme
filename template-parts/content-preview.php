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
	<header class="entry-header">
        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta text-mono links-no-decoration"><?php rodionov_theme_post_meta(); ?></div>
        <?php endif;
			the_title( '<h2 class="entry-title text-mono links-no-decoration"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?>
	</header><!-- .entry-header -->

    <?php if( has_post_thumbnail() ) : ?>
        <div class="entry-cover">
            <figure class="entry-preview">
                <a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark">
                    <?php the_post_thumbnail('rodionov-theme-home-thumbnail'); ?>
                </a>
            </figure>
        </div>
    <?php endif; ?>

    <div class="entry-excerpt row">
        <div class="col-md-7">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
