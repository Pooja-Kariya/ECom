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
                <i class="fas fa-key icon-gradient bg-ripe-malin"></i>
            </div>
            <div>Manage Secrets
                <div class="page-title-subheading">Manage the data or details of the existing secret.</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-header">Manage Secrets
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    <button type="button" data-clipboard-target="#example" class="clipboard-trigger btn btn-primary">Copy</button>&nbsp;
                    <a href="{{route('secrets.export_format','Csv')}}" class="btn btn-primary">csv</a>&nbsp;
                    <button onclick="downloadPDFWithBrowserPrint()" class="btn btn-primary">Pdf</button>&nbsp;
                    <a href="{{route('secrets.export')}}" class="btn btn-primary">Excel</a>&nbsp;
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{route('secrets.import')}}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="import"/>
                    <input type="submit" class="btn btn-sm btn-primary" value="Import File"/>
                </form>
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Slug</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($secret as $secret)
                        <tr>
                            <td class="text-center">{{$secret->id}}</td>
                            <td class="text-center">{{$secret->name}}</td>
                            <td class="text-center">{{$secret->slug}}</td>
                            <td class="text-center">
                                <a class="btn btn-primary" style="width:70px;" href="{{route('secrets.edit',$secret->id)}}" role="button">Edit</a>
                                <a class="btn btn-primary" style="width:70px;" href="{{route('secrets.delete',$secret->id)}}" role="button">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1" class="text-center">ID</th>
                            <th rowspan="1" colspan="1" class="text-center">Name</th>
                            <th rowspan="1" colspan="1" class="text-center">Slug</th>
                            <th rowspan="1" colspan="1" class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
