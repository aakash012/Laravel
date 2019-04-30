@extends('layout.master')

@section('title')
About us
@show

@section('body')
<h1>This is my Form Page</h1>
<input type="text" name="">
{{Form::text('price')}}
{{Form::text('price','50$',['class'=>"form-control",'placeholder'=>'Give a price'])}}

{{Form::number('level',10,['max'=>20,'min'=>-5])}}
