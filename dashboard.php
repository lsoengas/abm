<?php 
  session_start(); //inicializo la session

  //ahora verifico que el usuario este logueado
  if(isset($_SESSION["login"])){
    if(!$_SESSION["login"]){
      header("Location:login.php");
   }   
  }else{
    header("Location:login.php");
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="60">
    <!--<link rel="stylesheet" href="stylesheets/style.css">-->
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

    <title>dashboard</title>
  </head>
  <body>

      <ul class="nav nav-tabs">
        <li role="presentation" ><a href="users.php">Usuarios</a></li>
        <li role="presentation" ><a href="systemDetail.php">Detalles del Sistema</a></li>
        <li role="presentation" ><a href="#">Agregar Usuarios</a></li>
        <li role="presentation"><a href="logout.php">Cerrar Sesion</a></li>
      </ul>

  </body>
</html>
