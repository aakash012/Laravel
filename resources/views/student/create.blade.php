@extends('layout.master')
@section('content')
<h1>Add data</h1>
@if(count($errors)>0)
<ul>
  @foreach($errors->all as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif

@if($message=Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>
@endif
<form action="{{url('student')}}" method="post">
  {{csrf_field()}}
  First Name: <input type="text" name="firstname" placeholder="Enter first name"><br><br>
  Last Name: <input type="text" name="lastname" placeholder="Enter last name"><br><br>
  <input type="submit" value="Submit" class="btn btn-primary">
</form>
@endsection
