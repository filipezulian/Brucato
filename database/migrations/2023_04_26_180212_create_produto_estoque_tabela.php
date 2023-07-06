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
        Schema::create('produto_estoque', function (Blueprint $table) {
            // $table->increments('id');
            // $table->unsignedInteger('id_estoque')->unique()->notNullable();
            // $table->unsignedInteger('id_produto')->unique()->notNullable();
            // $table->integer('quantidade_produto')->notNullable();
            // $table->foreign('id_estoque')->references('id')->on('estoque');
            // $table->foreign('id_produto')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
//      */
    public function down(): void
    {
        // Schema::dropIfExists('produto_estoque');
    }
};
