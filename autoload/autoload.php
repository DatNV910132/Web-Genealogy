<?php
	session_start();
	require_once __DIR__. "/../libraries/database.php";
	require_once __DIR__. "/../libraries/function.php";

	$db = new database;

	define("ROOT", $_SERVER['DOCUMENT_ROOT'] . "/WebPhaHe/public/uploads/")
?>