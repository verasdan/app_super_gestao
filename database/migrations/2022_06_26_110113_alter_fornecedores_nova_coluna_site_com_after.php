<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovaColunaSiteComAfter extends Migration
{

    public function up()
    {
        // Adição da coluna site na tabela fornecedores, após a coluna nome
        schema::table('fornecedores', function(Blueprint $table) {
            $table->string('site',150)->after('nome')->nullable();
        });
    }


    public function down()
    {
        // Remover a coluna site da tablea fornecedores;
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn('site');
        });
    }
}
