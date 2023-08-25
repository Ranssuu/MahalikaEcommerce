<?php
include_once("config.php");
$pid = $_GET['pid'];
$deleteQuery = $pdo->prepare("DELETE FROM products_tbl WHERE productID = :id");
$deleteQuery->bindParam(':id',$pid);
$deleteQuery->execute();
echo "<script>alert('Succesfully Deleted!')</script>";
echo "<script>window.open('Shop.php','_self')</script>";
?>