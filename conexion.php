<?php

class CConexion {
	static function ConexionBD() {
		$host = "localhost";
		$dbname = "osjob";
		$username = "postgres";
		$password = 'grobergonza';

		try {
			$conn = new PDO("pgsql:host=$host; dbname=$dbname", $username, $password);
      return $conn;
		} catch(PDOException $exp) {
			return null;
		}
	}

	static function getUsers($conn) {
		return $conn->query('SELECT * from users');
	}

	static function getUser($conn, $username) {
		return $conn->query("SELECT * from users u WHERE u.username = '$username'");
	}

	static function getOrderOf($conn, $username) {
		return $conn->query("SELECT o.id, o.paid, o.dni_assistant, o.orderd_at, sum(oc.amount * c.price) as total, sum(oc.amount) as counts from users u join orders o on u.dni = o.dni_user join order_clothes oc on oc.id_order = o.id join clothes c on c.id = oc.id_clothes where u.username = '$username' group by o.id");
	}
}

?>