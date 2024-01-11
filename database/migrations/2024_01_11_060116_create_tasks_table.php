<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        //Creacion de la tabla tasks
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            //Se crea la claves foraneas con "companies" y "users"
            $table->foreignId('company_id')->constrained(table:'companies');
            $table->foreignId('user_id')->constrained(table:'users');
            $table->string('name');
            $table->string('description');
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};