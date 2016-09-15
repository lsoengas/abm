<?php $existe = false;?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php include 'header.php';?>
<title>Sing up</title>


    
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <style type="text/css">
      body {
        padding-top: 20px;
      }
    </style>


  </head>

  <body>
        <div class="container">

  <form class="" action ="setUsers.php" method="post" name="form1" autocomplete="off" >
        <h2 class="">Please sing up</h2>
        <label type="text" class="sr-only">Nombre</label>Nombre
        <input type="text" id="name" class="form-control" name="name" required autofocus>
        <p></p>
         <label type="text" class="sr-only">Apellido</label>Apellido
        <input type="text" id="surname" class="form-control" name="surname" required autofocus>
         <p></p>
         <label type="text" class="sr-only">Nombre de usuario</label>Nombre de usuario
        <input type="text" id="username" class="form-control" name="username" required autofocus>
        <p></p>

        <label for="inputPassword" class="sr-only">Password</label>Contraseña
        <input type="password" id="passwords" class="form-control" name="password" required>
         <p></p>
         <label type="text" class="sr-only">Rol</label>Rol
<?php
include "sql.php";
$sql = getRols();

echo "<select  class='form-control'  id='rol' name='rol'>";

foreach ($sql as $row) {

	echo "<option>$row[rol]</option>";

}

echo "</select>";
?>

        <div class="checkbox">
          <label>

          </label>
        </div>
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Registrar"/>
      </form>

        </div> <!-- /container -->



    
  </body>
</html>s