<?php
use App\Models\Expense;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('expenses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Expense::create([
            'category_id' => $request->category_id,
            'description' => $request->description,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return redirect()->route('dashboard')->with('success', 'Expense created successfully.');
    }
}