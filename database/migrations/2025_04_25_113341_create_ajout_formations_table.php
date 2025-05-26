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
        Schema::create('ajout_formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('frais_dinscription');
            $table->string('cout_formation');
            $table->string('debut_formation');
            $table->string('fin_formation');
            $table->string('delais_dinscription');
            $table->string('image');
            $table->string('document')->nullable();
            $table->string('marquette')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajout_formations');
    }
};
