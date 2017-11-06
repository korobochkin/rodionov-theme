<?php
namespace Korobochkin\RodionovTheme\Admin\Services;

use Korobochkin\RodionovTheme\Theme;

class CustomizerSetup
{
    /**
     * @param $customize \WP_Customize_Manager
     */
    public static function setup($customize)
    {
        $customize->add_setting(
            'footer_about',
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $customize->add_control(
            'footer_about',
            array(
                'label'    => __('About in Footer', Theme::NAME),
                'section'  => 'title_tagline',
                'type'     => 'textarea',
            )
        );
    }
}
