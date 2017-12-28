<?php
namespace Korobochkin\RodionovTheme;

use Korobochkin\RodionovTheme\Admin\Services\CustomizerSetup;
use Korobochkin\RodionovTheme\Services\SocialMenu;
use Korobochkin\RodionovTheme\Services\SocialMenuRunner;
use Korobochkin\WPKit\Themes\AbstractTheme;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Theme extends AbstractTheme
{
    const NAME = 'rodionov-theme';

    const _NAME_ = 'rodionov_theme';

    const VERSION = '1.0.0-0996f74a17dd14c0fd16f2a87af6c22e49183da1';

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->configureDependencies();

        add_action('customize_register', array(CustomizerSetup::class, 'setup'));

        add_shortcode('share', 'rodionov_theme_share_buttons');

        if (is_admin()) {
            $this->runAdmin();
        } else {
            SocialMenuRunner::setContainer($this->getContainer());
            add_filter('nav_menu_item_title', array(SocialMenuRunner::class, 'filter'), 10, 4);
        }
    }

    public function runAdmin()
    {
    }

    public function configureDependencies()
    {
        /**
         * @var $container ContainerBuilder
         */
        $container = $this->getContainer();

        $container
            ->register(SocialMenu::class, SocialMenu::class);
    }

    /**
     * @inheritdoc
     */
    public function getVersion()
    {
        return self::VERSION;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return self::NAME;
    }
}
