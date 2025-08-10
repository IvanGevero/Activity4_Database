<?php

$conn = mysqli_connect("localhost","root","","activityloginform");

if(!$conn){
    die("Connection failed");

}

$email = $_POST['email'] ?? '';
$id = $_POST['id']?? '';
$mobile = $_POST['mobile']?? '';
$password = $_POST['password']?? '';

$sql = "SELECT * FROM `login form` where email ='$email''$id''$mobile'and password = '$password'";
$result = mysqli_query ($conn,$sql);

if(mysqli_num_rows($result) > 0) {
    echo ("location:congrats.html");
    exit();

}
else{
    echo "Login Failed! ";

}
mysqli_close($conn);

?>ww