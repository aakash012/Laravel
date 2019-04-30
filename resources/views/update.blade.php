<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>update</title>
  </head>
  <body>
    <form action="re/abc" method="post">
      @method('PUT')
      {{csrf_field()}}
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
