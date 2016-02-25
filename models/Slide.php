<?php

namespace Flosch\Slideshow\Models;

use Model;
use Carbon\Carbon;

use October\Rain\Database\Traits\Sortable;

class Slide extends Model
{

    use Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'flosch_slideshow_slides';

    /**
     * @var array Fillable fields
     */
    public $fillable = [
        'name',
        'description',
        'link'
    ];

    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description'
    ];

    public $attachOne = [
        'image' => ['System\Models\File']
    ];

    /**
     * @var array Model relations
     */
    public $belongsTo = [
        'slideshow' => ['Flosch\Slideshow\Models\Slideshow']
    ];

    //
    // Scopes for active slides
    //
    public function scopeIsPublished($query)
    {
        return $query
            ->where('published', true);
    }
}
