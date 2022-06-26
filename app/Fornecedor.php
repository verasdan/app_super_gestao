<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;

    // Seleciona a tabela desejada
    protected $table = 'fornecedores';

    protected $fillable = [
        'nome', 'site', 'telefone', 'uf', 'email'
    ];
}
