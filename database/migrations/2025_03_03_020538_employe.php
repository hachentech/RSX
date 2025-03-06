<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   function up(): void
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('tel')->unique();
            $table->string('fonction');
            $table->timestamps();
    });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
