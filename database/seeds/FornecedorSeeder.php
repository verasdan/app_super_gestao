<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 001';
        $fornecedor->site = 'fornecedor.com';
        $fornecedor->telefone = '86999999999';
        $fornecedor->email = 'fornecedor001@email.com';
        $fornecedor->uf = 'PI';
        $fornecedor->save();
    }
}
