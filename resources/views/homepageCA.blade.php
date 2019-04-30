<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
        background-color: lightblue;
        font-family: sans-serif;
      }
      ul{
        display: flex;
        flex-direction: column;
        
      }
    </style>
  </head>
  <body>
    <br>@section('navbar')
    <div class="container">
      <div>
        <ul class="nav">
          <li>
            <a href="/homepageCA">Home</a>
          </li>
          <li>
            <a href="{{route('aboutCA')}}">About</a>
          </li>
          <li>
            <a href="{{route('contactCA')}}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
    @yield('body')
  </body>
</html>
