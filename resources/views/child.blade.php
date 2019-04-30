@extends('layout.master')

@section('title','Page')

@section('sidebar')
  @parent
  <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>This is my content.</p>
@endsection

@section('another')
<p>This is another section</p>
@endsection
