<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>ELIMINACION DE ALUMNO</title>
</head>

<body class="justify-content-center align-items-center">
<div class="container p-5 justify-content-center text-center">
  <header>
      <h2 style="text-align:center;">ELIMINANDO ALUMNO</h2>
    </header>
    <form action="validar_eliminar.php" method="POST">
      <label for="">Ingrese matricula: <input type="text" name="Matricula" id=""></label>
      <input class="btn btn-danger" type="submit" value="Eliminar">
      <input class="btn btn-primary" type="button" name="Menú" onclick="location.href='../Alumnos/menu_alumnos.php'"
      value="Menú">
    </form>
</div>
</body>
</html>