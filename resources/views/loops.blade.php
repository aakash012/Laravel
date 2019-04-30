{{--This comment will not be in the rendered HTML--}}

{{--Conditional Directives--}}

{{--If Statement--}}
@if (count($records)===1)
  I have one record!
@elseif (count($records)>1)
  I have multiple records!
@else
  I have no records!
@endif
<br><br>

{{--for loop--}}
@for ($i=0;$i < 10;$i++)
  The currrent value is {{$i}} <br>
@endfor
<br>

{{--foreach--}}
@foreach ($users as $user)
  <p>This is user {{$user}}</p>
@endforeach

{{--Forelse--}}
@forelse($users as $user)
  <li>{{$user}}</li>
@empty
  <p>No users</p>
@endforelse
<br>

{{--While loop--}}
@while ($num!=10)
{{$num}}
<?php $num=$num+1 ?>
@endwhile
<br><br>

{{--Switch--}}
<?php $j=1; ?>
@switch($j)
  @case(1)
    <?php echo "Switch case 1"; ?>
    @break
  @case(2)
    <?php echo "Switch case 2"; ?>
    @break
  @default
    <?php echo "Switch case default"; ?>
@endswitch
<br>

{{--Include--}}
@include('child')
<br>

{{--isset--}}
@isset($name)
  {{$name}} <p> is defined and is not null...</p>
@endisset
