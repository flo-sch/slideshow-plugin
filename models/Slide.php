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
        'link',
        'is_published',
        'published_at',
        'unpublished_at'
    ];

    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel'
    ];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description'
    ];

    public $attachOne = [
        'image' => [
            'System\Models\File'
        ]
    ];

    /**
     * @var array Model relations
     */
    public $belongsTo = [
        'slideshow' => [
            'Flosch\Slideshow\Models\Slideshow'
        ]
    ];

    /**
     * Restrict query to published slides only
     */
    public function scopePublished($query)
    {
        $now = Carbon::now();

        return $query
            ->where('is_published', true)
            ->where(function ($query) use ($now) {
                $query
                    ->where(function ($query) use ($now) {
                        $query
                            ->where('published_at', '<=', $now)
                            ->orWhereNull('published_at')
                        ;
                    })
                    ->where(function ($query) use ($now) {
                        $query
                            ->where('unpublished_at', '>=', $now)
                            ->orWhereNull('unpublished_at')
                        ;
                    })
                ;
            })
        ;
    }
}
