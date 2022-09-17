<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consultar um usuario</title>

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
        <div>
            <label for="name">Nome completo:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" readonly>
        </div>
        <div>
            <label for="userName">Nome de login:</label>
            <input type="text" id="userName" name="userName" value="{{ $user->user_name }}" readonly>
        </div>
        <div>
            <label for="zipCode">CEP</label>
            <input type="text" id="zipCode" name="zipCode" value="{{ $user->zip_code }}" readonly>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="{{ $user->email }}" readonly>
        </div>
        <a href="{{ route('users_list') }}"><button type="button">Voltar</button></a>
    </body>
</html>
