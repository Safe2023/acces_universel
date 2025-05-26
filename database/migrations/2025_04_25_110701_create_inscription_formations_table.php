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
        Schema::create('inscription_formations', function (Blueprint $table) {
            $table->string('nom');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('formation');
            $table->string('pays');
            $table->string('departement');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->string('structure')->nullable();
            $table->string('regime')->nullable();
            $table->text('attentes')->nullable();
            $table->string('statut');
            $table->boolean('ordinateur')->default(false);
            $table->string('paiement');
            $table->string('numero_transaction')->nullable();
            $table->decimal('montant', 10, 2)->nullable();
            $table->string('recu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription_formations');
    }
};
