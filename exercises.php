<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>crear tabla</title>
</head>
<body>
	<form action="createTable.php" method="GET" >
		<table>
			<tr>
				<td>Ancho de tabla</td>
				<td><input type="text" name="ancho" value="0"></input></td>
			</tr>
			<tr>
				<td>Alto de Tabla</td>
				<td><input type="text" name="alto" value="0"></input></td>
			</tr>
			<tr>
				<td>id de la tabla</td>
				<td><input type="text" name="id" value="0"></input></td>
			</tr>
			<tr>
				<td colspan="2" ><input type="submit" name="crearTabla" value="crear"></input></td>
			</tr>
		</table>
	</form>
</body>
</html>