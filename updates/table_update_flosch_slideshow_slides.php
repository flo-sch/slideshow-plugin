<?php

namespace Flosch\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFloschSlideshowSlides extends Migration
{
    public function up()
    {
        Schema::table('flosch_slideshow_slides', function ($table) {
            $table->boolean('is_published')->default(0);
            $table->dateTime('published_at')->nullable()->default(null);
            $table->dateTime('unpublished_at')->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::table('flosch_slideshow_slides', function ($table) {
            $table->dropColumn('is_published');
            $table->dropColumn('published_at');
            $table->dropColumn('unpublished_at');
        });
    }
}
