@extends('dashboard')
@section('content')
<div class="container mt-5">
    <form class="col-md-10 mx-auto" action="{{route('products.store')}}" method="post">
        @csrf
        <h1>Enter Products Details</h1>
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

        <div class="form-group"
            <label for="status" name="status">Status</label><br>
            <div>
            <input type="text" class="form-control" id="status" name="status" ><br>
            </div>
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
