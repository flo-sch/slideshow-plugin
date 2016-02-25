<?php

namespace Flosch\Slideshow\Components;

use Lang;

use Cms\Classes\ComponentBase;

use Flosch\Slideshow\Models\Slide as SlideModel;

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
            ],
            'numberOfSlide' => [
                'title' => 'flosch.slideshow::lang.components.slideshow.properties.number_of_slide.title',
                'description' => 'flosch.slideshow::lang.components.slideshow.properties.number_of_slide.description',
                'placeholder' => 'flosch.slideshow::lang.components.slideshow.properties.number_of_slide.placeholder',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'default'           => '5',
            ]
        ];
    }

    public function onRun()
    {
        $slideshowId = $this->property('id');
        $numberOfSlide = $this->property('numberOfSlide');

        $this->slideshow['slides'] = SlideModel::isPublished()
            ->with([
                'slideshow' => function ($query) use ($slideshowId) {
                    $query->where('id', '=', $slideshowId);
                }
            ])
            ->take($numberOfSlide)
            ->get();
    }
}
