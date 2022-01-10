@extends('dashboard')
@section('content')
<form method="post" action="{{route('transactions.update', $transaction->id)}}" class="col-md-10 mx-auto">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="name">User Id</label>
            <div>
                <input type="text" class="form-control" id="user_id" name="user_id"  value="{{$transaction->user_id}}"/>
            </div>
        </div>
        <div class="form-group">
            <label for="order_id">Order Id</label>
                <div>
                    <input type="text" class="form-control" id="order_id" name="order_id"  value="{{$transaction->order_id}}" />
                </div>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
                <div>
                    <input type="text" class="form-control" id="type" name="type"  value="{{$transaction->type}}" />
                </div>
        </div>
        <div class="form-group">
            <label for="mode">Mode</label>
                <div>
                    <input type="text" class="form-control" id="mode" name="mode"  value="{{$transaction->mode}}" />
                </div>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
                <div>
                    <input type="text" class="form-control" id="status" name="status"  value="{{$transaction->status}}" />
                </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      {{-- </body>
    </html> --}}

@endsection
