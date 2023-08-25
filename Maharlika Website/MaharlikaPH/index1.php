<?php
include_once("config.php")
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

    :root {
      --main-color: #002165;
      --secondary-color: #BD0B3B;
      --white-color: #FFFFFF;
      --gray-color: #E4E4E4;
      --tertiary-color: #FCD20E;
      --hyperlink-color: #1592E6;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--gray-color);
    }

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

    main {
      background-color: var(--white-color);
      width: 1120px;
      margin: auto;
      padding-top: 2rem;
      text-align: center;
    }

    .carousel {
      width: 80%;
      margin: 0 auto;
      border: 1px solid #ccc;
      overflow: hidden;
      position: relative;
    }

    .carousel-inner {
      display: flex;
      transition: transform 0.5s;
    }

    .carousel-item {
      flex: 0 0 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .carousel-item img {
      width: auto;
      height: auto;
      max-width: 100%;
      max-height: 100%;
    }

    .product-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        max-width: 100%;
        overflow-x: scroll;
    }


    .product-container::-webkit-scrollbar {
        width: 6px;
    }

    .product-container::-webkit-scrollbar-thumb {
        background-color: var(--gray-color);
        border-radius: 3px;
    }

    .product-container::-webkit-scrollbar-track {
        background-color: var(--white-color);
    }

    .product-card {
        width: calc(100% / 6);
        height: 160px;
        background-color: var(--tertiary-color);
        padding: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: "Poppins", sans-serif;
        font-size: 12px;
        margin-left: 1rem;
        margin-bottom: 1rem;
        
    }

    .product-card .image-container {
      position: relative;
      width: 110px; /* Set the desired width */
      height: 110px; /* Set the desired height */
      background-color: var(--white-color);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .product-card .product-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .product-card .add-to-cart {
      position: absolute;
      top: 10px;
      right: 10px;
      color: var(--white-color);
      font-size: 24px;
    }

    .product-card .product-details {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
    }

    .product-card .product-name {
        font-weight: bold;
        text-align: left; /* Align the product name to the left */
        flex-grow: 1; /* Allow the product name to expand to fill the available space */
    }

    .product-card .product-price {
        font-style: italic;
        text-align: right; /* Align the product price to the right */
        margin-left: 0.5rem;
    }

    .product-card .add-to-cart {
      position: absolute;
      top: 10px;
      right: 10px;
      color: var(--main-color); /* Updated color */
      font-size: 18px; /* Updated size */
    }

    .product-card .add-to-cart:hover {
      color: var(--secondary-color); /* Hover color */
    }

    .product-wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    @media screen and (max-width: 960px) {
      .product-card {
        width: calc(100% / 4); /* Adjust the width to occupy 1/4th of the container on smaller screens */
      }
    }

    @media screen and (max-width: 680px) {
      .product-card {
        width: calc(100% / 3); /* Adjust the width to occupy 1/3rd of the container on even smaller screens */
      }
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
      background-color: #424C80;
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

  </style>
  <title>Maharlika | Home</title>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Set initial slide index
      let currentSlide = 0;

      // Select carousel elements
      const carouselInner = document.querySelector(".carousel-inner");
      const carouselItems = document.querySelectorAll(".carousel-item");

      // Function to switch to the next slide
      function nextSlide() {
        currentSlide = (currentSlide + 1) % carouselItems.length;
        carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
      }

      // Start the carousel timer
      let timer = setInterval(nextSlide, 3000);

      // Pause the carousel when hovering over it
      carouselInner.addEventListener("mouseenter", function() {
        clearInterval(timer);
      });

      // Resume the carousel when not hovering
      carouselInner.addEventListener("mouseleave", function() {
        timer = setInterval(nextSlide, 3000);
      });
    });
  </script>
</head>
<body>
  <!--------------- 
      HEADER
  ---------------->
  <header>
    <div class="title">
        <a href="#"><h2>Maharlika</h2><p>Maharlika</p></a>
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
      <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="css/imgs/Img1.png" alt="Slider 1">
          </div>
          <div class="carousel-item">
            <img src="css/imgs/Img2.png" alt="Slider 2">
          </div>
          <div class="carousel-item">
            <img src="css/imgs/Img3.png" alt="Slider 3">
          </div>
        </div>
      </div>

      <div class="product-container">
        <div class="product-wrapper">
          <?php

          // Fetch products from the database
          $viewQuery = $pdo->prepare("SELECT * FROM products_tbl ORDER BY productID DESC");
          $viewQuery->execute();

          // Display the products
          if ($viewQuery->rowCount() > 0) {
            $counter = 0;
            while ($rows = $viewQuery->fetch()) {
              $productId = $rows['productID'];
              $productCategory = $rows['productCat'];
              $productName = $rows['productName'];
              $productPrice = $rows['productPrice'];
              $productImage = $rows['productImg'];


              
              echo '
              <a href="product_details.php?pid=' . $productId . '">
                <div class="product-card">
                  <div class="image-container">
                    <img src="img/ProdImg/' . $productImage . '" alt="' . $productName . '" class="product-image">
                    <a href="cart.php?pid=' . $productId . '" class="button" onclick="return confirm(\'Are you sure you want to add this item?\');" name="AddCart">
                      <i class="fas fa-cart-plus add-to-cart"></i>
                    </a>
                  </div>
                  <div class="product-details">
                    <p class="product-name">' . $productName . '</p>
                    <p class="product-price">$' . $productPrice . '</p>
                  </div>
                </div>
              </a>';
            

              $counter++;
              if ($counter == 6) {
                echo '<br>'; // Add line break after each row of 6 products
                $counter = 0;
              }
            }
          } else {
            echo "No products found.";
          }
          ?>
        </div>
      </div>
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
