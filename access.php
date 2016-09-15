<?php 
	session_start();

	//include_once 'functions.php';
	include_once 'sql.php';
	$name=$_REQUEST["user"];
	$pass=$_REQUEST["pass"];	
	$session=$_REQUEST["session"];

	if(login($name,$pass,$session)){
		$_SESSION["login"]=true;
		$_SESSION["user"]=$name;
	}else{

		$_SESSION["login"]=false;
		$_SESSION["loginMensage"]=" Tus credenciales son invalidas";
	}

	header("Location:login.php");
 ?>