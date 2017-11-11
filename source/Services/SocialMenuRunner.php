<?php
namespace Korobochkin\RodionovTheme\Services;

use Korobochkin\WPKit\Runners\AbstractRunner;

/**
 * Class SocialMenuRunner
 */
class SocialMenuRunner extends AbstractRunner
{
    /**
     * @inheritdoc
     */
    public static function run()
    {
    }

    /**
     * @param string    $title The menu item's title.
     * @param \WP_Post  $item  The current menu item.
     * @param \stdClass $args  An object of wp_nav_menu() arguments.
     * @param int       $depth Depth of menu item. Used for padding.
     *
     * @return string Modified title.
     */
    public static function filter($title, $item, $args, $depth)
    {
        if ($args->theme_location == 'menu-1-social' || $args->theme_location == 'menu-2-social') {
            /**
             * @var $social SocialMenu
             */
            $social = self::getContainer()->get(SocialMenu::class);
            return $social->handleMenuItem($title, $item, $args, $depth);
        } else {
            return $title;
        }
    }
}
