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
        Schema::create('album_etabs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etabId');
            $table->string('images_path')->nullable();
            $table->timestamps();

            $table->foreign('etabId')->references('id')->on('etabs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album_etabs');
    }
};
