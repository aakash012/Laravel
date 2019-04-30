@extends('layout.master')
@section('content')
<h1>Student Details</h1>
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
  First Name: <input type="text" name="name" placeholder="Enter Name" required>
  Enter Course: <input type="text" name="course" placeholder="Enter Course Name" required>
  Enter E-mail: <input type="email" name="email" placeholder="Enter E-mail" required><br><br>
  <input type="submit" value="Enter" class="btn btn-primary">
</form>
@endsection
