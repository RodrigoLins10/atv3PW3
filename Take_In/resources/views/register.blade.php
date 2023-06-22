<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <main>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Confirme a senha:</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Registrar</button>
        </form>
    </main>
</body>
</html>