<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;

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
