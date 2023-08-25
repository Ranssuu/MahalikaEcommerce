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

        .input-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .input-box .details {
            margin-bottom: 0.5rem;
            font-weight: bold; 
        }

        .fullname {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            align-items: center;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .title {
            font-size: 24px;
            margin-bottom: 1rem;
            font-weight: bold;
        }


        .button {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .button input[type="submit"] {
            padding: 0.8rem 2rem;
            font-size: 16px;
            background-color: var(--secondary-color); 
            color: var(--white-color); 
            border: var(--gray-color) solid 1px;
            cursor: pointer;
            width: 418px; 
        }

        .button input[type="submit"]:hover {
            opacity: 0.8;
        }

        .input-box input[type="text"],
        .input-box input[type="email"],
        .input-box input[type="password"] {
            padding: 0.5rem;
            font-size: 16px;
            background-color: white; 
            color: black; 
            border: 1px solid black; 
            border-radius: 5px; 
        }

        .fullname input[type="text"] {
            width: 200px; 
        }

        .input-box input[type="email"],
        .input-box input[type="password"] {
            width: 418px; 
        }

        .input-box input[type="text"]:focus,
        .input-box input[type="email"]:focus,
        .input-box input[type="password"]:focus {
            outline: none;
            border-color: var(--secondary-color); 
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
                    <div class="title">Sign Up</div>
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="user-details">
                            <div class="fullname">
                                <div class="input-box">
                                    <span class="details">First Name</span>
                                    <input type="text" placeholder="Enter your first name" name="fname" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Last Name</span>
                                    <input type="text" placeholder="Enter your last name" name="lname" required>
                                </div>
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="text" placeholder="Enter your number" name="phonenum" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="email" placeholder="Enter your email" name="Email" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="password" placeholder="Enter your password" name="password" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Address</span>
                                <input type="text" placeholder="Enter your address" name="address" required>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" name="Add-user" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
