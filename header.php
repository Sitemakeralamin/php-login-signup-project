
<?php
session_start();

require_once("config.php");
if(isset($_COOKIE["CUSRPHP"])){
$currentAuth = $_COOKIE["CUSRPHP"];

$CHECKAUTH = "SELECT * FROM table_connect WHERE Auth = '$currentAuth '";

$run =mysqli_query($connect,$CHECKAUTH);

if($run==true){
    
  if(mysqli_num_rows($run)===0){
      
      setcookie("CUSRPHP"," ",time()-(86400*7));

      header("location: login.php");
  } 
}

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     

      <div id="header">
       <h2>welcome to my website</h2>
       <div id="menuId">
       <a href="index.php">Home</a>
       
       <?php
           if(isset($_COOKIE["CUSRPHP"])){
    
        echo '<a href="profile.php">Profile</a>';
    
           }

           ?>
           
       <?php
           if(!isset($_COOKIE["CUSRPHP"])){
    
        echo '<a href="login.php">Login</a>';
    
           }else{
               echo'<a href="logout.php">Logout</a>';
           }
           
           ?>
          </div>
    </div>