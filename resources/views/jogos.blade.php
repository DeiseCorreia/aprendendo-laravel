<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!--https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_link_mailto-->
  <h1>Jogos</h1>
  <p>ID: {{ $id }}</p>
  <p>Nome: {{ $nome }}</p>
  <a href="{{ route('home-index')}}" rel="noopener noreferrer">Click aqui</a>
</body>
</html>