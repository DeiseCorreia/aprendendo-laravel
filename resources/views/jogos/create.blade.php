@extends('layouts.app')

@section('title','Criação')

@section('content')
  
  <div class="container mt-5">
    <h1>Crie um novo jogo</h1>
    <hr>
    <form action="" method="post">
        <div class="form-group">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control"name="nome" placeholder="Digite um nome ...">
          </div>
          <br>
          <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control"name="categoria" placeholder="Digite uma categoria ...">
          </div>
          <br>
          <div class="form-group">
            <label for="ano_criacao">Ano de Criação:</label>
            <input type="number" class="form-control"name="ano_criacao" placeholder="Digite o Ano da Criação ...">
          </div>
          <br>
          <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control"name="valor" placeholder="Digite o valor ...">
          </div>
          <br>
          <div class="form-group">
            <input type="submit"name="submit" class="btn btn-primary">
          </div> 
        </div>
    </form>
  </div>
  
@endsection