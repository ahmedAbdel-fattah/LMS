<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('about_areas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->longText(column: 'icon_1')->nullable();
            $table->longText(column: 'icon_2')->nullable();
            $table->longText(column: 'icon_3')->nullable();
            $table->string('btn_text');
            $table->string('btn_link');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_areas');
    }
};
