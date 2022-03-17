@extends('dashboard')
@section('content')
<div class="container mt-5">
    <form class="col-md-10 mx-auto" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Enter Products Details</h1>
        @if (Session::has('success'))
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5>{!! Session::get('success') !!}</h5>
                    </div>
                </div>
            </div>
        @endif

            @if(session('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{session('error')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

        <div class="form-group"
            <label for="name" name="name">Name</label><br>
            <div>
                <input type="text" class="form-control" id="name" name="name" ><br>
            </div>
        </div>
        <div class="form-group"
            <label for="description" name="description">Description</label><br>
            <div>
                <input id="description" class="form-control" name="description"><br>
            </div>
        </div>
        <div class="form-group"
            <label for="discount" name="discount">Discount</label><br>
            <div>
                <input type="text"  class="form-control" id="discount" name="discount" ><br>
            </div>
        </div>
        <div class="form-group"
            <label for="price" name="price">Price</label><br>
            <div>
                <input type="text" class="form-control" id="price" name="price" ><br>
            </div>
        </div>
        {{-- <div class="form-group"
            <label for="secret_code" name="secret_code">Secret Code</label><br>
            <div>
                <input type="text" class="form-control" id="secret_code" name="secret_code" ><br>
            </div>
        </div> --}}

        <div class="form-group mb-3">
            <label>Secret code</label>
            <select  id="secret_code-dd" name="secret_code" class="form-control">
                <option value="">Select Secret Code</option>
                @foreach ($secrets as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <h5 class="card-title">Status</h5>
            <div>
                <select  id="status" name="status" class="form-control">
                    <option value="" class="option_color">Select Status</option>
                    <option>Active</option>
                    <option>Deactivate</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="image" name="image" class="form-label">Product Image</label><br>
            <input type="file" id="image" name="image" class="form-label"><br>
          </div>

        <div class="form-group">
            <button type="reset" class="btn btn-primary" name="reset" value="reset">Reset</button>
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        </div>

        {{-- <button>Submit</button> --}}
        {{-- <input type="button" class="btn btn-primary" value="Submit"> --}}
    </form>
</div>

@endsection
