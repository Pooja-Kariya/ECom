@extends('dashboard')
@section('content')
<div class="container mt-5">
    <form action="{{route('user.update',$user->id)}}" method="post">
    @method('POST')
    @csrf
    <h1>Enter Users Details</h1>
        <div class="form-group">
            <label for="name" name="name">Name</label><br>
            <div>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="email" name="email">Email</label><br>
            <div>
                <input id="email" class="form-control" name="email"value="{{$user->email}}"><br>
            </div>
        </div>
        <div class="form-group">
            <label for="password" name="password">Password</label><br>
            <div>
                <input type="text" class="form-control" id="password" name="password"value="{{$user->password}}" ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="mobile" name="mobile">Mobile Number</label><br>
            <div>
                <input type="text" class="form-control" id="mobile" name="mobile"value="{{$user->mobile}}" ><br>
            </div>
        </div>



        <div class="form-group mb-3">
            <select  id="country-dd" name="country" class="form-control" value="{{$user->country}}">
                <option value="">Select Country</option>
                @foreach ($countries as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <select id="state-dd" name="state" class="form-control" value="{{$user->state}}">
            </select>
        </div>
        <div class="form-group">
            <select id="city-dd" name="city" class="form-control" value="{{$user->city}}">
            </select>
        </div>


        {{-- <div class="form-group">
            <label for="country" name="country">Country</label><br>
            <div>
                <input type="text" class="form-control" id="country" name="country" value="{{$user->country}}"><br>
            </div>
        </div>
        <div class="form-group">
            <label for="state" name="state">State</label><br>
            <div>
                <input type="text" class="form-control" id="state" name="state"value="{{$user->state}}" ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="city" name="city">City</label><br>
            <div>
                <input type="text" class="form-control" id="city" name="city"value="{{$user->city}}" ><br>
            </div>
        </div> --}}
        
        <div class="form-group">
            <label for="pincode" name="pincode">Pin Code</label><br>
            <div>
                <input type="text" class="form-control" id="pincode" name="pincode" value="{{$user->pincode}}"><br>
            </div>
        </div>
        <div class="form-group">
            <label for="role_id" name="role_id">Role ID</label><br>
            <div>
                <input type="text" class="form-control" id="role_id" name="role_id"value="{{$user->role_id}}" ><br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
