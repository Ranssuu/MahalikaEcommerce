<?php
session_start();

if(isset($_SESSION["uid"])){
	
	$uid = $_SESSION["uid"];
	
} else {
	header("location: login.php");
	die();
}
?>