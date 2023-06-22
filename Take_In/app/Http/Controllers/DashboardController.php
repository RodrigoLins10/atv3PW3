<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Expense;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Obter o total de despesas
        $totalExpenses = Expense::sum('amount');

        // Obter as despesas mais recentes
        $recentExpenses = Expense::orderBy('date', 'desc')->take(5)->get();

        // Obter o total de ganhos
        $totalIncomes = Income::sum('amount');

        // Obter os ganhos mais recentes
        $recentIncomes = Income::orderBy('date', 'desc')->take(5)->get();

        return view('dashboard.index', compact('totalExpenses', 'recentExpenses', 'totalIncomes', 'recentIncomes'));
    }
}
