<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel_items', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable(); // English title
            $table->string('subtitle')->nullable();
            $table->string('subtitle_en')->nullable(); // English subtitle
            $table->text('description')->nullable();
            $table->text('description_en')->nullable(); // English description
            $table->string('image');
            $table->string('button1_text')->nullable();
            $table->string('button1_text_en')->nullable(); // English button1 text
            $table->string('button1_link')->nullable();
            $table->string('button2_text')->nullable();
            $table->string('button2_text_en')->nullable(); // English button2 text
            $table->string('button2_link')->nullable();
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
        Schema::dropIfExists('carousel_items');
    }
};