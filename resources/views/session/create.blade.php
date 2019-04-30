<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create a project</title>
  </head>
  <body>
    <form action="/projects" method="post">
      @csrf
      <div>
        <input type="text" name="title" placeholder="Project name">
      </div>
      <div>
        <textarea name="description" placeholder="describe your project"></textarea>
      </div>
      <div>
        <button type="submit">Create Project</button>
      </div>
    </form>
  </body>
</html>
