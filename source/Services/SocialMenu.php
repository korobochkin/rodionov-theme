<?php
namespace Korobochkin\RodionovTheme\Services;

class SocialMenu
{
    /**
     * @param string    $title The menu item's title.
     * @param \WP_Post  $item  The current menu item.
     * @param \stdClass $args  An object of wp_nav_menu() arguments.
     * @param int       $depth Depth of menu item. Used for padding.
     *
     * @return string Modified title.
     */
    public function handleMenuItem($title, $item, $args, $depth)
    {
        if (!isset($item->url)) {
            return $title;
        }

        $host = parse_url($item->url, PHP_URL_HOST);

        if (!$host) {
            return $title;
        }

        $pattern = '<svg class="icon %2$s"><use xlink:href="%1$s#%2$s" /></svg>';

        switch ($host) {
            case 'www.facebook.com':
            case 'facebook.com':
                $icon = 'facebook';
                break;

            case 'www.instagram.com':
            case 'instagram.com':
                $icon = 'instagram';
                break;

            case 't.me':
            case 'telegram.org':
                $icon = 'telegram';
                break;

            case 'rss':
                $icon = 'rss';
                break;

            case 'twitter.com':
                $icon = 'twitter';
                break;

            case 'youtube.com':
            case 'www.youtube.com':
                $icon = 'youtube';
                break;

            default:
                $icon = false;
                break;
        }

        if (!$icon) {
            return $title;
        } else {
            $icon = 'icon-' . $icon;
        }

        $title = sprintf(
            $pattern,
            rodionov_theme_get_the_asset('assets/images/general.svg'),
            $icon
        );

        return $title;
    }
}
