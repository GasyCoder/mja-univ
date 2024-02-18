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
        Schema::create('president__stories', function (Blueprint $table) {
            $table->id();
            $table->string('president_name');
            $table->year('president_year');
            $table->string('president_avatar')->nullable();
            $table->string('decret')->nullable();
            $table->boolean('is_current')->default(false);
            $table->boolean('is_interim')->default(false);
            $table->boolean('is_dead')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('president__stories');
    }
};
