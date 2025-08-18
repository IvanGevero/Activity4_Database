<?php

$conn = mysqli_connect("localhost","root","","itpc2");

if(!$conn){
    die("Connection failed");

}


$id = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE id='$id' AND password='password'";
$result = mysqli_query ($conn,$sql);

if(mysqli_num_rows($result) > 0) {
    echo ("location:congrats.html");
    exit();

}
else{
    echo "Login Failed! ";

}
mysqli_close($conn);

?>