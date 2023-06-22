<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        // Obtenha todas as receitas do usuário autenticado
        $incomes = auth()->user()->incomes;

        return view('incomes.index', compact('incomes'));
    }

    public function create()
    {
        return view('incomes.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'category' => 'required',
        ]);

        // Crie uma nova receita associada ao usuário autenticado
        $income = new Income();
        $income->description = $validatedData['description'];
        $income->amount = $validatedData['amount'];
        $income->category = $validatedData['category'];
        $income->user_id = auth()->user()->id;
        $income->save();

        return redirect()->route('incomes.index')->with('success', 'Receita criada com sucesso!');
    }

    public function edit(Income $income)
    {
        return view('incomes.edit', compact('income'));
    }

    public function update(Request $request, Income $income)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'category' => 'required',
        ]);

        // Atualize os dados da receita
        $income->description = $validatedData['description'];
        $income->amount = $validatedData['amount'];
        $income->category = $validatedData['category'];
        $income->save();

        return redirect()->route('incomes.index')->with('success', 'Receita atualizada com sucesso!');
    }

    public function destroy(Income $income)
    {
        // Exclua a receita
        $income->delete();

        return redirect()->route('incomes.index')->with('success', 'Receita excluída com sucesso!');
    }
}