<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        return view('site.contato');
        
    }

    public function salvar(Request $request) {

        SiteContato::create($request->all());

    }
}
