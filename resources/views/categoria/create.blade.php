<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="{{ url('/') }}/js/categoria.js" type="text/javascript"></script>
        
    </head>
    <body>
        
        <form id="formAdd" onsubmit="return adicionarCategoria('{{route('categoria.store')}}');" action="" method="post">
            @csrf
            
            <label for="nomcat">Nome da categoria</label><br/>
            <input type="text" name="nomcat" id="nomcat"/><br/><br/>
            <button id="btnSalvar" type="submit">Adicionar</button>    
            
        </form>
        <div id="status"></div>
        
    </body>
</html>
