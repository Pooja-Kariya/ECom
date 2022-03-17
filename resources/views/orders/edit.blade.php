@extends('dashboard')
@section('content')
        <div class="container mt-5">

        <form   method="post" action="{{route('orders.update', $order->id)}}">
            @method('POST')
            @csrf
        <h1>Enter Order Details</h1>
        <div class="mb-3 col-md-3">
            <label for="user_id" name="user_id">Product ID</label><br>
            <input type="text" id="user_id" name="user_id" value="{{$order->user_id}}" ><br>
        </div>

        <div class="mb-3 col-md-3">
            <label for="product_id" name="product_id">Product ID</label><br>
            <input type="text" id="product_id" name="product_id" value="{{$order->product_id}}" ><br>
        </div>
        <div class="mb-3 col-md-3">
            <label for="price" name="price">Price</label><br>
            <textarea id="price" name="price" value="{{$order->price}}" ></textarea><br>
        </div>
        <div class="mb-3 col-md-3">
            <label for="tax" name="tax">Tax</label><br>
            <input type="text" id="tax" name="tax" value="{{$order->tax}}"><br>
        </div>
        <div class="mb-3 col-md-3">
            <label for="delivery_charges" name="delivery_charges">Delivery charges</label><br>
            <input type="text" id="delivery_charges" name="delivery_charges" value="{{$order->delivery_charges}}"><br>
        </div>
        <div class="mb-3 col-md-3">
            <label for="quantity" name="quantity">Quantity</label><br>
            <input type="text" id="quantity" name="quantity" value="{{$order->quantity}}"><br>
        </div>
        <div class="mb-3 col-md-3">
            <label for="total" name="total">Total</label><br>
            <input type="text" id="total" name="total" value="{{$order->total}}" ><br>
        </div>
        <div class="form-group">
            <h5 class="card-title">Status</h5>
            <div>
                <select  id="status" name="status" class="form-control">
                    <option value="" class="option_color">Select Status</option>
                    <option>Ordered</option>
                    <option>Unordered</option>
                </select>
            </div>
        </div>
        <div class="mb-3 col-md-3">
            <label for="tracking_number" name="tracking_number">Tracking number</label><br>
            <input type="text" id="tracking_number" name="tracking_number" value="{{$order->tracking_number}}"><br>
        </div>
        <input type="reset" value="Reset">

        <button>Submit</button>
        {{-- <input type="button" class="btn btn-primary" value="Submit"> --}}
        </form>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      {{-- </body>
    </html> --}}

@endsection
