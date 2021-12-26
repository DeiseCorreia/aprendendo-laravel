<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    //Função Inicial
    public function index()
    {
        /*dd('Olá mundo!');
        $nome = 'fifa';
        $id = 5;dd($jogos);*/

        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }
}
