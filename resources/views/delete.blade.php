<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
  </head>
  <body>
    <form action="re/abc" method="post">
      {{method_field('DELETE')}}
      {{csrf_field()}}
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
