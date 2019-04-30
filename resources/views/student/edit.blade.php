@extends('layout.master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Edit Record</h1>
    @if(count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{action('studentController@update',$id)}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PATCH"/>
      <div class="form-group">
        <input type="text" name="id" class="form-control" value="{{$student->id}}">
      </div>
      <div class="form-group">
        <input type="text" name="firstname" class="form-control" value="{{$student->firstname}}" placeholder="Enter first name">
      </div>
      <div class="form-group">
        <input type="text" name="lastname" class="form-control" value="{{$student->lastname}}" placeholder="Enter first name">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Edit" name="btn">
      </div>
    </form>
  </div>
</div>
@endsection
