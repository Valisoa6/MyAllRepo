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
        Schema::create('pointages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeId')->constrained('employe')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date_pointage')->default(DB::raw('CURRENT_DATE')); // Date par défaut : aujourd'hui
            $table->time('heure_entree_matin')->nullable();
            $table->time('heure_sortie_matin')->nullable();
            $table->time('heure_entree_apresmidi')->nullable();
            $table->time('heure_sortie_apresmidi')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages');
    }
};
