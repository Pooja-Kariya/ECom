@extends('dashboard')
@section('content')
        <div class="container mt-5">

        <form   method="post" action="{{route('secrets.update', $secret->id)}}">
            @method('POST')
            @csrf
        <h1>Enter secret Details</h1>

        <div class="mb-3 col-md-3">
            <label for="name" name="name">Name</label><br>
            <input type="text" id="name" name="name" value="{{$secret->name}}"><br>
        </div>
        <div class="mb-3 col-md-3">
            <label for="slug" name="slug">Slug</label><br>
            <input type="text" id="slug" name="slug" value="{{$secret->slug}}"><br>
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
