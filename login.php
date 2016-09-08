<?php 
	session_start();
	
	//verifico que el usuario este logueado
	if(isset($_SESSION["login"])){
	
		if($_SESSION["login"]==true)
			header("Location:dashboard.php");

	}else{

		$_SESSION["login"]=false;
	}


?>
<!DOCTYPE html>
<html lang="en">
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
	<title>Login</title>

</head>
<body class="html">

<?php 
	if(isset($_SESSION["loginMensage"])){
		echo '<div id="msgError">';
		echo $_SESSION["loginMensage"];
		echo "</div>";
	}
?>

   <div class="container">

      <form class="form-signin" action="access.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">User</label>
        <input type="text" class="form-control" placeholder="Username" name="user" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="session">Sign in</button>
      </form>

    </div> <!-- /container -->

</body>
</html>
