<?php 
class DBHelper {
	
	private static $con;

	private static function connect() {
		require_once "db_config.php";
		try {        
		    self::$con = new PDO('mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname='.$database, $username, $password);
		}
		catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage();
			die();
		}
	}
	public static function crearCuenta($data = array())
	{
		self::connect();
		$sql = "INSERT INTO usuarios (email, nombre, apellido, pass) 
                    VALUES ('$email','$nombre','$apellido','$password')";
        self::$con->exec($sql);
	}
}