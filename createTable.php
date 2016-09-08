<?php 

    include_once 'functions.php';
    
	$ancho=$_REQUEST["ancho"];
	$alto=$_REQUEST["alto"];	
	$id=$_REQUEST["id"];
 
    create_table($id,$ancho,$alto);

 ?>