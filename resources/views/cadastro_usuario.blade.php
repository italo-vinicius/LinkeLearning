<!DOCTYPE html>
<html>
<head>
    <title>Login e Cadastro</title>
    <link rel="stylesheet" type="text/css" href={{asset('/css/cadastro_usuario.css')}}>
</head>
<body>
<div class="form-container">
    <h2>Cadastro de Usuário</h2>
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" required><br>
        @error('name')
        <div style="color: red"> {{ $message }}</div>
        @enderror

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        @error('email')
        <div style="color: red"> {{ $message }}</div>
        @enderror

        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br>
        @error('password')
        <div style="color: red"> {{ $message }}</div>
        @enderror

        <label for="confirm-password">Confirme a Senha:</label><br>
        <input type="password" id="confirm-password" name="password_confirmation" required><br>


        <button type="submit">Cadastrar</button>
    </form>
</div>
</body>
</html>
