<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar um novo usuario</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    
        <script>
            $(document).ready(function(){
                $('#zipCode').inputmask('99999-999');
            });
        </script>
    </head>
    <body class="antialiased">
    <h1>Registro de usuário</h1>

    @include('includes.errors-validation-form')

    <form action="{{ route('store_user') }}" method="post">
        @csrf
        @include('users._partials.form')
        <input type="submit" value="Cadastrar">
        <a href="{{ route('users_list') }}"><button type="button">Voltar</button></a>
    </form>
    </body>
</html>
