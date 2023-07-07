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
        Schema::create('metodo_pagamento', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_usuario')->notNullable();
            $table->string('numero_cartao', 16)->notNullable();
            $table->string('nome_cartao', 50)->notNullable();
            $table->string('validade_cartao', 5)->notNullable();
            $table->string('cvv_cartao', 3)->notNullable();
            $table->foreign('id_usuario')->references('id')->on('users');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metodo_pagamento');
    }
};
