<?php 
require_once("header.php");
?>


<div id="contentId">
   

<div id="signupBox">

<b style="color:green;font-size:20px;">
<?php if(isset($_REQUEST["changed"])){
        
       echo  $_REQUEST["changed"];
    }
    
    
    ?>
   
   </b>
   
     
    <form action="changepwd_core.php" method="post" id="formId">
       
       <table>
           
           <tr id="row">
               <td class="label"><label>Old Password</label></td>
               <td><input type="text" name="oldpwd" placeholder="Old Password"></td>
           </tr>
           
             <tr id="row">
               <td class="label"><label>New Password</label></td>
               <td><input type="text" name="newpwd" placeholder="New Password"></td>
           </tr>
           
            <tr id="row">
               <td class="label"><label>Confirm Password</label></td>
               <td><input type="text" name="cnfmpwd" placeholder="Confirm Password" required></td>
           </tr>
           
            
           
            <tr>
               <td class="label"></td>
               <td><input type="submit"name="changepwdBtn" value="Change Password" style="font-size:12px;"></td>
           </tr>
           
       </table>
        
        
        
    </form>
    
    
    
    
    </div>
    
</div>





<?php 
require_once("footer.php");
?>