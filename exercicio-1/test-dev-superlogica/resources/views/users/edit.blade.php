<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar</title>

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
    <h1>Editar o usuário: {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="erros">
            @foreach($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('update_user', ['id' => $user->id]) }}" method="post">
        @method('PUT')
        @csrf
        <div>
            <label for="name">Nome completo:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="userName">Nome de login:</label>
            <input type="text" id="userName" name="userName" value="{{ $user->user_name }}" readonly>
        </div>
        <div>
            <label for="zipCode">CEP</label>
            <input type="text" id="zipCode" name="zipCode" value="{{ $user->zip_code }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div>
            <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra
                e 1 número):</label>
            <input type="password" id="password" name="password">
        </div>
        <button>Salvar</button>
        <a href="{{ route('users_list') }}"><button type="button">Voltar</button></a>
    </form>
</body>
</html>
