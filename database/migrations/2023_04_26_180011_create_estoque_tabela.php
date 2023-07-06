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
        Schema::create('estoque', function (Blueprint $table) {
            $table->increments('id_estoque');
            $table->string('CEP', 8);
            $table->integer('quantidade');
            $table->string('nome_local', 100);
            $table->unsignedInteger('id_produto');
            $table->foreign('id_produto')->references('id_produto')->on('produto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
