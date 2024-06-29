<?php
session_start();
?>
<!DOCTYPE html>
<title>LayersShop</title>
<html>
<head></head>
    <style>
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

        .thumbnail {
            max-width: 100%;
        }
		.img :hover {
        
            transform: scale(5.1);
        }

        .caption {
            font-size: large;
            color: black;
			font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
			font-weight: bold;
			
        }
		.line{
			color: yellow;
			background-color: blueviolet;
			align-items: center;
			font-size: large;
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
        .categories{
            width: 100%;
            height: 100%;
            transition: transform 0.3s zoom;
        }
        img {
            width: 100%;
                  }

        html {
            min-height: 100%;
            position: relative;
			background-color: rgb(255, 255, 255);
        }
    </style>

<body>

<div align="center" class="navbar">
    <a href="home.php"><div class="xyz"><img src="SEPROJECTSTUFF\SEPROJECTSTUFF\logo.jpg" style="width: 75px;
	"></div></a>
    <div class="navbar-right">
		        <a href="login.php">Login</a>
        <a href="register.php">Sign Up</a>
    </div>
</div

<div><div align="center"class="line">World Wide Shipping, Order your skin from Rs 499/- </div></div>

    <div>
        <div class="thumbnail">
           <img src="SEPROJECTSTUFF\SEPROJECTSTUFF\eyescatch.jpg" style="height:800px">
        </div>
    </div><div align="center"class="line">Best Skins of the Year !</div></div>
    <div class="container">
        <div class="row">
            <div class="thumbnail">
                <a href="bold.php">
                    <img src="SEPROJECTSTUFF\SEPROJECTSTUFF\Bold&exp.jpg">
                </a>
                <center>
                    <div class="caption">
                        <p>Bold & Expressive</p>
                        <p>Colourfull collection for colorfull you !</p>
                    </div>
                </center>
            </div>
        </div>
        <div class="thumbnail">
            <a href="dark.php">
                <img src="SEPROJECTSTUFF\SKINS\DC.jpg" class="categories">
            </a>
            <center>
                <div class="caption">
                    <p id="autoResize">Dark Collection</p>
                    <p>Black Aesthetic Freak?Check this !</p>
                </div>
            </center>
        </div>
        <div class="thumbnail">
                <img src="SEPROJECTSTUFF\SEPROJECTSTUFF\down.jpg">
            </a>
        </div>
    </div>
    <br><br> <br><br><br><br>
    <p class="xyz"> hello </p>
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
