<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Secret;
use Illuminate\Support\Facades\File;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function add()
    {
        $secrets = Secret::all();
        return view('products.create',compact('secrets'));
    }
    public function fetchsecretcode(Request $request)
    {
        $data['secrets'] = Secret::where("secret_code",$request->secret_code)->get(["name", "id"]);
        return response()->json($data);
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'discount' => 'required',
            'price' => 'required',
            'secret_code' => 'required',
            'status' => 'required',
            'image' => 'required',

        ]);


        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->discount = $request->discount;
        $product->price = $request->price;
        $product->secret_code = $request->secret_code;
        $product->status = $request->status;
        if($request->hasFile('image'));
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/',$filename);
            $product->image = $filename;
        }
        $product->save();
        if($product)
            request()->session()->flash('success','successfully saved product details...!');
        return redirect()->route('products.add');
    }
    public function index()
    {
        $product = Product::all();
        return view('products.index',compact('product'));
    }

    public function export()
    {
        return Excel::download(new ProductsExport(), fileName: 'products.xlsx');
    }

    public function export_format($format)
    {
        $extension = strtolower($format);
        if(in_array($format, ['Mpdf', 'Dompdf','Tcpdf'])) $extension = 'pdf';
        return Excel::download(new ProductsExport(), 'products.'.$extension, $format);

    }

    public function import()
    {
        Excel::import(new ProductsImport(), request()->file('import'));
        return redirect()->route('products.index')->withMessage('Successfully imported.');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $secrets = Secret::all();
        return view('products.edit',compact('product','secrets'));
    }
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->discount = $request->discount;
        $product->price = $request->price;
        $product->secret_code = $request->secret_code;
        $product->status = $request->status;
        if($request->hasFile('image'));
        {
            $destination = 'images/'.$product->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/',$filename);
            $product->image = $filename;
        }
        $product->update();
        return redirect()->route('products.index');
    }
    public function delete($id, Request $request)
    {
        $product= Product::find($id);
        $destination = 'images/'.$product->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $product->delete();
        return redirect()->route('products.index');
    }

}
