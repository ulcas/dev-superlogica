<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrar um novo usuario</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <div>
        <label for="name">Usuario {{ $message }} com sucesso! </label>
    </div>
    <a href="{{ route('users_list') }}"><button type="button">Voltar para a listagem</button></a>
</body>
</html>
