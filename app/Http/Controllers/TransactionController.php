<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;
use App\Models\Order;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transactions.index',compact('transaction'));
    }

    public function export()
    {
        return Excel::download(new TransactionsExport(), fileName: 'transactions.xlsx');
    }

    public function export_format($format)
    {
        $extension = strtolower($format);
        if(in_array($format, ['Mpdf', 'Dompdf','Tcpdf'])) $extension = 'pdf';
        return Excel::download(new TransactionsExport(), 'transactions.'.$extension, $format);

    }

    public function import()
    {
        Excel::import(new TransactionsImport(), request()->file('import'));
        return redirect()->route('transactions.index')->withMessage('Successfully imported.');
    }

    public function edit($id)
    {
        $transaction= Transaction::find($id);
        $orders  = Order::all();
        return view('transactions.edit',compact('transaction','orders'));
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
