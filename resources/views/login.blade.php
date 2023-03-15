<html>
<head>
    <title>Login e Cadastro</title>
    <link rel="stylesheet" type="text/css" href={{asset("/css/login.css")}}>
</head>
<body>
<div class="form-container">
    <h2>Login</h2>
    <form action="{{route('getUser')}}" method="get">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{old('email')}}" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br>
        <div style="color: red">
            @error('errors')
            {{$message}}
            @enderror
        </div>

        <button type="submit">Login</button>
    </form>

    <a href="{{route('user.create')}}">Cadastrar usuário</a>
</div>
</body>
</html>
