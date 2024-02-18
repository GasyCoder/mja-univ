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
        Schema::create('contact_etabs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etabId');
            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->string('email')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('facebook')->nullable();
            $table->string('adresse')->nullable();
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
        Schema::dropIfExists('contact_etabs');
    }
};
