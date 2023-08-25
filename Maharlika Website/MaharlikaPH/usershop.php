<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <title>Maharlika | Home</title>
    <style>

        @font-face {
            font-family: 'KkDimple';
            src: url('css/KkDimple.otf');
        }
        
        @font-face {
            font-family: 'Baybayin';
            src: url('css/baybayinfont.ttf');
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
            font-size: 18px;
            color: var(--white-color);
            margin: 0 1rem;
        }

        header .title a:hover {
            color: var(--secondary-color);
        }

        header .title {
            margin-right: 2rem;
        }

        header .title h2,
        header .title p {
            display: block;
            margin: 0;
        }

        header .title p {
            font-family: 'Baybayin';
        }

        header .title h2{
            font-family: 'KkDimple';
        }

        main {
            background-color: var(--white-color);
            width: 1120px;
            height: 90vh;
            margin: auto;
        }
        
        main .title h2 {
            font-size: 24px;
            margin-bottom: 2rem;
        }

        .content {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-control {
            width: 418px;
            padding: 0.5rem;
            font-size: 16px;
            background-color: white;
            color: black;
            border: 1px solid black;
            border-radius: 5px;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary-color);
        }

        .form-submit-button {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .form-submit-button button {
            padding: 0.8rem 2rem;
            font-size: 16px;
            background-color: var(--secondary-color);
            color: var(--white-color);
            border: var(--gray-color) solid 1px;
            cursor: pointer;
            width: 418px;
            font-family: Po;
        }

        .form-submit-button button:hover {
            opacity: 0.8;
        }

    </style>
</head>
<body>
    <header>
        <div class="title">
            <a href="login.php"><h2>Maharlika</h2><p>maharlika</p></a>
        </div>
    </header>
    <main>
        <div class="main-container">
            <div class="container">
                <div class="content">
                    <div class="title"><h2>Product Shop</h2></div>
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="productCategory">Product Category</label>
                            <input type="text" class="form-control" name="prodCat" placeholder="Enter Product Category" required>
                        </div>
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" name="prodName" placeholder="Enter Product Name" required>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input type="number" class="form-control" name="prodPrice" placeholder="Enter Product Price" required>
                        </div>
                        <div class="form-group">
                            <label for="productQuantity">Product Quantity</label>
                            <input type="number" class="form-control" name="prodQty" placeholder="Enter Product Quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea class="form-control" name="prodDes" placeholder="Enter Product Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productImage">Product Image</label>
                            <input type="file" class="form-control-file" name="prodImg" required>
                        </div>
                        <div class="form-submit-button">
                            <button type="submit" name="Add">Add to Shop</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>