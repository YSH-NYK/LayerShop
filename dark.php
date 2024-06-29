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
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\5_a75e8df1-2df2-4e47-8bea-afd18dd231ec.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">LIGHTNING CHARCOAL Rs499/-</button>
            </div>
          </th>
          <th>
            <div class="product-container">
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\galaxy-s22-ultra.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">BUBBLY CHARCOAL Rs499/-</button>
            </div>
          </th>
          <th>
            <div class="product-container">
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\galaxy-s22-ultra03.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">WAVERY CHARCOAL Rs499/-</button>
            </div>
          </th>
          <th>
            <div class="product-container">
              <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\5_a75e8df1-2df2-4e47-8bea-afd18dd231ec.jpg" class="header"></a>
              <button onclick="window.location.href='bill.php'" class="names">CRACKED CHARCOAL Rs499/-</button>
            </div>
          </th>
          
        </tr>
        </table>
        <a href="dark.php"><img src="SEPROJECTSTUFF\SKINS\DARK\Puzzle.jpg" width="100%" height="1000px"></a>
        <table>
        <tr>
        
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\5_a75e8df1-2df2-4e47-8bea-afd18dd231ec.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">LIGHTNING CHARCOAL Rs499/-</button>
              </div>
            </th>
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\galaxy-s22-ultra.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">BUBBLY CHARCOAL Rs499/-</button>
              </div>
            </th>
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\galaxy-s22-ultra.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">BUBBLY CHARCOAL Rs499/-</button>
              </div>
            </th>
            <th>
              <div class="product-container">
                <a href="bill.php"><img src="SEPROJECTSTUFF\SKINS\DARK\galaxy-s22-ultra.jpg" class="header"></a>
                <button onclick="window.location.href='bill.php'" class="names">BUBBLY CHARCOAL Rs499/-</button>
              </div>
            </th>
          </tr>
      </table>
      
</body>
<script>
        const productContainers = document.querySelectorAll('.names');
        productContainers.forEach(container => {
            container.addEventListener('mouseenter', () => {
                container.style.backgroundColor="blueviolet"
            });
                container.addEventListener('mouseleave', () => {
                container.style.backgroundColor = '';
            });
        });
    </script>
</html>
