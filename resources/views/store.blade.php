<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form</title>
  </head>
  <body>
    <form action="re" method="post">
      {{csrf_field()}}
      <input type="text" name="text"><br>
      <input type="submit" value="submit">
    </form>
  </body>
</html>
