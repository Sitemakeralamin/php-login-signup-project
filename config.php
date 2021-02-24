<?php

   $host = "localhost";
    $dbUser = "alaminIslam";
    $dbpwd = "alamin98316";
    $dbName="new_test";
    
    $connect = mysqli_connect($host,$dbUser,$dbpwd,$dbName);
    
    if($connect==false){
        
         echo "<h1>Error Establising Database connection!</h1>";
    }


?>