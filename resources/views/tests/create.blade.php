@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Test
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tests.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              {{ csrf_field() }}
              <label for="f_name">First Name:</label>
              <input type="text" class="form-control" name="f_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name :</label>
              <input type="text" class="form-control" name="last_name" />
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email" />
          </div>
          <div class="form-group">
              <label for="position">Position :</label>
              <input type="text" class="form-control" name="position" />
          </div>

          <div class="form-group">
              <label for="information">Information :</label>
              <input type="text" class="form-control" name="information"/>
          </div>

          <div class="form-group">
              <label class="col-md-4 text-right">Select Profile Image</label>
              <div class="col-md-8">
                  <input type="file" name="cv" />
              </div>
          </div>


          <div class="form-group">
              <label class="col-md-4 text-right">Select Certificate</label>
              <div class="col-md-8">
                  <input type="file" name="certificates" />
              </div>
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
