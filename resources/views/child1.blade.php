@extends('layout.master')
<h1>Child layout</h1>
@section('content')
{{$data}}
{!!$data!!}
<?= $data ?>
@{{$data}}
<br>
  {{date('d m y')}}
<br>
