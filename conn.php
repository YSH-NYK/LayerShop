<?php
$host="localhost";
$user="root";
$pass="";
$db="layers";

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn)
{
    echo "DB  Connected";
}
else{
    echo " DB not Connected ";
}
?>