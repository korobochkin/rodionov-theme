<?php
/**
 * Template for displaying search forms.
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-row">
        <div class="col col-md-6">
            <label for="<?php echo $unique_id; ?>" class="screen-reader-text">
                <span><?php echo _x( 'Search for:', 'label', 'rodionov-theme' ); ?></span>
            </label>
            <input type="search" id="<?php echo $unique_id; ?>" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'rodionov-theme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        </div>
        <div class="col-auto col-md-6">
            <button type="submit" class="btn btn-primary"><?php echo _x( 'Search', 'submit button', 'rodionov-theme' ); ?></button>
        </div>
    </div>
</form>