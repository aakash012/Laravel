<html>
  <body>
    @extends('layout.master')
    <?php
      echo Form::open(array('url'=>'foo/bar','method'=>'post'));
      echo Form::token();
      echo Form::label('username','Username');
      echo Form::text('username','Username');
      echo '<br/>';

      echo Form::label('email','E-mail Address');
      echo Form::text('email','example@gmail.com');
      echo '<br/>';

      echo Form::label('password','Password');
      echo Form::password('password');
      echo '<br/>';

      echo Form::label('checkbox','Checkbox');
      echo Form::checkbox('name','value');
      echo '<br/>';

      echo Form::label('radio','Radio');
      echo Form::radio('name','value');
      echo '<br/>';


     ?>
  </body>
</html>
