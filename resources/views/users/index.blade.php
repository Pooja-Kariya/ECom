@extends('dashboard')
@section('content')
<table class="table table-dark table-striped" id="demo">
    <thead>
        <tr>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Mobile</th>
        <th class="text-center">Address</th>
        <th class="text-center">Country ID</th>
        <th class="text-center">state ID</th>
        <th class="text-center">city ID</th>
        <th class="text-center">pin code</th>
        <th class="text-center">Role</th>
        <th class="text-center">Actions</th>
        <td>
    </tr>
    </thead>
    <tbody>
        @foreach($user as $user)
        <tr align="center">
            <td class="text-center">{{$user->name}}</td>
            <td class="text-center">{{$user->email}}</td>
            <td class="text-center">{{$user->mobile}}</td>
            <td class="text-center">{{$user->address}}</td>
            <td class="text-center">{{$user->country['name']}}</td>
            <td class="text-center">{{$user->state['name']}}</td>
            <td class="text-center">{{$user->city['name']}}</td>
            <td class="text-center">{{$user->pincode}}</td>
            <td class="text-center">{{$user->role_id}}</td>
            <td>
                 <a class="btn btn-primary" href="{{route('user.edit',$user->id)}}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{route('user.delete',$user->id)}}" role="button">Delete</a>
            </td>
            {{-- <td>
                <a href="{{route('users.edit',$user->id)}}">Edit</a>
                <a href="{{route('users.delete',$user->id)}}">Delete</a>
            </td> --}}
        </tr>
    </tbody>
  @endforeach
</table>
@endsection
