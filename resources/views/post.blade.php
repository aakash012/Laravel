@extends('layout.master')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Share
        </div>
        <div class="panel-body">
          <form action="{{url('postnew')}}" method="post">
            {{csrf_field()}}
            @foreach(range(0,4) as $x)
            <div class="form-group{{$errors->has('emails.'.$x)?'has-error':''}}">
              <label for="email-{{$x}}" class="control-label">Email #{{$x}}</label>
              <input type="text" name="emails[]" id="email-{{$x}}" class="form-control" value="{{old('emails.'.$x)}}">
            </div>
            @if($errors->has('emails.'.$x))
            <span class="help-block">
              {{$errors->first('emails.'.$x)}}
            </span>
            @endif
            @endforeach
            <div class="form-group">
              <input type="submit" name="" value="Send" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
