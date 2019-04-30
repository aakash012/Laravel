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
      .p{
        font-style: italic;
        font-weight: 200;
        font-family: sans-serif;
        color: coral;
      }
    </style>
  </head>
  @section('body')
  <body>
    <div id="about">
      <h1>Contact Us</h1>
      <p class="p" style="color: green;">Name: Aakash <br> E-mail: aakash012@live.com</p>

      <a href="/homepageCA">
        <p class="p">Click to get back to homepage</p>
      </a>
    </div>
  </body>
  @endsection
</html>
