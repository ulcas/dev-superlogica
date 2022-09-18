<div>
    <label for="name">Nome completo:</label>
    <input type="text" id="name" name="name" value="{{ $user->name ?? old('name')}}">
</div>
<div>
    <label for="userName">Nome de login:</label>
    <input type="text" id="userName" name="userName" value="{{ $user->user_name ?? old('userName') }}">
</div>
<div>
    <label for="zipCode">CEP:</label>
    <input type="text" id="zipCode" name="zipCode" value="{{ $user->zip_code ?? old('zipCode')}}">
</div>
<div>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="{{ $user->email ?? old('email')}}">
</div>
<div>
    <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra
        e 1 número):</label>
    <input type="password" id="password" name="password">
</div>
