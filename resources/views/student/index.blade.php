@extends('layout.master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1 align="center">Student Data</h1>
    @if($message=Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
    @endif
    <div align="right">
      <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
    </div>
    <table class="table table-bordered">
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($students as $row)
      <tr>
        <td>{{$row['firstname']}}</td>
        <td>{{$row['lastname']}}</td>
        <td> <a href="{{action('studentController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><form class="delete_form" action="{{action('studentController@destroy',$row['id'])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
<script type="text/javascript">
  $('.delete_form').on('submit',function(){
    if(confirm("Are you sure you want to delete it?"))
    {
      return true;
    }
    else {
      return false;
    }
  })
</script>
@endsection
