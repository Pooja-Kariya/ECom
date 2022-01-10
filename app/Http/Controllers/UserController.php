<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

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

    // public function fetchroleid(Request $request)
    // {
    //     $data['roles'] = City::where("role_id",$request->role_id)->get(["name", "id"]);
    //     return response()->json($data);
    // }

    public function store(Request $request)
    {
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
        $user->save();
        return redirect()->route('users.create');
    }
    public function index()
    {
        $user = User::all();
        return view('users.index',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->country_id = $request->country_id;
        $user->state_id = $request->state_id;
        $user->city_id = $request->city_id;
        $user->pincode = $request->pincode;
        $user->role_id = $request->role_id;
        $user->update();
        return redirect()->route('users.index');
    }
    public function delete($id, Request $request)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

}
