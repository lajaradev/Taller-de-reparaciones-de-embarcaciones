<?php
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	if($usuario == "admin" && $password == "1234")
	{
		session_start();
		$_SESSION["autentificado"] = 1;
		header("Location: menu_inicial.php");
	}
	else
	{
		header("Location: login.html");
	}
?>