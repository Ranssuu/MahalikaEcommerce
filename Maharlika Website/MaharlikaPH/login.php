<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Maharlika | Login</title>
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
            font-family: 'Poppins', sans-serif;
            font-weight: 200;
        }

        a {
        color: var(--hyperlink-color);
        text-decoration: none;
        }

        a:visited {
            color: var(--hyperlink-color);
        }

        .container {
            background: var(--white-color);
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }

        .box1 {
            background: var(--white-color);
            width: 1382px;
            text-align: center;
        }

        .box1-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .center-text {
            font-family:'KkDimple';
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin-bottom: 2px;
        }

        .box2 {
            align-content: center;
            text-align: center;
            background: var(--main-color);
            width: 430px;
            font-size: 12px;
            color: var(--white-color);
            padding: 20px;
            margin: 0 auto;
            position: relative;
        }

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-container label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        .login-container input {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .login-container input[type="submit"] {
            background-color: var(--secondary-color);
            color: white;
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: none;
        }

        .login-container p {
            text-align: left;
        }

        .box3 {
            background: var(--secondary-color);
            width: 108px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            font-family: 'Baybayin' ;
            font-weight: 100;
        }

        .welcome{
            font-family: 'KkDimple' ;
            font-size: 24px;
            font-weight: 100;
        }
        
    </style>

<?php
include_once("config.php");

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = sha1($_POST['pword']);
	
	session_start();
	
	$query = $pdo->prepare("SELECT * FROM user_tbl WHERE email=:email OR phone=:email AND password =:pword");
	$query->bindParam(':email',$email);
	$query->bindParam(':pword',$password);
	$query->execute();
	
	$count = $query->rowCount();
	
	if($count > 0){
		while($row = $query->fetch()){
			$uid = $row['userID'];
			$_SESSION["uid"] = $uid;
			
			header("location: Index1.php");
		}
		
	} else {
		echo "<script>alert('Sorry Wrong Username or Password')</script>";
		echo "<script>window.open('Login.php','_self')</script>";
	}
	
	
}
?>
</head>
<body>
    <div class="container">
        <div class="box1">
            <div class="box1-container">
                <div class="center-text">
                    <h2>Experience the Richness of 
                        Cultural Artisanal Crafts. 
                        Shop with us to empower local 
                        communities, sustain livelihoods, 
                        and preserve traditional 
                        knowledge for future 
                        generations.</h2>
                    <a href="index.php">CONTINUE TO BROWSE</a>
                </div>
            </div>
        </div>
        <div class="box2">
            <div class="login-container">
                <form action="login.php" method="post">
                    <div>
                        <h2 class="welcome">WELCOME TO</h2>
                        <h2 class="welcome">MAHARLIKA!</h2>
                        <h2 class="logo">maharlika</h2>
                        <h3>Login</h3>
                    </div>
                    <label for="email">Email or Mobile Number</label>
                    <input type="text" name="email" placeholder="Email or Mobile Number">
                    <label for="password">Password</label>
                    <input type="password" name="pword" placeholder="Password">
                    <input type="submit" name="login" value="Login">
                    <p>Need an account <a href="register.php">Register</a></p>
                </form>
            </div>
        </div>
        <div class="box3">
            <img src="img/maharlika-v.png" alt="Maharlika.png">
        </div>
    </div>
</body>
</html>