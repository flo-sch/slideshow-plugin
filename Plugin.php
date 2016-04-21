<?php

namespace Flosch\Slideshow;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Slideshow',
            'description' => 'Manage Twitter Bootstrap carousels with additional content.',
            'author' => 'Flosch',
            'icon' => 'icon-picture-o',
            'homepage' => ''
        ];
    }

    /**
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'flosch.slideshow.access_slideshow' => [
                'tab'   => 'flosch.slideshow::lang.permissions.tab',
                'label' => 'flosch.slideshow::lang.permissions.manage',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'slideshow' => [
                'label' => 'flosch.slideshow::lang.navigation.label',
                'url' => Backend::url('flosch/slideshow/slideshows'),
                'icon' => 'icon-picture-o',
                'permissions' => ['flosch.slideshow.access_slideshow'],
                'order' => 500,
                'sideMenu' => [
                    'slideshows' => [
                        'permissions' => ['flosch.slideshow.access_slideshow'],
                        'label' => 'flosch.slideshow::lang.navigation.sideMenu.slideshows',
                        'icon' => 'icon-picture-o',
                        'url' => Backend::url('flosch/slideshow/slideshows'),
                    ]
                ]
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Flosch\Slideshow\Components\Slideshow' => 'slideshow'
        ];
    }
}
