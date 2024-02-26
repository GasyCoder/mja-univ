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
        Schema::create('pedagogies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etabId');
            $table->longText('diplomes')->nullable();
            $table->longText('mention')->nullable();
            $table->longText('parcour')->nullable();
            $table->longText('respo_mention')->nullable();
            $table->longText('respo_parcour')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('etabId')->references('id')->on('etabs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedagogies');
    }
};
