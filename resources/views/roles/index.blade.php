@extends('dashboard')
@section('content')
<table class="table table-dark table-striped">
    <thead>
        <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Slug</th>
        <th class="text-center">Actions</th>
        <td>
    </tr>
    </thead>
    <tbody>
        @foreach($role as $role)
        <tr align="center">
            <td class="text-center">{{$role->id}}</td>
            <td class="text-center">{{$role->name}}</td>
            <td class="text-center">{{$role->slug}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('role.edit',$role->id)}}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{route('role.delete',$role->id)}}" role="button">Delete</a>
            </td>
        </tr>
    </tbody>
  @endforeach
</table>
@endsection
