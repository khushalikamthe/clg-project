<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}


require_once("../db.php");

if(isset($_GET)) {

	//Delete builder using id and redirect
	$sql = "DELETE FROM builder WHERE id_company='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: builders.php");
		exit();
	} else {
		echo "Error";
	}
}