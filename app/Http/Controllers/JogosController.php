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

    public function store(Request $request)
    {
        Jogo::create($request->all()); //salvando ...
        return redirect()->route('jogos-index');
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        //abaixo funciona como uma protecao para não ficar acessando as rotas por meio da url
        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id)
    {
        //atualizando os registros
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];
        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }

    public function destroy($id)
    {
        Jogo::where('id', $id)->delete();
        return redirect()->route('jogos-index', $id);
    }
}
