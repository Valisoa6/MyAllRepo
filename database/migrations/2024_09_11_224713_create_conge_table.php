<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('conge', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeId')->constrained('employe')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('raison');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conge');
    }
};
