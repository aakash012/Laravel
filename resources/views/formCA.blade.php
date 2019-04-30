@extends('layout.master')
@section('content')
<h1>Student Data</h1>
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
  Student Name: <input type="text" name="firstname" placeholder="Enter your name" required><br><br>
  Course: <input type="text" name="lastname" placeholder="Enter last name" required><br><br>
  E-mail: <input type="email" name="email" placeholder="Enter your email" required><br><br>
  <input type="submit" value="Submit" class="btn btn-primary">
</form>
@endsection
