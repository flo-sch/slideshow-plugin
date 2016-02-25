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
            'slideshow' => [
                'title'         => 'flosch.slideshow::lang.components.slideshow.properties.id.title',
                'description'   => 'flosch.slideshow::lang.components.slideshow.properties.id.description',
                'placeholder'   => Lang::get('flosch.slideshow::lang.components.slideshow.properties.id.placeholder'),
                'type'          => 'dropdown'
            ],
            'numberOfSlide' => [
                'title'             => 'flosch.slideshow::lang.components.slideshow.properties.number_of_slide.title',
                'description'       => 'flosch.slideshow::lang.components.slideshow.properties.number_of_slide.description',
                'placeholder'       => Lang::get('flosch.slideshow::lang.components.slideshow.properties.number_of_slide.placeholder'),
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'default'           => '5',
            ]
        ];
    }

    public function getSlideshowOptions()
    {
        return SlideshowModel::lists('name', 'id');
    }

    public function onRun()
    {
        $slideshowId = (int) $this->property('slideshow');
        $numberOfSlide = (int) $this->property('numberOfSlide');

        $slideshowQueryBuilder = SlideshowModel::where('id', '=', $slideshowId)
            ->with(['slides' => function ($query) use ($numberOfSlide) {
                $query->published();

                if ($numberOfSlide > 0) {
                    $query->take($numberOfSlide);
                }
            }])
        ;

        $this->slideshow = $slideshowQueryBuilder->firstOrFail();
    }
}
