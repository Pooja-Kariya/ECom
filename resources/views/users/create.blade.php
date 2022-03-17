@extends('dashboard')
@section('content')
<div class="container mt-5">
    <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf

        {{-- @if(session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>&nbsp;&nbsp;
                <div><strong>{{session('success')}}</strong></div>
            </div><br>
        @endif --}}

        {{-- @if (count($errors) > 0)
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Error!</h4>
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif --}}

        {{-- @if (count($errors) < 0)
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Success!</h4>
                        @foreach ($success->all() as $success)
                        {{ $success }} <br>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif --}}



        <h1>Enter Users Details</h1>

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

        @if (Session::has('errors'))
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5>{!! Session::get('errors') !!}</h5>
                    </div>
                </div>
            </div>
        @endif

        <div class="form-group">
            <label for="name" name="name">Name</label><br>
            <div>
                <input type="text" class="form-control" id="name" name="name"><br>
            </div>
        </div>

        <div class="form-group">
            <label for="email" name="email">Email</label><br>
            <div>
                <input id="email" class="form-control" name="email" ><br>
            </div>
        </div>

        <div class="form-group">
            {{-- <label for="password" name="password">Password</label><br>
            <div>
                <input type="password" class="form-control" id="pass_log_id" name="password"><span
                    toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span><br>
            </div> --}}
            <label for="password" name="password">Password</label><br>
            <input type="password" id="password" class="form-control">

            <input type="checkbox" onclick="myFunction()">Show Password

        </div>

        <div class="form-group">
            <label for="mobile" name="mobile">Mobile Number</label><br>
            <div>
                <input type="text" class="form-control" id="mobile" name="mobile"><br>
            </div>
        </div>

        <div class="form-group">
            <label for="address" name="address">Address</label><br>
            <div>
                <input type="text" class="form-control" id="address" name="address"><br>
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="country" name="country">Country</label><br>
            <div>
                <input type="text" class="form-control" id="country" name="country"><br>
            </div>
        </div>
        <div class="form-group">
            <label for="state" name="state">State</label><br>
            <div>
                <input type="text" class="form-control" id="state" name="state"><br>
            </div>
        </div>
        <div class="form-group">
            <label for="city" name="city">City</label><br>
            <div>
                <input type="text" class="form-control" id="city" name="city"><br>
            </div>
        </div> --}}
        <div class="form-group mb-3">
            <label>Country</label>
            <select id="country-dd" name="country_id" class="form-control">
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
                <input type="text" class="form-control" id="pincode" name="pincode"><br>
            </div>
        </div>

        <div class="form-group mb-3">
            <label>Role</label>
            <select id="role_id-dd" name="role_id" class="form-control">
                <option value="">Select role ID</option>
                @foreach ($roles as $data)
                <option value="{{$data->id}}">
                    {{$data->name}}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" name="image" class="form-label">User Image</label><br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

@endsection
