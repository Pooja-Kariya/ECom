@extends('dashboard')
@section('content')
<form  class="col-md-10 mx-auto" action="{{route('roles.store')}}" method="post" >
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
            <div>
                <input type="text" class="form-control" id="name" name="name"/>
            </div>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
                <div>
                    <input type="text" class="form-control" id="slug" name="slug" />
                </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        </div>
</form>
@endsection
{{-- @extends('layouts.menus')
@section('content')
<form>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control is-valid" id="name"  required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="slug">Slug</label>
        <input type="text" class="form-control is-valid" id="slug"  required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
@endsection --}}
