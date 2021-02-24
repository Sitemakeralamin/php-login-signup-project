






 <?php 

require_once("header.php");

if(isset($_COOKIE["currentUsr"])){
    
    header("location: profile.php");
    
}


?>
   <div id="contentId">
      
      <h3>Login Form:</h3>
           <?php
           
           if(isset($_REQUEST["wrong_info"])){
               
               echo"<font color = 'red' >Username and Password is wrong!</font>";
           }
           
           
           
           ?>
       <div id="loginBox">
           
            

           <form action="login_core.php" method="post">
               
            <input type="text" name="usrname" placeholder="UserName"><br><br>  
            <input type="password" name="pwd" placeholder="Password"><br>  <br>
            <input type="submit" name="submit_Btn" value="Login">   
               
           </form> 
           
             <b>Create a new account?<a href="signup.php">SignUp</a></b>
             
                
                                         
       </div>
   </div>
  
   
   
    <?php require_once("footer.php");?>
