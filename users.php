<?php
session_start();
if (isset($_SESSION['login'])) {
	if ($_SESSION['login'] == TRUE) {
?>
		<!DOCTYPE html>


					<html lang="es">
						<head>
							<meta charset="utf-8">
							<meta http-equiv="X-UA-Compatible" content="IE=edge">
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<meta name="description" content="">
							<meta name="author" content="">
							  <?php  include 'header.php'; ?>
							<title>Users</title>

							<link href="css/bootstrap.css" rel="stylesheet">

							<link rel="icon" href="images/favicon.png" type="image/x-icon" />
							<style type="text/css">
								body {
									padding-top: 20px;
								}
							</style>

						</head>

						<body>
							<div class="container">

								
								<p></p>
								<div class="panel panel-default">
									<!-- Default panel contents -->
									<div class="panel-heading">
										Usuarios Registrados
									</div>
									<div class="panel-body">
										<p></p>
									</div>

									<table class="table">
										<thead>
											<tr>
												<th>id</th>
												<th>name</th>
												<th>surname</th>
												<th>username</th>
												<th>Fecha de Registro</th>
												<th>Rol</th>
											</tr>
										</thead>
		<?php
		include 'sql.php';
		conectar();
		$users = getUsers();

		foreach ($users as $reg) {

			echo "<tbody>
                                 	<tr>
                              			<td>$reg[id]</td>
                              			<td>$reg[nombre]</td>
                              			<td>$reg[apellido]</td>
                              			<td>$reg[username]</td>
                              			<td>$reg[fecha]</td>
                              			<td>$reg[rol]</td>
                          			</tr>

							</tbody>";
		}
		?>
		</table>
													</div>
												</div>
												<!-- /container -->

												<script src="js/jquery.min.js"></script>
												<script src="js/bootstrap.min.js"></script>
												<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
												<script src="js/ie10-viewport-bug-workaround.js"></script>
											</body>
										</html>


		<?php

	}
} else {

	header('Location:login.php');

}

?>

