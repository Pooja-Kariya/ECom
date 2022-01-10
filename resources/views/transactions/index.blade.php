@extends('dashboard')
@section('content')
<table class="table table-dark table-striped">
    <thead>
        <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Order ID</th>
        <th class="text-center">Type</th>
        <th class="text-center">Mode</th>
        <th class="text-center">Status</th>
        <th class="text-center">Actions</th>
        <td>
    </tr>
    </thead>
    <tbody>
        @foreach($transaction as $transaction)
        <tr>
            <td class="text-center">{{$transaction->id}}</td>
            <td class="text-center">{{$transaction->order_id}}</td>
            <td class="text-center">{{$transaction->type}}</td>
            <td class="text-center">{{$transaction->mode}}</td>
            <td class="text-center">{{$transaction->status}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('transactions.edit',$transaction->id)}}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{route('transactions.delete',$transaction->id)}}" role="button">Delete</a>
            </td>
        </tr>
    </tbody>
  @endforeach
</table>
@endsection
