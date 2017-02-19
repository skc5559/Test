<!DOCTYPE html>
<html>
    <head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
    }

/* div {
    border-radius: 5px;
    background-color: #f2f2f2;
    border-color: #b11116;
    border-width: 1px; 
    padding: 10px;
    font: Arial;
} */
</style>

    <script>
    
    function validateForm() {
    var fname = document.forms["user_registration"]["fname"].value;
    var email = document.forms["user_registration"]["email"].value;
    var contact = document.forms["user_registration"]["contact"].value;
    var password = document.forms["user_registration"]["pass"].value;
    if (fname == "") {
        alert("First Name must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (contact == "") {
        alert("Contact# must be filled out");
        return false;
    }
    if (pass == "") {
        alert("Password must be filled out and should be same ");
        return false;
    }
   
    else{
        alert("form is correct");
        return true;
    }
}
        
  
function validate(){
var contact=document.user_registration.contact.value;
if (isNaN(contact)){
document.getElementById("contact").innerHTML="Enter Numeric value only";
return false;
}else{
return true;
}
}
    
 </script>
   </head> 
    

<!--<?php include 'topheader.php'; ?>-->
 <body>

<div>
 <form name="user_registration" onsubmit="return validateForm()" action="action_registerUser.php" method="post" >
<!--    <form name="user_registration" onsubmit="return validateForm()" action="" method="post" >-->
     
      <h3 style="font-size: 20px; background-color: #b11116; color: #ffffff; text-align: center; box-shadow: #8b8686 5px 5px 5px; padding: 6px;">User Registration</h3>
      <div style="border: 2px solid #880000; padding: 10px; font-size: 15px; margin-top: -26px; box-shadow: #8b8686 5px 5px 5px; text-align: left; background: #ffffff;">
   

    <input  type="text" id="fname" name="fname" placeholder="First Name*" required/>
          <input  type="text" id="lname" name="lname" placeholder="Last Name"/>
          <input  type="text" id="email" name="email" placeholder="Enter valid Email please!*" required/>
           <input type="password" name="password" size="50" placeholder="Enter your password please!" required/>
          <input type="password" name="re_password" size="50" placeholder="Enter your password again!" required/><br/>
          <input type="text" name="bname"  placeholder="Kitchen Name if you wish to register (optional)!"/>
          
          <input type="text" name="address"  placeholder="Enter your address here!" required/>
          <input type="number" id="contact" name="contact" size="50" placeholder="Your phone Number!*" required/>
   <input type="submit" onsubmit="return validateForm()" value="Submit" />
   </div>
 </form>

</div>
</body>
</html>