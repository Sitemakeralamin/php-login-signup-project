<?php

require_once("config.php");

 $inputUsrName = $_REQUEST["usrname"];
 $inputUsrPwd = $_REQUEST["pwd"];

$auth = md5(sha1($inputUsrPwd.$inputUsrName));

$checkQuery = "SELECT * FROM table_connect WHERE Auth ='$auth'";
$runquery = mysqli_query($connect,$checkQuery);
$checkNumber = mysqli_num_rows($runquery);


if($runquery==true){
    
    if($checkNumber===1){
          setcookie("CUSRPHP",$auth,time()+(86400*7));
    
            header("location: profile.php");
    
        
    }else{
    header("location: login.php?wrong_info");
}

    
    
}





?>