<?php 
	session_start();

	$_SESSION["login"]=false;
	$_SESSION["loginMensage"]="usted a cerrado su session";
	$_SESSION["user"]=false;
 	
 	header("Location:login.php");
 ?>