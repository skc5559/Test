<?php
  //  session_start(); commenting becasue session is already started in topheader.php
      include('topheader.php');
   
?>
<form action="action_loginpage.php" method="post">
    <h3 style="font-size: 20px; background-color: #b11116; color:white; margin-top: 50px; text-align: center; box-shadow: #8b8686 5px 5px 5px; padding:6px;">Credentials Please</h3>
      <div style="border: 2px solid #880000; padding: 10px; font-size: 15px; margin-top: -26px; box-shadow: #8b8686 5px 5px 5px; text-align: left; background: #ffffff;">
    
          
          
<!--
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
 <h3 style="color: red; border: 1px solid blue; padding: 3px;">-->
          <?php 
           if(isset($_SESSION['login_error'])){
  
               echo $_SESSION['login_error'].', try again!'; 
           }
        ?>       
  
      
   
      
     
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1;">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
    </div>
</form>
