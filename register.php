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

form {
    background-color: #f0f0f0;
    padding: 20px;
    margin-left: 1250px;
    max-width: 280px;
    margin-top: 200px;
    border-radius: 20px;
}

input[type="text"], input[type="password"] {

    color: blueviolet;
    font-family :'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: medium;
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
<div class="container">
<form method="post" onsubmit="return validateForm()">
<h2>GET STARTED</h2>
<input type="text" name="username" placeholder="Username"><br>
<input type="password" name="password" id="password" placeholder="Password"><br>
<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"><br>
<input type="checkbox" id="showPasswordCheckbox" onclick="togglePassword()">Show Password 
<br><input type="submit" name="Register" value="Register"><br><br>
<div style="text-align: center;">Already Have an Account?<br>
<a href="login.php">Back To LOGIN IN</a><br></div>
</form>
</div>
<script>
function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if (password != confirmPassword) {
        alert("Passwords do not match");
        return false;
    }
    return true;
}

function togglePassword() {
    var passwordField = document.getElementById("password");
    var confirmPasswordField = document.getElementById("confirmPassword");
    var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

    if (showPasswordCheckbox.checked) {
        passwordField.type = "text";
        confirmPasswordField.type = "text";
    } else {
        passwordField.type = "password";
        confirmPasswordField.type = "password";
    }
}
</script>
</body>
</html>
<?php
if(isset($_POST['Register'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $check_query = "SELECT * FROM user WHERE uname='$username'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Username already exists');</script>";
    } else {
        $iquery="INSERT INTO user (uname,pass) VALUES ('$username','$password')";
        $data = mysqli_query($conn, $iquery);
    }
}
?>
