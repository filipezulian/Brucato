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
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->string('nome')->notNullable();
            $table->string('descricao');
            $table->double('peso')->notNullable();
            $table->double('altura')->notNullable();
            $table->double('largura')->notNullable();
            $table->double('comprimento')->notNullable();
            $table->double('preco')->notNullable();
            $table->string('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
