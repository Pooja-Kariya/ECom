<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function add()
    {
        return view('roles.create');
    }
    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->save();
        return redirect()->route('roles.add');
    }
    public function index()
    {
        $role = Role::all();
        return view('roles.index',compact('role'));
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit',compact('role'));
    }
    public function update($id, Request $request)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->update();
        return redirect()->route('roles.index');
    }
    public function delete($id, Request $request)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index');
    }
}
