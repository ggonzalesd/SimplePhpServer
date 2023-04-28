<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TP Apache2</title>
</head>
<?php
	include_once ("conexion.php");
	include_once ("elements.php");
	$conn = CConexion::ConexionBD();
?>
<body>
	<header>
		<span>
			<h1>
				<a href='/'>ClotheStore.com</a>
			</h1>
		</span>
		<nav>
			<ul>
				<li>
					<a href="./users.php"><span>Users</span></a>
				</li>
				<li>
					<a href=""><span>Clothes</span></a>
				</li>
			</ul>
		</nav>
	</header>
	
	<div class='wrapper'>
		<div class='center-box'>
			<h2>Sistemas Operativos</h2>
			<h3>T2 | Capa Aplicación</h4>
			<h4>Integrantes</h6>
			<div class='members'>
				<p>Gonzales De La Cruz Grober Ericson</p>
				<p>Quispe Palacin Diego Eloy</p>
				<p>Castro Ataucusi Gleider Venancio</p>
			</div>
		</div>
	</div>

</body>
</html>
