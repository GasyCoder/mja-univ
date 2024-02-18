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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('sub_title');
            $table->string('uuid')->unique();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->string('images')->nullable();
            $table->boolean('is_slider')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('send_to_subscribers')->default(false);
            $table->text('contenus');
            $table->string('bg_color');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
