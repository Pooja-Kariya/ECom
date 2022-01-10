@extends('dashboard')
@section('content')
<table class="table table-dark table-striped">
    <thead>
        <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Discount</th>
        <th class="text-center">Price</th>
        <th class="text-center">Secret Code</th>
        <th class="text-center">Status</th>
        <th class="text-center">Actions</th>
        <td>
    </tr>
    </thead>
    <tbody>
        @foreach($product as $product)
        <tr align="center">
            <td class="text-center">{{$product->id}}</td>
            <td class="text-center">{{$product->name}}</td>
            <td class="text-center">{{$product->description}}</td>
            <td class="text-center">{{$product->discount}}</td>
            <td class="text-center">{{$product->price}}</td>
            <td class="text-center">{{$product->secret_code}}</td>
            <td class="text-center">{{$product->status}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('product.edit',$product->id)}}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{route('product.delete',$product->id)}}" role="button">Delete</a>
                {{-- <a href="{{route('product.edit',$product->id)}}">Edit</a> --}}
                {{-- <a href="{{route('product.delete',$product->id)}}">Delete</a> --}}
            </td>
        </tr>
    </tbody>
  @endforeach
</table>
@endsection
