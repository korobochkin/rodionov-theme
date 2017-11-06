<?php
namespace Korobochkin\RodionovTheme;

use Korobochkin\RodionovTheme\Admin\Services\CustomizerSetup;
use Korobochkin\WPKit\Themes\AbstractTheme;

class Theme extends AbstractTheme
{
    const NAME = 'rodionov-theme';

    const _NAME_ = 'rodionov_theme';

    const VERSION = '1.0.0';

    /**
     * @inheritdoc
     */
    public function run()
    {
        add_action('customize_register', array(CustomizerSetup::class, 'setup'));

        if (is_admin()) {
            $this->runAdmin();
        }
    }

    public function runAdmin()
    {
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
