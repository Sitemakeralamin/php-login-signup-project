<?php

require_once("config.php");


$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$pwd = $_REQUEST["pwd"];

$decryptPwd = md5(sha1($pwd));
$auth = md5(sha1($pwd.$email));


$insertData = "INSERT INTO table_connect(fname,lname,Email,usr_pwd,Auth)VALUES('$fname','$lname ','$email','$decryptPwd','$auth')";

$runQuery = mysqli_query($connect,$insertData);
if($runQuery==true){
    
header("location: signup.php?result=SignUp Sucessfully");
    
}

?>