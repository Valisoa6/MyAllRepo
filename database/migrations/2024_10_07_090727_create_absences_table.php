<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeId')->constrained('employe')->onDelete('cascade'); // Référence à la table des employés
            $table->date('date_debut'); // Date de début de l'absence
            $table->date('date_fin')->nullable(); // Date de fin de l'absence, peut être null
            $table->string('raison'); // Raison de l'absence
            $table->enum('status', ['en attente', 'approuvé', 'rejeté'])->default('en attente'); // Statut de l'absence
            $table->boolean('is_prevu')->default(false); // Indique si l'absence est prévue
            $table->timestamps(); // Pour created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
};
