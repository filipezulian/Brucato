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
        Schema::create('carrinho', function (Blueprint $table) {
            $table->increments('id_carrinho');
            $table->unsignedInteger('id_usuario')->notNullable();
            $table->unsignedInteger('id_produto')->nullable();
            $table->integer('quantidade_produto')->nullable();
            $table->double('preco_total');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_produto')->references('id_produto')->on('produto');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrinho');
    }
};
