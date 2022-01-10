@extends('dashboard')
@section('content')
<div class="container mt-5">
    <form action="{{route('users.store')}}" method="post">
    @method('POST')
    @csrf
    <h1>Enter Users Details</h1>
        <div class="form-group">
            <label for="name" name="name">Name</label><br>
            <div>
                <input type="text" class="form-control" id="name" name="name"  ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="email" name="email">Email</label><br>
            <div>
                <input id="email" class="form-control" name="email"><br>
            </div>
        </div>
        <div class="form-group">
            <label for="password" name="password">Password</label><br>
            <div>
                <input type="text" class="form-control" id="password" name="password" ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="mobile" name="mobile">Mobile Number</label><br>
            <div>
                <input type="text" class="form-control" id="mobile" name="mobile" ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="address" name="address">Address</label><br>
            <div>
                <input type="text" class="form-control" id="address" name="address" ><br>
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="country" name="country">Country</label><br>
            <div>
                <input type="text" class="form-control" id="country" name="country" ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="state" name="state">State</label><br>
            <div>
                <input type="text" class="form-control" id="state" name="state" ><br>
            </div>
        </div>
        <div class="form-group">
            <label for="city" name="city">City</label><br>
            <div>
                <input type="text" class="form-control" id="city" name="city" ><br>
            </div>
        </div> --}}
        <div class="form-group mb-3">
            <label>Country</label>
            <select  id="country-dd" name="country_id" class="form-control">
                <option value="">Select Country</option>
                @foreach ($countries as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label>State</label>
            <select id="state-dd" name="state_id" class="form-control">
                <option value="">Select State</option>
            </select>
        </div>
        <div class="form-group">
            <label>City</label>
            <select id="city-dd" name="city_id" class="form-control">
                <option value="">Select City</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pincode" name="pincode">Pin Code</label><br>
            <div>
                <input type="text" class="form-control" id="pincode" name="pincode" ><br>
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="role_id" name="role_id">Role ID</label><br>
            <div>
                <input type="text" class="form-control" id="role_id" name="role_id"><br>
            </div>
        </div> --}}

        <div class="form-group mb-3">
            <label>Role</label>
            <select  id="role_id-dd" name="role_id" class="form-control">
                <option value="">Select role ID</option>
                @foreach ($roles as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                @endforeach
            </select>
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
