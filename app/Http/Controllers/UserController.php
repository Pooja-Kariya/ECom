<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        $data['countries'] = Country::get(["name", "id"]);
        return view('users.create', $data, compact('roles'));
    }

    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        // $request->validate([

        //     'name' => 'required',
        //     'email' => 'required',
        //     // 'password' => 'required',
        //     'mobile' => 'required',
        //     'address' => 'required',
        //     'country_id' => 'required',
        //     'state_id' => 'required',
        //     'city_id' => 'required',
        //     'pincode' => 'required',
        //     'role_id' => 'required',
        //     'image' => 'required',
        // ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->country_id = $request->country_id;
        $user->state_id = $request->state_id;
        $user->city_id = $request->city_id;
        $user->pincode = $request->pincode;
        $user->role_id = $request->role_id;
        if($request->hasFile('image'));
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('user_images/',$filename);
            $user->image = $filename;
        }
        $user->save();
        if($user)
            request()->session()->flash('success','successfully saved user details...!');

        return redirect()->route('users.create');
    }
    public function index()
    {
        $user = User::all();
        return view('users.index',compact('user'));
    }

    public function export()
    {
        return Excel::download(new UsersExport(), fileName: 'products.xlsx');
    }

    public function export_format($format)
    {
        $extension = strtolower($format);
        if(in_array($format, ['Mpdf', 'Dompdf','Tcpdf'])) $extension = 'pdf';
        return Excel::download(new UsersExport(), 'users.'.$extension, $format);

    }

    public function import()
    {
        Excel::import(new UsersImport(), request()->file('import'));
        return redirect()->route('users.index')->withMessage('Successfully imported.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $countries = Country::all();
        $roles = Role::all();
        return view('users.edit',compact('user','countries','roles'));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->country_id = $request->country_id;
        $user->state_id = $request->state_id;
        $user->city_id = $request->city_id;
        $user->pincode = $request->pincode;
        $user->role_id = $request->role_id;
        if($request->hasFile('image'))
        {
            $destination = 'user_images/'.$user->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('user_images/',$filename);
            $user->image = $filename;
        }


        $user->update();
        if($user)
            request()->session()->flash('userUpdated','Successfully updated user details...!!');
        return redirect()->route('users.index');
        }
        public function delete($id, Request $request)
        {
            $user = User::find($id);
            $destination = 'user_images/'.$user->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $user->delete();
            return redirect()->route('users.index');
        }

}
