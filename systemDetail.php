<?php 
  session_start(); //inicializo la session

  //ahora verifico que el usuario este logueado
  if(isset($_SESSION["login"])){
    if(!$_SESSION["login"]){
      header("Location:login.php");
   }   
  }else{
    // si no esta logueado lo mando a loguearse 
    header("Location:login.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="60">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="shortcut icon" href="images/logoTitle.png" type="image/x-icon"/>
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
    
    <?php include_once 'functions.php'; ?>
    
    <title>Detalles</title>
</head>
<body>

    <ul class="nav nav-tabs">
        <li role="presentation" ><a href="#">Usuarios</a></li>
        <li role="presentation" ><a href="dashboard.php">Dashboard</a></li>
        <li role="presentation" ><a href="#">Agregar Usuarios</a></li>
        <li role="presentation"><a href="logout.php">Cerrar Sesion</a></li>
      </ul>

<div class="panel panel-default">
    <div class="panel-body">
    <p>En la siguiente tabla se encuentran los datos del Sistema</p>
  </div>
  <!-- Table -->
  <table class="table">
        <thead>
      <tr>
        <td>
          Information
        </td>
        <td>
          Detail
        </td>
      </tr>
    </thead>
      <tr>
        <td>
          Date Time
        </td>
        <td>
          <?php getDateTime();?>
        </td>
      </tr>
      <tr>
        <td>
          Free Space
        </td>
        <td>
          <?php getDiskSpace();?>
        </td>
      </tr>
      <tr>
      <td>
        OS information
      </td>
      <td>
        <?php getSystemInfo();?>
      </td>
      </tr>
      <tr>
      <td>
        More info
      </td>
      <td>
        <?php getPcInformation();?>
      </td>
      </tr>
      <tr>
      <td>
        Memory usage
      </td>
      <td>
        <?php getMemoryUsage();?>
      </td>
      </tr>
      <tr>
      <td>
        Owner
      </td>
      <td>
        <?php getUserSystem();?>
      </td>
      </tr>
         <tr>
      <td>
        Usuario Actual
      </td>
      <td>
        <?php echo $_SESSION["user"];?>
      </td>
      </tr>
  </table>
</div>
</body>
</html>
