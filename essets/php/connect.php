<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set("America/Sao_Paulo");
error_reporting(E_ALL);
 
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'local');
 
//Conecta com o MySQL usando PDO
function db_connect(){
    try{
		$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		return $pdo;
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $e){
		echo $e->getMessage();
		exit();
	}
}

//Ano da footer
$year = date('Y');

//Executa o banco de dados
$pdo = db_connect();

//Empty variable

$p_err = "";
$p_suc = "";

$c_error = "";
$c_sucess = "";

$team_err = "";
$team_suc = "";

$error = "";
$sucess = "";

$team_err = ""; 
$team_suc = "";
