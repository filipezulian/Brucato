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
        Schema::create('transportadora', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome_empresa', 50)->notNullable();
            $table->string('telefone', 11)->notNullable();
            $table->string('cnpj', 14)->notNullable();
            $table->string('nome_responsavel', 50)->notNullable();
            $table->double('preco_por_km')->notNullable();
            $table->double('cep')->notNullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportadora');
    }
};
