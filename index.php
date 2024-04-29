<?php   
    
    session_start();

    require('vendor/autoload.php');
    define("PUBLIC_ASSETS_CSS", "http://localhost:8000/AMCyberEducation/public/assets/css/");
    define("ROUTE", "http://localhost:8000AMCyberEducation/?url=");

    (new AMCyber\Application())->run();

    define('HOST','localhost');
	define('DB','fdffd');
	define('USER','root');
	define('PASS','');

	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo '<h1>erro ao conectar</h1>';
	}
?>