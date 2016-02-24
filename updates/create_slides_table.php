<?php

namespace Flosch\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSlidesTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('flosch_slideshow_slides')) {
            Schema::create('flosch_slideshow_slides', function ($table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->string('link', 255)->nullable();
                $table->integer('sort_order')->default(0);
                $table->timestamps();
                $table->integer('slideshow_id')->unsigned()->nullable();

                $table->foreign('slideshow_id')->references('id')->on('flosch_slideshow_slideshows')->onUpdate('cascade')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('flosch_slideshow_slides');
    }

}
