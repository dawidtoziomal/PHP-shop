<?php
	session_start();
	
	if (!isset($_SESSION["koszyk"])) {
		$_SESSION["koszyk"] = array();
	}
	
	$nazwa = $_GET["nazwa"];
	$cena = $_GET["cena"];
	
	$produkt = array("nazwa" => $nazwa, "cena" => $cena);
	array_push($_SESSION["koszyk"], $produkt);
	
	header("Location: koszyk.php");
	exit();
?>
