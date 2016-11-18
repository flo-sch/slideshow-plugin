<?php

namespace Flosch\Slideshow\Models;

use Model;

class Slideshow extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'flosch_slideshow_slideshows';

    /**
     * @var array Fillable fields
     */
    public $fillable = [
        'name'
    ];

    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name'
    ];

    public $hasMany = [
        'slides' => [
            'Flosch\Slideshow\Models\Slide'
        ],
        'slides_count' => [
            'Flosch\Slideshow\Models\Slide',
            'count' => true
        ]
    ];
}
