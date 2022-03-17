@extends('dashboard')
@section('content')

@if(session('secretUpdated'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>&nbsp;&nbsp;
        <div><strong>{{session('secretUpdated')}}</strong></div>
    </div><br>
@endif
@if(session('secretDeleted'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>&nbsp;&nbsp;
        <div><strong>{{session('secretDeleted')}}</strong></div>
    </div><br>
@endif

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-shopping-cart icon-gradient bg-ripe-malin"></i>
            </div>
            <div>Manage Orders
                <div class="page-title-subheading">Manage the data or details of the existing secret.</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-header">Manage Orders
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">

                    <button type="button" data-clipboard-target="#example" class="clipboard-trigger btn btn-primary">Copy</button>&nbsp;
                    <a href="{{route('orders.export_format','Csv')}}" class="btn btn-primary">csv</a>&nbsp;
                    <button onclick="downloadPDFWithBrowserPrint()" class="btn btn-primary">Pdf</button>&nbsp;
                    <a href="{{route('orders.export')}}" class="btn btn-primary">Excel</a>&nbsp;
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{route('orders.import')}}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="import"/>
                    <input type="submit" class="btn btn-sm btn-primary" value="Import File"/>
                </form>
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">User</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">QR code</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Tax</th>
                            <th class="text-center">Delivery_charges</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Tracking Number</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach($orders as $order)
                    <tr align="center">
                        <td class="text-center">{{$order->id}}</td>
                        <td class="text-center">{{@$order->user['name']}}</td>
                        <td class="text-center">{{@$order->product['name']}}</td>
                    
                            $scode = $order->product->secret_code;
                            $secret = App\Models\Secret::find($scode);
                            // $secret_name = @$secret->name;
                            // dd($secret_name);
                        @endphp

                        <td class="text-center">
                            {{@$order->product['id']}}-{{@$secret->name}}
                        </td>

                        <td class="text-center">{{$order->price}}</td>
                        <td class="text-center">{{$order->tax}}</td>
                        <td class="text-center">{{$order->delivery_charges}}</td>
                        <td class="text-center">{{$order->quantity}}</td>
                        <td class="text-center">{{$order->total}}</td>
                        <td class="text-center">
                            @if($order->status == "Ordered")
                                <div class="badge badge-success">{{$order->status}}</div>
                            @elseif($order->status == "Cancelled")
                                <div class="badge badge-info">{{$order->status}}</div>
                            @else
                                <div class="badge badge-danger">{{$order->status}}</div>
                            @endif
                        </td>
                        <td class="text-center">{{$order->tracking_number}}</td>
                        <td>
                            <a class="btn btn-primary" style="width:70px;" href="{{route('orders.edit',$order->id)}}" role="button">Edit</a><br><br>
                            <a class="btn btn-primary" style="width:70px;" href="{{route('orders.delete',$order->id)}}" role="button">Delete</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1" class="text-center">ID</th>
                            <th rowspan="1" colspan="1" class="text-center">User</th>
                            <th rowspan="1" colspan="1" class="text-center">Product</th>
                            <th rowspan="1" colspan="1" class="text-center">Price</th>
                            <th rowspan="1" colspan="1" class="text-center">Tax</th>
                            <th rowspan="1" colspan="1" class="text-center">Delivery Charges</th>
                            <th rowspan="1" colspan="1" class="text-center">Total</th>
                            <th rowspan="1" colspan="1" class="text-center">Status</th>
                            <th rowspan="1" colspan="1" class="text-center">Quantity</th>
                            <th rowspan="1" colspan="1" class="text-center">Tracking Number</th>
                            <th rowspan="1" colspan="1" class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
