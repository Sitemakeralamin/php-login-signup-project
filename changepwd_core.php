<?php

require_once("config.php");


$getCUSRPHP = $_COOKIE["CUSRPHP"];

$oldpwd = $_REQUEST["oldpwd"];
$newpwd= $_REQUEST["newpwd"];
$cnfmpwd= $_REQUEST["cnfmpwd"];

$checkOldPwd = "SELECT * FROM table_connect WHERE Auth = '$getCUSRPHP'";

$runOldPwd = mysqli_query($connect,$checkOldPwd);

if($runOldPwd==true){
    
    
    if(mysqli_num_rows($runOldPwd)===1){
        
        while($getEmailData = mysqli_fetch_array($runOldPwd)){
            
           $usrEmail =  $getEmailData["Email"];
        }
        
        
    }
    
   
}

$generateAuth = md5(sha1($oldpwd . $usrEmail));

if($getCUSRPHP ==$generateAuth && $newpwd==$cnfmpwd){
    
    
    $Haspwd = md5(sha1($newpwd));
    $newAuth = md5(sha1($newpwd.  $usrEmail ));
    
    $updateQuery = "UPDATE table_connect SET usr_pwd = '$Haspwd ',Auth = '$newAuth'";
    $runUpdate = mysqli_query($connect,$updateQuery);
    
    if($runUpdate==true){
        
        setcookie("CUSRPHP"," ",time()-(86400*7));  //LOG OUT ME FIRST

        setcookie("CUSRPHP","$newAuth",time()+(86400*7));  
        
        header("location: changepwd.php?changed=Password changed Sucessfully");
    }
    
    
    
    
}else{
    header("location: changepwd.php?dont_match=Password did not match");
}

    


?>