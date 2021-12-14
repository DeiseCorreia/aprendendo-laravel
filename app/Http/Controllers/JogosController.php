<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    //Função Inicial
    public function index()
    {
        //dd('Olá mundo!');
        $nome = 'fifa';
        $id = 5;
        return view('jogos.index', ['nome' => $nome, 'id' => $id]);
    }
}
