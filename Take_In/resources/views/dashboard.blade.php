<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <main>
        <h1>Dashboard</h1>
        
        <h2>Total de Despesas: R$ {{ $totalExpenses }}</h2>
        <h2>Total de Ganhos: R$ {{ $totalIncomes }}</h2>
        
        <h3>Despesas Recentes:</h3>
        <ul>
            @foreach ($recentExpenses as $expense)
                <li>{{ $expense->description }} - R$ {{ $expense->amount }}</li>
            @endforeach
        </ul>
        
        <h3>Ganhos Recentes:</h3>
        <ul>
            @foreach ($recentIncomes as $income)
                <li>{{ $income->description }} - R$ {{ $income->amount }}</li>
            @endforeach
        </ul>
    </main>
</body>
</html>