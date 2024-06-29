<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LayersShop</title>
    <style>
        	.srch
		{
			height: 28px;
		}
        .names {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: silver;
            font-weight: bold;
            font-size: large;
            margin-top: 5px; 
            padding-left: 100px;
            padding-right: 100px;
            border: 2px solid black;
            color: black;
        }
  
        .names:hover {
            background-color: blueviolet;
        }

        .header {
           
            height: 500px;
            width: 400px;
           
        }

        .header:hover {
            height: 496px;
            width: 396px;
            border: 3px solid;
            border: 3px blueviolet solid;
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
            transition-duration: 0.4s;
            text-decoration: none;
        }
        body{
            height: 75px;
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

        .line {
            color: yellow;
            background-color: blueviolet;
            align-items: center;
            font-size: large;
        }

        html {
            background-color: #f8f8f8;
        }

        td {
            padding: 0px;
            width: 0px;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0px;
        }

        .product-container {
            display: inline-block;
            margin: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div align="center" class="navbar">
        <a href="home.php"><div class="xyz"><img src="SEPROJECTSTUFF\SEPROJECTSTUFF\logo.jpg" style="width: 75px;"></div></a>
        <div class="navbar-right">
            <a href="register.php"><img class="srch" src="SEPROJECTSTUFF\SEPROJECTSTUFF\search.jpg"></a>
            <a href="login.php">Login</a>
            <a href="register.php">Sign Up</a>
        </div>
    </div>

    <div>
        <div align="center" class="line">World Wide Shipping, Order your skin from Rs 499/- </div>
    </div>

    <table>
        <tr>          
          <th>
            <div class="product-container">
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Ripple\15_47fc2599-e556-496e-93fc-e8308538e191.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">BUBBLED PEACHED Rs799/-</button>
            </div>
          </th>
          <th>
            <div class="product-container">
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Retro\1_05ca2ef2-9b65-4d2e-9d96-8304ab5e8dee.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">BUBBLY BOLDER XXX Rs799/-</button>
            </div>
          </th>
          <th>
            <div class="product-container">
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Ripple\17_7eb3e206-7a00-4637-8d4b-c60b8975f17e.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">WAVERY PINKED XXX Rs799/-</button>
            </div>
          </th>
          <th>
            <div class="product-container">
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Retro\19_9f6fdf85-fca7-4715-804e-d5ffeae4140c.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">JIGGLE JIGGLE BOLD Rs799/-</button>
            </div>
          </th>
          
        </tr>
        </table>
        <a href="bold.php"><img src="SEPROJECTSTUFF\SKINS\Retro\Puzzle_d1832686-1785-43ae-93aa-bc25cbb286af.jpg" width="100%" height="1000px"></a>
        <table>
        <tr>
        
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Ripple\18_20ab4ab3-e163-43e8-99f1-2c7d166092a3.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">WAVERY GREENS XXX Rs799/-</button>
              </div>
            </th>
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Ripple\16_12b77b63-d6a0-4847-beb9-3e681fff3f1b.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">WAVERY CHARCOAL Rs799/-</button>
              </div>
            </th>
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Retro\2_2615cc9e-85ff-45a0-a16f-aa265b33db1f.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">BUBBLY JIGGLED XXX Rs799/-</button>
              </div>
            </th>
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\Ripple\15_47fc2599-e556-496e-93fc-e8308538e191.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">WAVERY PEACHES Rs799/-</button>
              </div>
            </th>
          </tr>
      </table>
      
</body>
</html>
