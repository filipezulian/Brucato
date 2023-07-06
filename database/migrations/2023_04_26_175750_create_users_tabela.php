<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_funcionario')->nullable();
            $table->string('email', 255)->notNullable()->unique();
            $table->string('password');
            $table->string('name', 50)->notNullable();
            $table->string('cpf', 11)->nullable()->unique();
            $table->string('telefone', 11)->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->foreign('id_funcionario')->references('id')->on('users');
            $table->timestamp('email_verified_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
