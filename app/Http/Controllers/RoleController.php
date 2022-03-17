<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Exports\RolesExport;
use App\Imports\RolesImport;
use Maatwebsite\Excel\Facades\Excel;

class RoleController extends Controller
{
    public function add()
    {
        return view('roles.create');
    }
    public function store(Request $request)
    {

        // $request->validate([

        //     'name' => 'required',
        //     'slug' => 'required',

        // ]);

        $role = new Role();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->save();
        if($role)
            request()->session()->flash('success','successfully saved role details...!');
        return redirect()->route('roles.add');
    }
    public function index()
    {
        $role = Role::all();
        return view('roles.index',compact('role'));
    }

    public function export()
    {
        return Excel::download(new RolesExport(), fileName: 'roles.xlsx');
    }

    public function export_format($format)
    {
        $extension = strtolower($format);
        if(in_array($format, ['Mpdf', 'Dompdf','Tcpdf'])) $extension = 'pdf';
        return Excel::download(new RolesExport(), 'roles.'.$extension, $format);

    }

    public function import()
    {
        Excel::import(new RolesImport(), request()->file('import'));
        return redirect()->route('roles.index')->withMessage('Successfully imported.');
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
