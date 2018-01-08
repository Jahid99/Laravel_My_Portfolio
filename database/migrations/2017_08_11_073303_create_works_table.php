<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_slug');
            $table->integer('work_order')->unique();
            $table->string('lightbox_image');
            $table->string('caption');
            $table->string('image');
            $table->string('image_alt')->nullable();
            $table->string('overlay_title');
            $table->foreign('category_slug')
            ->references('slug')->on('work_categories')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
