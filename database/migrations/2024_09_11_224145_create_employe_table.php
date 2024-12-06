<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employe', function (Blueprint $table) {
            $table->id(); // Crée la colonne 'id' comme une clé primaire unsignedBigInteger
            $table->foreignId('userId')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('foi');
            $table->string('phone');
            $table->string('role');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('employe');
    }
};
