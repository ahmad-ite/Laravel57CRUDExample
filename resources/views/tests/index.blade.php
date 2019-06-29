@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
            <td>Last Name</td>
          <td>Email</td>
          <td>position</td>
            <td>information</td>
            <td>cv</td>
            <td>certificates</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tests as $test)
        <tr>
            <td>{{$test->id}}</td>
            <td>{{$test->f_name}}</td>
            <td>{{$test->last_name}}</td>
            <td>{{$test->email}}</td>
            <td>{{$test->position}}</td>
            <td>{{$test->information}}</td>

            <td>
                @if (!empty($test) && $test->cv)<img src="{{ URL::to('/') }}/images/{{ $test->cv }}" class="img-thumbnail" width="75" />


            @else
            @endif
            </td>
            <td>
            @if (!empty($test) && $test->certificates)
                <embed src="{{ URL::to('/') }}/files/{{ $test->certificates }}" class="file-thumbnail" width="75" />
            @else
            @endif
            </td>
        </tr>
        @endforeach

        <a href="{{ route('tests.create')}}" class="btn btn-primary">Create</a>
    </tbody>
  </table>
<div>
@endsection
