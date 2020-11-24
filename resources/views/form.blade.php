<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário::Teste de Rotas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

<div class="container my-5">
    <form action="{{ url('/users') }}" method="post" autocomplete="off">

        {{ csrf_field() }}
        @method('DELETE')

        <div class="form-group">
            <label for="first_name">Primeiro Nome</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="Fábio">
        </div>

        <div class="form-group">
            <label for="last_name">Segundo Nome</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="Web">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="curso@teste.com.br">
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
