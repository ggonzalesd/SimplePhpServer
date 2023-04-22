<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
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
  <div class='items-user'>
	<?php
    if(isset($_GET['user']) && !empty($_GET['user'])) {
      $username = $_GET['user'];
      foreach(CConexion::getUser($conn, $username) as $user)
        ElementDraw::UserItem($user);
    } else {
      foreach(CConexion::getUsers($conn) as $row)
			  ElementDraw::UserItem($row);
    }
	?>
	</div>
  <div class='items-order'>
  <?php
  if(isset($_GET['user']) && !empty($_GET['user'])) {
    $username = $_GET['user'];
    foreach(CConexion::getOrderOf($conn, $username) as $order) {
      ElementDraw::OrderItem($order);
    }
  }
  ?>
  </div>
</body>
</html>