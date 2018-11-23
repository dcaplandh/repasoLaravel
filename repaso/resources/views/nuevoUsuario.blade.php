<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link href="/css/estilos.css" rel="stylesheet"/>
    <form method="post" action="">
      <h2>Nuevo usuario:</h2>
      @csrf
      <input type="text" name="username"/>
      <input type="submit" value="Registrarse" />
    </form>
  </body>
</html>
