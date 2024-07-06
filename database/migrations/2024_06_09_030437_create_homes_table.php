<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('main_title')->comment('Main title of the homepage');
            $table->string('subtitle1')->comment('First subtitle');
            $table->string('subtitle2')->comment('Second subtitle');
            $table->string('left_button_text')->comment('Text for the left button');
            $table->string('right_button_text')->comment('Text for the right button');
            $table->string('about_me_section_title')->comment('Title for the About Me section');
            $table->text('about_me_section_description')->comment('Description for the About Me section');
            $table->string('image_path')->nullable()->comment('Path to the image, if any');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
