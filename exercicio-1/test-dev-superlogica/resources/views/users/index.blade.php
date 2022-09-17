<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listagem de usuário</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <h1>Listagem de usuário</h1>
    <a href="{{ route('user_register') }}"><h3>Registrar novo usuário</h3></a>
    <table class="table table-striped">
        <tr>
            <th>Nome do usuário</th>
            <th>Nome de login</th>
            <th>E-mail</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('show_user', $user->id) }}">Visualizar</a></td>
                <td><a href="{{ route('edit_user', $user->id) }}">Editar</a></td>
                <td><a href="{{ route('user_delete', $user->id) }}">Deletar</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
