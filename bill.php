<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LayersShop</title>
</head>
<style>
    label{
        font-size: large;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold
    }
form {
    margin-top: 150px;
    padding: 20px;
    border-radius: 20px;
}

input[type="text"], input[type="password"] {

    color: blueviolet;
    font-family :'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: medium;
    padding: 10px 48px;
    margin-bottom: 20px;
    width: 200px;
    position: relative;
   

}
button {
    padding: 10px 112px;
    background-color: blueviolet;
    color:white; 
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
</header>
<form  align="center"method="post">
<h2  style="position: relative; left: 30px;"  align="center" >Secure Payment</h2>
<p  style="position: relative; left: 30px; margin-bottom: 20px ;font-size :large;" align="center">Complete your purchase by providing your payment details below.</p>
<label for="card-number">Card Number:</label>
<input type="text" style="position: relative; left: 35px;" id="card-number" name="card-number" placeholder="1234 5678 9012
3456" required><br>
<label for="expiry-date">Expiry Date:</label>
<input type="text" style="position: relative; left: 45px;" id="expiry-date" name="expiry-date" placeholder="MM/YY" required> <br>
<label for="cvv">CVV:</label>
<input style="position: relative; left: 76px;" type="text" id="cvv" name="cvv" placeholder="123" required> <br>
<button type="submit" onclick="window.location.href='thanks.php'" align="center" style="padding-left:50px;padding-right : 50px; margin-left: 190px;" >Pay Now</button>
</form>
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