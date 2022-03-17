@extends('dashboard')
@section('content')
{{-- <div class="main-card mb-3 card">
    <div class="card-body">
        <head>
            <table class="table table-light table-striped" id="demo">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
            <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        </head>
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Order ID</th>
            <th class="text-center">Type</th>
            <th class="text-center">Mode</th>
            <th class="text-center">Status</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaction as $transaction)
        <tr align="center">
            <td class="text-center">{{$transaction->id}}</td>
            <td class="text-center">{{$transaction->order['name']}}</td>
            <td class="text-center">{{$transaction->type}}</td>
            <td class="text-center">{{$transaction->mode}}</td>
            <td class="text-center">
                @if($transaction->status == "active")
                    <div class="badge badge-success">{{$transaction->status}}</div>
                @elseif($transaction->status == "inactive")
                    <div class="badge badge-info">{{$transaction->status}}</div>
                @else
                    <div class="badge badge-danger">{{$transaction->status}}</div>
                @endif
            </td>
            <td>
                <a class="btn btn-primary" href="{{route('transactions.edit',$transaction->id)}}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{route('transactions.delete',$transaction->id)}}" role="button">Delete</a>
            </td>
        </tr>
    </tbody>
    </div>
</div> --}}

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-coins icon-gradient bg-ripe-malin"></i>
            </div>
            <div>Manage transactions</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card-header">Manage Transactions
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    <button type="button" data-clipboard-target="#example" class="clipboard-trigger btn btn-primary">Copy</button>&nbsp;
                    <a href="{{route('transactions.export_format','Csv')}}" class="btn btn-primary">csv</a>&nbsp;
                    <button onclick="downloadPDFWithBrowserPrint()" class="btn btn-primary">Pdf</button>&nbsp;
                    <a href="{{route('transactions.export')}}" class="btn btn-primary">Excel</a>&nbsp;
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{route('transactions.import')}}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="import"/>
                    <input type="submit" class="btn btn-sm btn-primary" value="Import File"/>
                </form>
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Mode</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaction as $transaction)
                        <tr align="center">
                            <td class="text-center">{{$transaction->id}}</td>
                            <td class="text-center">{{$transaction->order_id}}</td>
                            <td class="text-center">{{$transaction->mode}}</td>
                            <td class="text-center">
                                @if($transaction->type == "Active")
                                    <div class="badge badge-success">{{$transaction->type}}</div>
                                @elseif($transaction->type == "Inactive")
                                    <div class="badge badge-info">{{$transaction->type}}</div>
                                @else
                                    <div class="badge badge-danger">{{$transaction->type}}</div>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" style="width:70px;" href="{{route('transactions.edit',$transaction->id)}}" role="button">Edit</a>
                                <a class="btn btn-primary" style="width:70px;" href="{{route('transactions.delete',$transaction->id)}}" role="button">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1" class="text-center">ID</th>
                            <th rowspan="1" colspan="1" class="text-center">Order ID</th>
                            <th rowspan="1" colspan="1" class="text-center">Type</th>
                            <th rowspan="1" colspan="1" class="text-center">Mode</th>
                            <th rowspan="1" colspan="1" class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
