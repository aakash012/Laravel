<!DOCTYPE html>
<html lang="en" dir="ltr">
@extends('homepageCA')
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <style>
      h1{
        color: coral;
      }
      input{
        border: 0;
        background-color: green;
        color: white;
        padding: 8px;
        border-radius: 3px;
      }
    </style>
  </head>
  @section('body')
  <body>
    <div id="about">
      <h1>About Page</h1>
      <a href="/homepageCA">
        <input type="submit" id="home" value="Back to Homepage">
      </a>
    </div>
  </body>
  @endsection
</html>
