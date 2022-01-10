<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transactions.index',compact('transaction'));
    }

    public function edit($id)
    {
        $transaction= Transaction::find($id);
        return view('transactions.edit',compact('transaction'));
    }
    public function update($id, Request $request)
    {
        $transaction = Transaction::find($id);
        $transaction->name = $request->name;
        $transaction->slug = $request->slug;
        $transaction->update();
        return redirect()->route('transactions.index');
    }
    public function delete($id, Request $request)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}
