<?php
include_once("config.php");
include_once("session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
  <style>
    @font-face {
      font-family: 'Baybayinfont';
      src: url('css/Baybayinfont.ttf');
    }

    @font-face {
      font-family: 'KkDimple';
      src: url('css/KkDimple.otf');
    }
    
    :root{
      --main-color:#002165;
      --secondary-color:#BD0B3B;
      --white-color:#FFFFFF;
      --gray-color:#E4E4E4;
      --tertiary-color:#FCD20E;
      --hyperlink-color:#1592E6;
    }
    
    *{
      box-sizing:border-box;
      margin:0;
      padding:0;
    }
    

    body, html {
      height: 100%;
    }

    body{
      background-color:var(--gray-color);
      display: flex;
      flex-direction: column;
    }
    
    header{
      padding:.2rem;
      background-color:var(--main-color);
      color:var(--white-color);
      text-align:center;
      display:flex;
      align-items:center;
      justify-content:center;
    }
    
    header .title a{
      text-decoration:none;
      font-size:12px;
      color:var(--white-color);
      margin:0 1rem;
    }
    
    header .title a:hover{
      color:var(--secondary-color);
    }
    
    header .title{
      margin-right:2rem;
    }
    
    header .title h2 {
      display: block;
      font-family: 'KkDimple';
    }

    header .title p {
      display: block;
      font-family: 'Baybayinfont';
    }
    
    .fafa-icon{
      margin-left:.5rem;
      color:var(--white-color);
    }
    
    .fafa-icon i{
      font-size:18px;
    }
    
    .fafa-icon:hover{
      color:var(--secondary-color);
    }
    
    .search-bar{
      display:flex;
      align-items:center;
    }
    
    .search-bar{
      align-content:center;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:0 2rem;
    }
    
    .search-icon{
      margin-right:.5rem;
    }

    .search{
      border-radius:10px;
      height:27px;
      width:496px;
      text-align:center;
      margin-right:2rem;
    }
      
    .profile-icon{
      margin-left:.5rem;
      color:var(--white-color);
    }

    .profile-icon:hover{
      color:var(--secondary-color);
    }
        
    main{
      background-color:var(--white-color);
      width:1120px;
      margin:auto;
      padding-top:2rem;
      text-align:center;
      flex: 1;
    }
    
    footer{
      line-height:1.5;
      font-family:Poppins,sans-serif;
    }
    
    .container{
      max-width:1170px;
      margin:auto;
    }
    
    .row{
      display:flex;
      flex-wrap:wrap;
    }
    
    ul{
      list-style:none;
    }
    
    .footer{
      flex-shrink: 0;
      background-color:#24262b;
      padding:70px 0;
    }
    
    .footer-col{
      width:25%;
      padding:0 15px;
    }
    
    .footer-col h4{
      font-size:18px;
      color:#fff;
      text-transform:capitalize;
      margin-bottom:35px;
      font-weight:500;
      position:relative;
    }
    

    .footer-col h4::before{
      content:'';
      position:absolute;
      left:0;
      bottom:-10px;
      background-color:#424c80;
      height:2px;
      box-sizing:border-box;
      width:50px;
    }
      
      .footer-col ul li:not(:last-child){
        margin-bottom:10px;
      }
      
      .footer-col ul li a{
        font-size:16px;
        text-transform:capitalize;
        color:#fff;
        text-decoration:none;
        font-weight:300;
        color:#bbb;
        display:block;
        transition:all .3s ease;
      }

      .footer-col ul li a:hover{
        color:#fff;
        padding-left:8px;
      }
      
      .footer-col .social-links a{
        display:inline-block;
        height:40px;
        width:40px;
        background-color:rgba(255,255,255,.2);
        margin:0 10px 10px 0;
        text-align:center;
        line-height:40px;
        border-radius:50%;
        color:#fff;
        transition:all .5s ease;
      }
      
      .footer-col .social-links a:hover{
        color:#24262b;
        background-color:#fff;
      }
      
      @media (max-width:767px){
        .footer-col{
          width:50%;
          margin-bottom:30px;
        }
      }
      
      @media (max-width:574px){
        .footer-col{
          width:100%;
        }
      }
      
      .logout-button{
        margin-left:1rem;
        font-family:Poppins,sans-serif;
        font-size:16px;
        color:var(--white-color)
      }
      
      .logout-button a{
        text-decoration:none;color:inherit;
      }
        
      .logout-button a:hover{
        color:var(--secondary-color);
      }


      .Prod-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .ProdImg {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 200px; /* Adjust the size as desired */
        height: 200px; /* Adjust the size as desired */
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto; /* Add this line to center the container */
      }

      .medium-circle {
        width: 100%;
        height: auto;
        object-fit: cover;
      }

      .ProdDetails {
        margin-top: 10px;
      }

      .Product {
        font-size: 22px;
        margin-top: 2rem;
        text-align: right;
        font-weight: bold;
        font-family: "Poppins", sans-serif;
      }

      .Product span.price {
        font-size: 18px;
        font-weight: bold;
        font-family: "Poppins", sans-serif;
      }


      .ProductQty {
        text-align: left;
        font-family: "Poppins", sans-serif; 
      }

      .ProductDesc {
        margin-top: 2rem;
        font-size: 16px;
        font-family: "Poppins", sans-serif;
      }

      .seller {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
      }

      .seller-detail {
        display: flex;
        align-items: center;
      }

      .user-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 10px;
      }

      .seller-name {
        font-size: 20px;
        font-weight: bold;
      }

      .star-icon {
        color: gold;
        font-size: 18px;
        margin-right: 5px;
      }

      .rating {
        font-size: 16px;
        color: gray;
      }

      .view-shop-btn {
        margin-left: 1.5rem;
        border: 2px solid black;
        background-color: white;
        color: black;
        border-radius: 10px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
      }

      .view-shop-btn:hover {
        background-color: var(--secondary-color);
        color: white;
      }

      .foot-cart {
        background-color: var(--secondary-color);
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center; /* Updated to center the content horizontally */
        margin-top: 55px; /* Added margin to separate from the main content */
      }

      .cart-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .quantity-controls {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-right: 10px;
      }

      .quantity-controls button {
        width: 30px;
        height: 30px;
        background-color: #ebebeb;
        border: none;
        cursor: pointer;
        font-size: 16px;
      }

      .quantity-input {
        width: 40px;
        height: 30px;
        border: none;
        text-align: center;
      }

      .button {
        border-radius: 10px;
        background-color: var(--secondary-color);
        color: var(--white-color);
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-left: 53rem;
        transition: background-color 0.3s ease;
        text-decoration: none;
      }

      .button:hover {
        color: var(--tertiary-color);
      }

      .button i {
        margin-right: 5px;
      }

      .button p {
        margin: 0;
      }


  </style>
  <title>Maharlika | Home</title>
</head>
<body>
  <!--------------- 
      HEADER
  ---------------->
  <header>
    <div class="title">
        <a href="index1.php"><h2>Maharlika</h2><p>Maharlika</p></a>
    </div>
    <div class="search-bar">
        <div class="search-icon">
        <i class="fas fa-search"></i>
        </div>
        <input class="search" type="text" value="Search">
        <a href="addcart.php" class="fafa-icon"><i class="fas fa-shopping-cart"></i></a>
        <a href="shop.php" class="fafa-icon"><i class="fas fa-store"></i></a>
        <a href="profile.php" class="profile-icon"><i class="fas fa-user"></i></a>
        <span class="profile-icon logout-button"><a href="logout.php">LOGOUT</a></span>
    </div>
    </header>
    <main>
      <?php 
      $pid = $_GET['pid'];
      $select = $pdo->prepare("SELECT * FROM products_tbl WHERE productID = '$pid'"); 
      $select->execute(); 

      while($rows = $select->fetch()){ 
        $productCategory = $rows['productCat']; 
        $productName = $rows['productName']; 
        $productPrice = $rows['productPrice']; 
        $productQuantity = $rows['productQty']; 
        $productDescription = $rows['productDes']; 
        $productImage = $rows['productImg']; 
      ?>
      
      <div class="main-container">
        <div class="Prod-container">
          <div class="ProdImg" style="background-color: #F5F5F5;">
            <img src="img/ProdImg/<?php echo $productImage;?>" alt="Product" class="medium-circle">
          </div>
          <div class="ProdDetails">
            <div class="Product">
              <?php echo $productName; ?> &emsp; <span class="price">₱<?php echo $productPrice; ?></span>
            </div>
            <div class="ProductQty">Qty: <?php echo $productQuantity; ?></div>
            <div class="ProductDesc"><?php echo $productDescription; ?></div> 
          </div>
        </div>
      </div>

      <div class="seller">
        <div class="seller-detail">
          <img src="img/user.png" alt="user" class="user-img">
          <p class="seller-name">Baige Shop</p>
          <i class="fa fa-star-fill star-icon"></i> 
          <p class="rating">4.5 rating</p>
          <button type="button" class="view-shop-btn">View Shop</button>
        </div>
      </div>

      <div class="foot-cart">
        <div class="cart-container">
          <div class="quantity-controls">
            <button class="minus-btn">-</button>
            <input type="number" class="quantity-input" value="1">
            <button class="plus-btn">+</button>
          </div>
          <a href="cart.php?pid=<?php echo $productId;?>" class="button" onclick="return confirm('Are you sure you want to add this item?');" name="AddCart"><i class="fa fa-cart-plus"></i><p>Add to Cart</p></a>
        </div>
      </div>


      <?php } ?>
    </main>
        <!--------------- 
              FOOTER
        ---------------->
        <span id="footer"></span>
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
