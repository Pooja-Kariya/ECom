@extends('dashboard')
@section('content')
<div class="container mt-5">
    <form class="col-md-10 mx-auto" method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h1>Enter Products Details</h1>
        <div class="form-group"
            <label for="name" name="name">Name</label><br>
            <div>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}"><br>
            </div>
        </div>
        <div class="form-group"
            <label for="description" name="description">Description</label><br>
            <div>
                <input id="description" class="form-control" name="description" value="{{$product->description}}"><br>
            </div>
        </div>
        <div class="form-group"
            <label for="discount" name="discount">Discount</label><br>
            <div>
                <input type="text"  class="form-control" id="discount" name="discount" value="{{$product->discount}}"><br>
            </div>
        </div>
        <div class="form-group"
            <label for="price" name="price">Price</label><br>
            <div>
                <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}"><br>
            </div>
        </div>
        {{-- <div class="form-group"
            <label for="secret_code" name="secret_code">Secret Code</label><br>
            <div>
                <input type="text" class="form-control" id="secret_code" name="secret_code" value="{{$product->secret_code}}" ><br>
            </div>
        </div> --}}
        <div class="form-group mb-3">
            <label>Secret Code</label>
            <select  id="secret_code-dd" name="secret_code" class="form-control">
                <option value="">Secret Code</option>
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
            <img src="/images/{{$product->image}}" width="300px">
        </div>

        <div class="form-group">
            <button type="reset" class="btn btn-primary" name="reset" value="reset">Reset</button>
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        </div>

        {{-- <button>Submit</button> --}}
        {{-- <input type="button" class="btn btn-primary" value="Submit"> --}}
        </form>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      {{-- </body>
    </html> --}}

@endsection
