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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('uuid')->unique();
            $table->string('slug')->unique();
            $table->string('sub_title')->nullable();
            $table->text('description')->nullable();
            $table->string('organisator')->nullable();
            $table->string('location');
            $table->string('url_location')->nullable();
            $table->dateTime('dateStart');
            $table->dateTime('dateEnd');
            $table->time('hourStart')->nullable();
            $table->time('hourEnd')->nullable();
            $table->string('image_cover')->nullable();
            $table->string('file_path')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_archive')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
