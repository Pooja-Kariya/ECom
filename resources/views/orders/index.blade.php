@extends('dashboard')
@section('content')
<table class="table table-dark table-striped">
    <thead>
        <tr>
        <th class="text-center">ID</th>
        <th class="text-center">User ID</th>
        <th class="text-center">Product ID</th>
        <th class="text-center">Price</th>
        <th class="text-center">Tax</th>
        <th class="text-center">Delivery_charges</th>
        <th class="text-center">Total</th>
        <th class="text-center">Status</th>
        <th class="text-center">Quantity</th>
        <th class="text-center">Tracking Number</th>
        <th class="text-center">Actions</th>
        <td>
    </tr>
    </thead>
    <tbody>
        @foreach($order as $order)
        <tr align="center">
            <td class="text-center">{{$order->id}}</td>
            <td class="text-center">{{@$order->user['name']}}</td>
            <td class="text-center">{{@$order->product['name']}}</td>
            <td class="text-center">{{$order->price}}</td>
            <td class="text-center">{{$order->tax}}</td>
            <td class="text-center">{{$order->delivery_charges}}</td>
            <td class="text-center">{{$order->quantity}}</td>
            <td class="text-center">{{$order->total}}</td>
            <td class="text-center">{{$order->status}}</td>
            <td class="text-center">{{$order->tracking_number}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('orders.edit',$order->id)}}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{route('orders.delete',$order->id)}}" role="button">Delete</a>
            </td>
        </tr>
    </tbody>
  @endforeach
</table>
@endsection
