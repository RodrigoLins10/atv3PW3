<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index()
    {
        $expense = Auth::user()->expense;
        return view('gastos.index', compact('gastos'));
    }

    public function create()
    {
        return view('gastos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'data' => 'required|date',
        ]);

        $expense = new Expense;
        $expense->user_id = Auth::id();
        $expense->descricao = $request->descricao;
        $expense->valor = $request->valor;
        $expense->data = $request->data;
        $expense->save();

        return redirect()->route('gastos.index')->with('success', 'Gasto cadastrado com sucesso!');
    }

    public function show(Expense $expense)
    {

    }

    public function edit(Expense $expense)
    {
        return view('gastos.edit', compact('gasto'));
    }

    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'data' => 'required|date',
        ]);

        $expense->descricao = $request->descricao;
        $expense->valor = $request->valor;
        $expense->data = $request->data;
        $expense->save();

        return redirect()->route('gastos.index')->with('success', 'Gasto atualizado com sucesso!');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('gastos.index')->with('success', 'Gasto excluído com sucesso!');
    }
}