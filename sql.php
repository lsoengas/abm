<?php
////pdo

function conectar() {
	//require_once 'mysql-login.php';
	$servername = 'localhost';
	$username   = 'root';
	$password   = 'nano';
	$database   = 'test-db';

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Connected successfully";
	}
	 catch (PDOException $e) {
		echo "Connection failed: ".$e->getMessage();
	}
	return $conn;
}


//funcion de login 
//function login
function login($name,$pass,$session) {
	$conn = conectar();

  if ((isset($name))&&(isset($pass))&&(isset($session))) {

	$sql = $conn->prepare("select * from users where username= ? and password= md5(?); ");
	$sql->bindParam("1", $name);
	$sql->bindParam("2", $pass);
	$sql->execute();

	if ($sql->rowCount() == 0) {

		return false;

	} else {

		$conn = null;
		$sql  = null;
		return true;
	}
       
  }
}





function getUsers() {

	$conn = conectar();
	$sql = $conn->prepare('SELECT u.id AS id,
								 u.first_name AS nombre,
								 u.surname AS apellido,
								 u.username AS username,
							 	 u.start_date AS fecha,
							  	 r.description AS rol 
							FROM users u LEFT JOIN roles r ON r.id=u.role;');
	
	$sql->execute();
	return $sql;
	$conn = null;

}



function setTasks() {

	$conn  = conectar();
	$tasks = $_POST['task'];
	$iduser = $_POST['usertask'];
	

	$sql = $conn->prepare('INSERT INTO tasks (description, id_users, date_start)
	VALUES (?,?,NOW());
    ');
	$sql->bindparam("1", $tasks);
	$sql->bindparam("2", $iduser);

		
	
	$sql->execute();
     echo $_POST['usertask'];
	header('Location:taksRegistrer.php');

}

function getTasks() {
	$conn = conectar();
	$sql  = $conn->prepare("SELECT	t.id as id, u.first_name AS nombre, u.surname AS apellido, t.id AS id, t.description AS tDescripcion,ts.description AS estado,t.date_start AS fecha_de_inicio,t.date_finish AS fecha_finalizacion FROM tasks t
							LEFT JOIN users u ON u.id = t.id_users
							LEFT JOIN task_state ts ON ts.id = t.id_state;
						   ");
	$sql->execute();


	return $sql;
	$conn = null;

}

function getEncargados() {
	$conn = conectar();
	$sql  = $conn->prepare(' SELECT id as id, first_name AS nombre,surname AS apellido  FROM users;');
	$sql->execute();

	return $sql;
	$conn = null;
}

function finishTasks($id) {
	$conn = conectar();
	$sql  = $conn->prepare("UPDATE tasks t SET t.id_state = 2 ,t.date_finish = NOW() where t.id=$id");
	$sql->execute();
	$conn = null;
	header('Location:taksRegistrer.php');

}



function getRols() {
	$conn = conectar();
	$sql  = $conn->prepare('SELECT description as rol FROM roles;');
	$sql->execute();

	return $sql;
	$conn = null;

}

function getIdRols() {

	$conn = conectar();
	$role = $_POST['rol'];
	$sql  = $conn->prepare("SELECT id AS id  FROM roles where description =?;");
	$sql->bindParam("1", $role);
	$sql->execute();

	return $sql;
	$conn = null;

}

function setUsers() {

	$conn     = conectar();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$surname  = $_POST['surname'];
	$name     = $_POST['name'];
	$rol      = getIdRols();

	$sql = $conn->prepare("INSERT INTO users (first_name,surname,username,password,start_date,role) VALUES (?,?,?,MD5(?),NOW(),?);");
	$sql->bindParam("1", $name);
	$sql->bindParam("2", $surname);
	$sql->bindParam("3", $username);
	$sql->bindParam("4", $password);

	foreach ($rol as $reg) {

		$sql->bindparam("5", $reg[id]);
		breack;
	}

	$sql->execute();

	header('Location:users.php');

}


function getTasksState() {
 
 $conn     = conectar();
 $sql = $conn->prepare("SELECT id AS id, description AS estado FROM task_state;");
 $sql->execute();

return $sql;
}


?>
