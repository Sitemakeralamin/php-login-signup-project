<?php 
require_once("header.php");
?>


<div id="contentId">
   

<div id="signupBox">

<b style="color:green;font-size:20px;">
<?php if(isset($_REQUEST["result"])){
        
       echo  $_REQUEST["result"];
    }
    
    
    ?>
   
   </b>
  
    <form action="signup_core.php" method="post" id="formId">
       
       <table>
           
           <tr id="row">
               <td class="label"><label>First Name</label></td>
               <td><input type="text" name="fname" placeholder="First Name"></td>
           </tr>
           
             <tr id="row">
               <td class="label"><label>Last Name</label></td>
               <td><input type="text" name="lname" placeholder="Last Name"></td>
           </tr>
           
            <tr id="row">
               <td class="label"><label>Email Address</label></td>
               <td><input type="text" name="email" placeholder="Email Address" required></td>
           </tr>
           
            <tr id="row">
               <td class="label"><label>Password</label></td>
               <td><input type="text" name="pwd" placeholder="Password" required></td>
           </tr>
           
            <tr>
               <td class="label"></td>
               <td><input type="submit"name="submitBtn" value="Sign Up"></td>
           </tr>
           
       </table>
        
        
        
    </form>
    
    
    
    
    
    
</div>




</div>

<?php 
require_once("footer.php");
?>