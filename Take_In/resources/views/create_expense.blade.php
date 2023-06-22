<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
</head>
<body>
    <main>
        <h1>Novo Gasto</h1>

        <form method="POST" action="{{ route('expenses.store') }}">
            @csrf

            <label for="description">Descrição:</label>
            <input type="text" name="description" required>

            <label for="amount">Valor:</label>
            <input type="number" name="amount" step="0.01" required>

            <label for="category">Categoria:</label>
            <select name="category" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <button type="submit">Adicionar Despesa</button>
        </form>
    </main>
</body>
</html>