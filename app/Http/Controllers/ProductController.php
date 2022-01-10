<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Secret;


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
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->discount = $request->discount;
        $product->price = $request->price;
        $product->secret_code = $request->secret_code;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('products.add');
    }
    public function index()
    {
        $product = Product::all();
        return view('products.index',compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product'));
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
        $product->update();
        return redirect()->route('products.index');
    }
    public function delete($id, Request $request)
    {
        $product= Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}
