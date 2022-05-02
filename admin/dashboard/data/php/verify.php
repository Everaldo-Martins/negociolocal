<?php
	
    //Include database(news/news)
	include_once('../../essets/php/connect.php');

	$dir = '../../essets/img/comercio/';

	$dirTeam = '../../equipe/fotos/';

	$con_dir = './data/img/user/';

	$pdo = db_connect();

	if (!isset($_SESSION)) session_start();

	$level = 1;
	
	if(!isset($_SESSION['user_id']) OR ($_SESSION['user_level'] != $level)){
		session_destroy();
		header("Location: exit.php"); 
		exit; 
	}

    $year = date('Y');
?>