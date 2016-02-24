<?php

namespace Flosch\Slideshow\Components;

use Lang;

use Cms\Classes\ComponentBase;

use Flosch\Slideshow\Models\Slideshow as SlideshowModel;

class Slideshow extends ComponentBase
{
    public $slideshow;

    public function componentDetails()
    {
        return [
            'name'        => 'flosch.slideshow::lang.components.slideshow.name',
            'description' => 'flosch.slideshow::lang.components.slideshow.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title' => 'flosch.slideshow::lang.components.slideshow.properties.id.title',
                'description' => 'flosch.slideshow::lang.components.slideshow.properties.id.description',
                'placeholder' => 'flosch.slideshow::lang.components.slideshow.properties.id.placeholder',
                'type' => 'dropdown'
            ]
        ];
    }

    public function onRun()
    {
        $slideshowId = $this->property('id');

        $this->slideshow = SlideshowModel::where('id', '=', $slideshowId)
            ->with('slides')
            ->firstOrFail()
        ;
    }
}
