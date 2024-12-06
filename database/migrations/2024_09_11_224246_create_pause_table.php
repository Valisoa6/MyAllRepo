<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pause', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeId')->constrained('employe')->onUpdate('cascade')->onDelete('cascade');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->timestamps(); // Ajout des timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('pause');
    }
};
