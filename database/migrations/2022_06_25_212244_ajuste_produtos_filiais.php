<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{

    public function up()
    {
        // Tabela filial
        schema::create('filiais', function(Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        // Tabela produto_filiais
        schema::create('produto_filiais', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->float('preco_venda', 10,2);
            $table->integer('estoque_min');
            $table->integer('estoque_max');
            $table->timestamps();

            //Foreign Key (constraints)
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

    }

    public function down()
    {
        // Removendo relacionamento com a tabela
        schema::dropIfExists('produto_filiais');

        // Removendo relacionamento com a tabela
        schema::dropIfExists('filiais');
    }
}
