<?php include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LayersShop</title>
<h1></h1>
<style>
body {
    background-image: url("SEPROJECTSTUFF/SEPROJECTSTUFF/load.gif");
    font-family: Arial, sans-serif;
}


.container {

    max-width: 1000px;
    margin: auto;
    margin-top: 200px;
    }

form {
    background-color: #f0f0f0;
    padding: 20px;
    margin-left: 700px;
}

input[type="text"], input[type="password"] {

    color: blueviolet;
    font-family :'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: small;
    padding: 10px 48px;
    margin-bottom: 20px;

}

input[type="submit"], input[type="reset"] {
    padding: 10px 112px;
    background-color: blueviolet;
    color:white; 
}
h2{
    color: blueviolet;
}
</style>
<body>
<body>
<div class="container">
<form   method="post">
<h2>WELCOME AGAIN !</h2>
<input type="text" name="username" placeholder= "USERNAME"><br>
<input type="password" name="password" id="password" placeholder="Password"><br>
<input type="checkbox" name="showPasswordCheckbox" name="showPasswordCheckbox" onclick="togglePassword()">Show Password 
<br><input type= "submit" name="login" value="login"><br><br>
<div style="text-align: center;">New In Here?<br><br>
<a href="register.php"> REGISTER here</a><br></div></form>
</form></div>
</body>

<script>
function togglePassword() {
    var passwordField = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

    if (showPasswordCheckbox.checked) {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}
function checklogin(){</script>
    <?php
    if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $check_query = "SELECT * FROM user WHERE uname='$username'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) <= 0) {
        echo "<script>alert('User doesn\'t exist');</script>";
    } else {
        $user_data = mysqli_fetch_assoc($check_result);
        if ($user_data['pass'] == $password) {
            echo "<script>alert('Login Successful!'); window.location='home.php';</script>";
            exit;
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    }
}
?><script>}
</script>
</body></html>
