<?php
include_once("config.php");
include_once("session.php");
$id = $_GET['pid'];
$viewQuery = $pdo->prepare("SELECT * FROM products_tbl WHERE productID = :id");
$viewQuery->bindParam(':id',$pid);
$viewQuery->execute();

// SELECTTTTTTTTTTTTTT
$productid = $_GET['pid']; // Get productID
$viewQuery = $pdo->prepare("SELECT * FROM products_tbl WHERE productID='$productid'");
$viewQuery->execute();

$quantity = 1;

// productImage, productName, productPrice
while ($rows = $viewQuery->fetch()) {
    $prodID = $rows['productID'];
    $prodCat = $rows['productCat'];
    $prodName = $rows['productName'];
    $prodPrice = $rows['productPrice'];
    $prodQty = $rows['productQty'];
    $prodDes = $rows['productDes'];
    $prodImg = $rows['productImg'];
    // $uID variable is from session.php


    // userID, productID, quantity, productImage, productName, productPrice
    $insertQuery = $pdo->prepare("INSERT INTO cart_tbl (userID, productID, productCat, productName, productPrice, productQty, productDes, productImg) 
    VALUES (:UI, :PI, :PC, :PN, :PP, :PQ, :PD, :PImg)"); // own variable name
    $insertQuery->bindParam(':UI', $uid);
    $insertQuery->bindParam(':PI', $prodID);
    $insertQuery->bindParam(':PC', $prodCat);
    $insertQuery->bindParam(':PN', $prodName);
    // $insertQuery->bindParam(':ctotalPrice',$price);
    $insertQuery->bindParam(':PP', $prodPrice);
    $insertQuery->bindParam(':PQ', $prodQty);
    $insertQuery->bindParam(':PD', $prodDes);
    $insertQuery->bindParam(':PImg', $prodImg);
    $insertQuery->execute();


    echo "<script>alert('Succesfully Added!')</script>";
    echo "<script>window.open('Index1.php','_self')</script>";
}
?>

