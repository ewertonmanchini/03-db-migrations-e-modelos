<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // id(); igual bigInteger('id');
            $table->string('nome',45);
            $table->double('preco');
            $table->integer('estoque');
            $table->unsignedBigInteger('marca_id'); //bigInterger é maior q integer e é todo ID
            $table->foreign('marca_id')->references('id')->on('marcas');
            //foreign define chave estrangeira//references define o campo//on deifine a tabela
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
