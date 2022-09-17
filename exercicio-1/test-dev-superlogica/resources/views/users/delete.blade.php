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
<form action="{{ route('delete_user', ['id' => $user->id]) }}" method="post">
    @method("DELETE")
    @csrf
    <div>
        <label for="name">Tem certeza que deseja excluir este usuario?</label>
    </div>
    <div>
        <label for="userName">Nome de login:</label>
        <input type="text" id="userName" name="userName" value="{{ $user->user_name }}" readonly>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{ $user->email }}" readonly>
    </div>
    <button>Sim</button>
    <a href="{{ route('users_list') }}"><button type="button">Não</button></a>
</form>
</body>
</html>
