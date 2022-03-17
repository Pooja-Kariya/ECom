{{--
@extends('dashboard')
@section('content')

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fal fa-pencil-alt icon-gradient bg-ripe-malin"></i>
                    </div>
                    <div>Manage Users
                        <div class="page-title-subheading">Manage the data or details of the existing user.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card-header">Manage Users
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group"></div>
                    </div>
                </div>
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <table style="width: 100%;" id="clipboard-source" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Mobile</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Country Id</th>
                                    <th class="text-center">State Id</th>
                                    <th class="text-center">City Id</th>
                                    <th class="text-center">pincode</th>
                                    <th class="text-center">role id</th>
                                    <th class="text-center">image</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $user)
                                <tr align="center">
                                    <td class="text-center">{{$user->id}}</td>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">{{$user->mobile}}</td>
                                    <td class="text-center">{{$user->address}}</td>
                                    <td class="text-center">{{$user->country['name']}}</td>
                                    <td class="text-center">{{$user->state['name']}}</td>
                                    <td class="text-center">{{$user->city['name']}}</td>
                                    <td class="text-center">{{$user->pincode}}</td>
                                    <td class="text-center">{{$user->role['name']}}</td>
                                    <td class="text-center">
                                        @if(empty($user->image))
                                            <img src="{{'assets/images/avatars/1.png'}}" width="50" class="rounded">
                                        @else
                                            <img src="/user_images/{{$user->image}}" width="50" class="rounded">
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('users.edit',$user->id)}}" role="button">Edit</a>
                                        <a class="btn btn-primary" href="{{route('users.delete',$user->id)}}" role="button">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
--}}

@extends('dashboard')
@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-users icon-gradient bg-ripe-malin"></i>
            </div>
            <div>Manage Users</div>
        </div>
    </div>
    <div class="btn-actions-pane-right" style="float: right">
        <a href="{{route('users.create')}}" class="btn btn-primary btn-sm col-14">+ Add New Product</a>&nbsp;
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card-header">Manage Users
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    {{-- <a href="{{route('users.create')}}" class="btn btn-primary btn-sm col-14">Add New Product</a>&nbsp; --}}
                    <button type="button" data-clipboard-target="#example" class="clipboard-trigger btn btn-primary">Copy</button>&nbsp;
                    <a href="{{route('users.export_format','Csv')}}" class="btn btn-primary">csv</a>&nbsp;
                    <button onclick="downloadPDFWithBrowserPrint()" class="btn btn-primary">Pdf</button>&nbsp;
                    <a href="{{route('users.export')}}" class="btn btn-primary">Excel</a>&nbsp;

                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{route('users.import')}}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="import"/>
                    <input type="submit" class="btn btn-sm btn-primary" value="Import File"/>
                </form>
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Country Id</th>
                            <th class="text-center">State Id</th>
                            <th class="text-center">City Id</th>
                            <th class="text-center">pincode</th>
                            <th class="text-center">role id</th>
                            <th class="text-center">image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $user)
                        <tr align="center">
                            <td class="text-center">{{$user->id}}</td>
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center">{{$user->mobile}}</td>
                            <td class="text-center">{{$user->address}}</td>
                            <td class="text-center">{{$user->country['name']}}</td>
                            <td class="text-center">{{$user->state['name']}}</td>
                            <td class="text-center">{{$user->city['name']}}</td>
                            <td class="text-center">{{$user->pincode}}</td>
                            <td class="text-center">{{$user->role['name']}}</td>
                            <td class="text-center">
                                @if(empty($user->image))
                                    <img src="{{'assets/images/avatars/1.png'}}" width="50" class="rounded">
                                @else
                                    <img src="/user_images/{{$user->image}}" width="50" class="rounded">
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" style="width:70px;" href="{{route('users.edit',$user->id)}}" role="button">Edit</a><br>
                                <br>
                                <a class="btn btn-primary" style="width:70px;" href="{{route('users.delete',$user->id)}}" role="button">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1" class="text-center">ID</th>
                            <th rowspan="1" colspan="1" class="text-center">Porfile</th>
                            <th rowspan="1" colspan="1" class="text-center">Name</th>
                            <th rowspan="1" colspan="1" class="text-center">Email</th>
                            <th rowspan="1" colspan="1" class="text-center">Mobile</th>
                            <th rowspan="1" colspan="1" class="text-center">Address</th>
                            <th rowspan="1" colspan="1" class="text-center">Country</th>
                            <th rowspan="1" colspan="1" class="text-center">State</th>
                            <th rowspan="1" colspan="1" class="text-center">City</th>
                            <th rowspan="1" colspan="1" class="text-center">Pin Code</th>
                            <th rowspan="1" colspan="1" class="text-center">Role</th>
                            <th rowspan="1" colspan="1" class="text-center">Actions</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

