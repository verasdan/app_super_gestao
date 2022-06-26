<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresSoftdelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Adição da coluna softdelete na tabela fornecedores
        schema::table('fornecedores', function(Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remover a coluna softdelete da tablea fornecedores;
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropSoftDeletes('site');
        });
    }
}
