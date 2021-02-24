
  

  
   <?php 

require_once("header.php");

if(!isset($_COOKIE["CUSRPHP"])){
    
    header("location: index.php");
}
    


?>
  
   <div id="contentId">

       <div id="profile">

           <h2>Name:
           <?php
               if(isset($_COOKIE["CUSRPHP"])){
    
            $emailCookie = $_COOKIE["CUSRPHP"];
                   
            $nameQuery = "SELECT * FROM table_connect WHERE Auth = '$emailCookie'";
               $runName = mysqli_query($connect,$nameQuery);
                   
                   if($runName==true){
                       
                       while($getRow = mysqli_fetch_array($runName)){
                           
                           echo $getRow["fname"]." ".$getRow["lname"];
                       }
                   }
    
               }
               
            ?>
        
           
           </h2> 
           
          

           <img src="image/IMG_20190707_133314.jpg" alt="my_pic">
           
           <a href="changepwd.php">Change Password</a>
           <p>My name is Md Alamin Islam.I lives in Satkhira .I am student in Barguna polytechnic institute.
               My name is Md Alamin Islam.I lives in Satkhira .I am student in Barguna polytechnic institute.My name is Md Alamin Islam.I lives in Satkhira .I am student in Barguna polytechnic institute.My name is Md Alamin Islam.I lives in Satkhira .I am student in Barguna polytechnic institute.My name is Md Alamin Islam.I lives in Satkhira .I am student in Barguna polytechnic institute.My name is Md Alamin Islam.I lives in Satkhira . </p>



       </div>

   </div>



   <?php require_once("footer.php");?>