<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('numero')->unique();
            $table->boolean('ativo')->default(false);
            $table->enum('categoria', ['alimentos', 'eletronicos', 'limpeza', 'moveis']);
            $table->text('descricao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('produtos');
    }
}
