@extends('dashboard')
@section('content')
<form method="post" action="{{route('roles.update', $role->id)}}" class="col-md-10 mx-auto">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
            <div>
                <input type="text" class="form-control" id="name" name="name"  value="{{$role->pincode}}"/>
            </div>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
                <div>
                    <input type="text" class="form-control" id="slug" name="slug"  value="{{$role->slug}}" />
                </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Sign up</button>
        </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      {{-- </body>
    </html> --}}

@endsection
