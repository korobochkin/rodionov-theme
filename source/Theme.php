<?php
namespace Korobochkin\RodionovTheme;

use Korobochkin\WPKit\Themes\AbstractTheme;
use Korobochkin\WPKit\Themes\ThemeInterface;

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
        // TODO: Implement run() method.
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
