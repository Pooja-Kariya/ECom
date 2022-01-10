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
        @foreach($secret as $secret)
        <tr align="center">
            <td class="text-center">{{$secret->id}}</td>
            <td class="text-center">{{$secret->name}}</td>
            <td class="text-center">{{$secret->slug}}</td>
            <td>
                <a class="btn btn-primary"  href="{{route('secret.edit',$secret->id)}}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{route('secret.delete',$secret->id)}}" role="button">Delete</a>
            </td>
        </tr>
    </tbody>
  @endforeach
</table>
@endsection
