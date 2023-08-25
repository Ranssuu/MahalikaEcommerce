<?php
include_once("config.php");
include_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MaharlikaPH | ProductView</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/kk-dimple" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/baybayin-doctrina" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
    <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
      *{
          margin:0;
          padding:0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
      }

      .header{
          position:relative;
          top:0;
          left:0;
          width:100%;
          padding:50px;
          background: #002165;
          display:flex;
          border-bottom-left-radius: 25px;
          border-bottom-right-radius: 25px;
          z-index:100%;
          justify-content: center;
          
      }

      body {
          height: 100vh;
          width: 100%;   
      }

      img {
      align-items: center;
      }


      h1.centered{
      color:#fff;
      text-align: center;
      }

      .font1{
          font-family: 'Kk Dimple', sans-serif;
          font-size:40px;
      }

      .font2{
          font-family: 'Baybayin Doctrina', sans-serif;
      }
      footer{
          position:absolute;
          padding: 50px;
          bottom: 0;
          left:500px;
          right: 500px;
          background: #BD0B3B;
          height: auto;
          width: 50%;
          padding-top: 40px;
          color: #fff;
          border-top-left-radius: 25px;
          border-top-right-radius: 25px;
          display: flex;
          justify-content: space-between;
          align-items: center;


      }

      .custom-span {
          font-family: Arial, sans-serif;
          font-size: 25px;
          color: black;
        
      }

      .custom-cog-icon {
          color: white;
          position: absolute;
          top: 50%;
          right: 300px;
          transform: translateY(-50%);
      }

      .boxicon {
          display: flex;
          align-items: center;
      
        
        }
        
      .boxicon .bi-cart4 {
        
          margin-left: 500px;
          flex-direction: column;
          align-items: center;
          text-align: center;
          
        }

        .cart-text {
          display: block;
          color:black;
          margin-left: 500px;
        }

        .boxicon a:not(.cart-icon) {
          margin-right: 10px;
        }

        div p {
          font-size: 30px;
          right: 100px;
          transform: translateX(-0%)
        }
        
      .image{
          width: 48%;
          text-align: center;
          transform: translateX(30%);
          display:flex;
      }

      

      .image i{
          position:absolute;
          color:yellow;
          margin-top: 50px;
          transform: translateX(200%);

      }

      .image .number{
          position: absolute;
          margin-top: 50px;
          font-size: 12px;
          transform: translateX(-520%);
          color:#1D262D;
      }

      button{
          position: absolute;
          font-size: 15px;
          transform:translateX(300%);
          cursor:pointer;
          display:inline-block;
          padding:8px 13px;
          margin-top: 20px;
          border-top-left-radius: 20px;
          border-bottom-left-radius:20px;
          border-bottom-right-radius: 20px;
          border-top-right-radius: 20px;
      }



        img {
          width: 17%;
          overflow: hidden;
        }
        
        div {
          display: block;
          justify-content: center;
          align-items: center;
          text-align: center;
        }

        .ProdImg img {
          width: 200px;
          height: 200px;
          object-fit: cover;
          border-radius: 50%;
          overflow: hidden;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1 class="centered">
          <span class="font1">Maharlika</span> 
          <span class="font2">Maharlika</span>
        </h1>
        <a href="#"><i class='bx bxs-cog bx-rotate-90 bx-spin custom-cog-icon'></i></a>
    </header>

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

    <div style="display: flex; flex-direction: column; align-items: center;">
    <div class="ProdImg">
      <img src="img/ProdImg/<?php echo $productImage;?>" alt="Product">
    </div>
      <p style="font-weight: bold;"><?php echo $productName;?> &emsp; <?php echo $productPrice;?></p>
      <p style="font-size: 16px; margin-top: 8px; transform:translateX(-350%) ; font-weight: bold;">Qty: <?php echo $productQuantity;?></p> 
      <p style="font-weight: bold; width:600px; font-size:20px; margin-top: 20px;"><?php echo $productDescription;?></P>
        <a href="#" style="color:#1D262D; font-size: 15px; margin-top: 20px;  padding:10px 20px; text-decoration: none;">View More</a>
  </div>
  <?php } ?>
 <div class="image">
  <img src="img/user.png" alt="user">
 <p style="font-size:20px ; ">Baige Shop</p>
 <i class="bi bi-star-fill star-icon "></i> 
 <p class="number">4.5 rating</p>
 <button type="button">View Shop</button>
 </div>

 
    <footer>
        <div class="boxicon">
            <a href="#"><i class="bi bi-dash-square" style="color:black; font-size: 20px; margin-left: 10px;"></i></a>
            <span class="custom-span" style="margin-right: 10px;">2</span>
            <a href="#"><i class="bi bi-plus-square-fill" style="color:black; font-size: 20px; margin-right: 10px;"></i></a>
            <a href="#">
                <div class="cart-icon">
                  <i class="bi bi-cart4" style="color:#141313; font-size: 42px;"></i>
                </div>
                <span class="cart-text">Add to cart</span>
            </a>
        </div>
    </footer>
</body>
</html>

