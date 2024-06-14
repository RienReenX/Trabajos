<?
define('usuario', 'root');
define('password', '');
define('HOST', 'localhost');
define('DATABASE', 'gastronomia');
try{
	$coneccion = new PDO("mysql:host=" .HOST.";dbname=" .DATABASE,usuario,password);

}catch(PDOException $e) {
	exit("error de conexion: " . $e->getMessage());
}

?>