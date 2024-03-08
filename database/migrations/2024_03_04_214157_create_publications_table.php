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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->longText('file_path');
            $table->unsignedBigInteger('size')->nullable();
            $table->string('extension')->nullable();
            $table->unsignedBigInteger('revue_id');
            $table->unsignedBigInteger('annee_id');
            $table->unsignedBigInteger('volume_id');
            $table->bigInteger('startPage');
            $table->bigInteger('endPage');
            $table->mediumText('issn');
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('revue_id')->references('id')->on('revues')->onDelete('cascade');
            $table->foreign('annee_id')->references('id')->on('annees')->onDelete('cascade');
            $table->foreign('volume_id')->references('id')->on('volumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
