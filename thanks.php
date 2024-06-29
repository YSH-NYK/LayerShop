<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LayersShop</title>
</head>
<style>
.title{
    margin-top: 100px;
    font-size: large
}
form {
    margin-top: 150px;
    padding: 20px;
    border-radius: 20px;
}
		.head{
		background-color: black;
		}
    
    .navbar {
			height: 75px;
			max-width: 100%;		
            overflow: hidden;
            background-color: white;
        }

        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
			font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 16px;
			right: 0px;
			transition-duration: 0.4s;
            text-decoration: none;
        }
		.srch
		{
			height: 28px;
		}
        .navbar a:hover {
            
			background-color: white;
            color: blueviolet;
        }

        .navbar-right {
            float: right;
			padding-top: 10px;
			padding-right: 10px;
        }
        .footer {
            background-color: #101010;
            color: #9d9d9d;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
            bottom: 0;
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }

        html {
            min-height: 100%;
            position: relative;
			background-color: silver;
        }
    </style>
<body>
    <header>
    <div align="center" class="navbar">
        <a href="home.php"><div class="xyz"><img src="SEPROJECTSTUFF\SEPROJECTSTUFF\logo.jpg" style="width: 75px;"></div></a>
        <div class="navbar-right">
            <a href="register.php"><img class="srch" src="SEPROJECTSTUFF\SEPROJECTSTUFF\search.jpg"></a>
            <a href="login.php">Login</a>
            <a href="register.php">Sign Up</a>
        </div>
    </div>
    <div class="title" align="center">
        <h1 >
            Thank You! For Ordering...
        </h1>
        <p>
            Your order has been placed, you will recieve a confirmation mail soon.. <br>
            THANK YOU VISIT AGAIN!!! 
        </p>
        <a href="home.php" class="xyz">HOME</a>
    </div>
    
</header>
</div>
<br><br> <br><br><br><br>
<footer class="footer">
    <div class="container">
        <center>
            <p>Copyright &copy LayersShop Store. All Rights Reserved. | Contact Us: +91 1234567890</p>
        </center>
    </div>
</footer>
</div>
</body>
</html>