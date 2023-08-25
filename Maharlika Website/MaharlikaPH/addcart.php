<?php
include_once("config.php");
include_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MaharlikaPH | Cart</title>
        <meta charset="UTF-8">
        <meta name="author" content="Lance Tumala"
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/AddCart.css">
        <link rel="stylesheet" href="font-awesome/css/all.min.css">
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap'); 

        *{
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: uppercase;
            transition: all .2s linear;
        }

        html{
            font-size: 60%;
            scroll-padding-top: 6rem;
            scroll-behavior: smooth;
        }


        @font-face {
            font-family: 'Baybayinfont';
            src: url('css/Baybayinfont.ttf');
        }

        @font-face {
            font-family: 'KkDimple';
            src: url('css/KkDimple.otf');
        }

        :root {
            --main-color: #002165;
            --secondary-color: #BD0B3B;
            --white-color: #FFFFFF;
            --gray-color: #E4E4E4;
            --tertiary-color: #FCD20E;
            --hyperlink-color: #1592E6;
        }

        /* --------------- 
        *     NAVBAR
        *----------------*/

        header {
            padding: 0.2rem;
            background-color: var(--main-color);
            color: var(--white-color);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header .title a {
            text-decoration: none;
            font-size: 12px;
            color: var(--white-color);
            margin: 0 1rem;
        }

        header .title a:hover {
            color: var(--secondary-color);
        }

        header .title {
            margin-right: 2rem;
        }

        header .title h2 {
            display: block;
            font-family: 'KkDimple';
        }

        header .title p {
            display: block;
            font-family: 'Baybayinfont';
            text-transform: lowercase;

        }

        .fafa-icon {
            margin-left: 0.5rem;
            color: var(--white-color);
        }

        .fafa-icon i {
            font-size: 18px;
        }

        .fafa-icon:hover {
            color: var(--secondary-color);
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar {
            font-size: 18px;
            align-content: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 2rem;
        }

        .search-icon {
            margin-right: 0.5rem;
        }

        .search {
            border-radius: 10px;
            height: 27px;
            width: 496px;
            text-align: center;
            margin-right: 2rem;
        }

        .profile-icon {
            margin-left: 0.5rem;
            color: var(--white-color);
        }

        .profile-icon:hover {
            color: var(--secondary-color);
        }

        .logout-button {
            margin-left: 1rem;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color: var(--white-color);
        }

        .logout-button a {
            text-decoration: none;
            color: inherit;
        }

        .logout-button a:hover {
            color: var(--secondary-color);
        }

        /* --------------- 
        *  ADMIN CONTROL
        *----------------*/


        main .title{
            margin-top: 15rem;
            font-size: 25px;
            font-weight: 500;
            position: relative;
            text-align: center;
            }
        main .title::before{
            content: "";
            position: absolute;
            left: 96rem;
            bottom: -6px;
            height: 5px;
            width: 60px;
            border-radius: 5px;
            background: linear-gradient(135deg, #9096CA, #293568);
        }


        main .products .icons a{
            font-size: 2.5rem;
            color: var(--main-color);
            display: flex;
            justify-content: flex-end;
            margin-right: 2.5rem;
        }

        main .products .icons a:hover{
            color: var(--secondary-color);
        }

        .products{
            margin: 80px auto;
            padding: 15rem;
            margin-top: -15rem;
        }

        .products table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10rem;
            align-items: center;
            font-size: 14px;
        }

        .prod-info {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            text-align: left;
        }

        th{
            text-align: center;
            padding: 5px;
            color: #fff;
            background: var(--main-color);
        }

        .button {
            text-align: center;
            font-size: 15px;
            color: #000;
            width: 40%;
            border: 0;
            outline: none;
            cursor: pointer;
            margin-top: 5px;
            border-radius: 20px;
            background-color: #787FB3;
            font-weight: 500;
            appearance: button;
        }

        td{
            text-align: center;
            padding: 5px;
            color: #000;
            background: #f2f2f2;
        }

        .products .prod{
            height: 100%;
            width: 100%;
            cursor: pointer;
        }

        /* --------------- 
        *     FOOTER
        *----------------*/

        footer{
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }
        .container{
            max-width: 1170px;
            margin:auto;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color: #24262b;
            padding: 70px 0;
        }
        .footer-col{
        width: 25%;
        padding: 0 15px;
        }
        .footer-col h4{
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left:0;
            bottom: -10px;
            background-color: var(--main-color);
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
        }
        .footer-col ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
            color: #ffffff;
            padding-left: 8px;
        }
        .footer-col .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255,255,255,0.2);
            margin:0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px){
            .footer-col{
            width: 50%;
            margin-bottom: 30px;
        }
        }
        @media(max-width: 574px){
            .footer-col{
            width: 100%;
        }
        }

    </style>
    <body>
        
        <!--------------- 
             NAVBAR
        ---------------->
        <header>
            <div class="title">
                <a href="index1.php"><h2>Maharlika</h2><p>maharlika</p></a>
            </div>
            <div class="search-bar">
                <div class="search-icon">
                <i class="fas fa-search"></i>
                </div>
                <input class="search" type="text" value="Search">
                <a href="addcart.php" class="fafa-icon"><i class="fas fa-shopping-cart"></i></a>
                <a href="shop.php" class="fafa-icon"><i class="fas fa-store"></i></a>
                <a href="profile.php" class="fafa-icon"><i class="fas fa-user"></i></a>
                <span class="profile-icon logout-button"><a href="logout.php">LOGOUT</a></span>
            </div>
        </header>

        <!--------------- 
          ADMIN CONTROL
        ---------------->

        <main>
            
            <div class="title">Your Cart</div>
            <div class="products">
                <div class="product-container">
                    <table border>
                        <tr class="head">
                            <th>Product Image</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                            <th>EDIT</th>
                        </tr>
                    
                        <?php
                        $viewQuery = $pdo->prepare("SELECT * FROM cart_tbl ORDER BY userID DESC");
                        $viewQuery->execute();
                        
                        $totalRecords = $viewQuery->rowCount();

                        $viewQuary = $pdo->prepare("SELECT SUM(productPrice) FROM cart_tbl WHERE");
                        $viewQuery->execute();
                        

                        
                        while($rows = $viewQuery->fetch()){
                            $productId = $rows['productID'];
                            $productCategory = $rows['productCat'];
                            $productName = $rows['productName'];
                            $productPrice = $rows['productPrice'];
                            $productQuantity = $rows['productQty'];
                            $productDescription = $rows['productDes'];
                            $productImage = $rows['productImg'];
            
                        ?>
                            <tr>
                                <div class="prod">
                                    <td><img src="img/ProdImg/<?php echo $productImage;?>" alt="Profile Picture" width="100"/></th>
                                    <td>
                                        <div class="prod-info">
                                            <div class="product-cat"><?php echo $productCategory;?></div>
                                            <div class="product-name"><?php echo $productName;?></div>
                                            <div class="product-qty">Stock: <?php echo $productQuantity;?></div>
                                            <div class="product-des"><?php echo $productDescription;?></div>
                                        </div>
                                    </td>
                                    <td><div class="product-pricee">$ <?php echo $productPrice;?></div></td>
                                    <td><a href="delete.php?pid=<?php echo $productId;?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                                </div>
                        <?php } ?>
                            </tr>
                        <?php 
                        
                        $sumQuery = $pdo->prepare("SELECT SUM(productPrice) AS totalSum FROM cart_tbl");
                        $sumQuery->execute();
                        
                        while($dataSum = $sumQuery->fetch()){
                            $sum = $dataSum['totalSum']
                        

                        ?>
                            <tr class="head">
                                <th></th>
                                <th>TOTAL PRICE</th>
                                <th>$ <?php echo $sum;?></th>
                                <th></th>
                            </tr>

                        <?php } ?>
                    </table>
                        <div class="icons"><a href="#"><i class="fa fa-shopping-basket"></i> CHECK OUT</a></div>
	                <strong>Total Records: <?php echo $totalRecords;?></strong>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>online shop</h4>
                        <ul>
                            <li><a href="#">watch</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">dress</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

<script src="js/script.js"></script>