<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;
use App\Exports\SecretsExport;
use App\Imports\SecretsImport;
use Maatwebsite\Excel\Facades\Excel;

class SecretController extends Controller
{
    // public function add()
    // {
    //     return view('secrets.create');
    // }
    // public function store(Request $request)
    // {
    //     $secret = new Secret();
    //     $secret->name = $request->name;
    //     $secret->slug = $request->slug;
    //     $secret->save();
    //     return redirect()->route('secrets.add');
    // }
    public function index()
    {
        $secret = Secret::all();
        return view('secrets.index',compact('secret'));
    }

    public function export()
    {
        return Excel::download(new SecretsExport(), fileName: 'secrets.xlsx');
    }

    public function export_format($format)
    {
        $extension = strtolower($format);
        if(in_array($format, ['Mpdf', 'Dompdf','Tcpdf'])) $extension = 'pdf';
        return Excel::download(new SecretsExport(), 'secrets.'.$extension, $format);

    }

    public function import()
    {
        Excel::import(new SecretsImport(), request()->file('import'));
        return redirect()->route('secrets.index')->withMessage('Successfully imported.');
    }

    public function edit($id)
    {
        $secret = Secret::find($id);
        return view('secrets.edit',compact('secret'));
    }
    public function update($id, Request $request)
    {
        $secret = Secret::find($id);
        $secret->name = $request->name;
        $secret->slug = $request->slug;
        $secret->update();
        return redirect()->route('secrets.index');
    }
    public function delete($id, Request $request)
    {
        $secret = Secret::find($id);
        $secret->delete();
        return redirect()->route('secrets.index');
    }
}
