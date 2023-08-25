<?php
include_once("config.php");

/* Add Product */

if(isset($_POST['Add'])){
	$PCat = $_POST['prodCat'];
	$PName = $_POST['prodName'];
	$PPrice = $_POST['prodPrice'];
	$PQty = $_POST['prodQty'];
	$PDes = $_POST['prodDes'];

    // image process
    // changable lang diot is yung productpic
    $profile = $_FILES['prodImg']['name'];
    $tempName = $_FILES['prodImg']['tmp_name'];
    $size = $_FILES['prodImg']['size'];

    //UPLOAD PATH //external  folder to kung saan ma sasave yung newname ng img mo.
    $path = 'img/ProdImg/';

    //TO GET THE IMAGE EXTENTIO
    $imgExt = strtolower(pathinfo($profile, PATHINFO_EXTENSION));

    //acceptable file ext
    $validExt = array("jpg", "jpeg", "png" ,"gif");

    //new name once uploaded
    $newname = rand(1000, 99999).".".$imgExt;

    if(in_array($imgExt,$validExt)){
        if($size < 5000000){ // 5 MB
            move_uploaded_file($tempName,$path.$newname);
        } else {
            echo "<script>alert('Sorry! your file is to large')</script>";
            echo "<script>window.open('sgop.php','_self')</script>";
        }
    } else {
        echo "<script>alert('Sorry! Invalid Extension')</script>";
        echo "<script>window.open('shop.php','_self')</script>";
    }
	
	$insertQuery = $pdo->prepare("INSERT INTO products_tbl (productCat, productName, productPrice, productQty, productDes, productImg) 
    VALUES (:PC, :PN, :PP, :PQ, :PD, :PI)");
	$insertQuery->bindParam(':PC',$PCat);
	$insertQuery->bindParam(':PN',$PName);
	$insertQuery->bindParam(':PP',$PPrice);
	$insertQuery->bindParam(':PQ',$PQty);
	$insertQuery->bindParam(':PD',$PDes);
	$insertQuery->bindParam(':PI',$newname);
	$insertQuery->execute();
	
	echo "<script>alert('Successfully Register')</script>";
	echo "<script>window.open('shop.php','_self')</script>";
}

    /* Add User */
    if(isset($_POST['Add-user'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $mobilenum = $_POST['phonenum'];
        $email = $_POST['Email'];
        $password = sha1($_POST['password']);
        $address = $_POST['address'];

        
        $insertQuery = $pdo->prepare("INSERT INTO user_tbl (fname, lname, phone, email, password, address) 
        VALUES (:UF, :UL, :UP, :UE, :UPW, :UA)");
        $insertQuery->bindParam(':UF',$firstname);
        $insertQuery->bindParam(':UL',$lastname);
        $insertQuery->bindParam(':UP',$mobilenum);
        $insertQuery->bindParam(':UE',$email);
        $insertQuery->bindParam(':UPW',$password);
        $insertQuery->bindParam(':UA',$address);
        $insertQuery->execute();
        
        echo "<script>alert('Successfully Register')</script>";
        echo "<script>window.open('Login.php','_self')</script>";
    }

?>


