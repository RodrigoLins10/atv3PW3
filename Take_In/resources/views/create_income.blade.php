<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganhos</title>
</head>
<body>
    <main>
        <h1>Novo Ganho</h1>

        <form method="POST" action="{{ route('incomes.store') }}">
            @csrf

            <label for="description">Descrição:</label>
            <input type="text" name="description" required>

            <label for="amount">Valor:</label>
            <input type="number" name="amount" step="0.01" required>

            <label for="date">Data:</label>
            <input type="date" name="date" id="date">
            
            <button type="submit">Adicionar Receita</button>
        </form>

    </main>
</body>
</html>