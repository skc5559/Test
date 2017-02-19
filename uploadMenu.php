<!DOCTYPE html>
<html>
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
     <script language="JavaScript">
    function showInput() {
        document.getElementById('display').innerHTML = 
                    document.getElementById("user_input").value;
    }
         
  </script>

<?php
    include 'topheader.php';
    ?>
 
<div style="margin-top:60px;">

  <form>
      <input type="text" name="message" id="user_input" placeholder="Enter Busniess Name here"></input>
  </form>


    <input type="submit" onclick="showInput();"></input><br/>
</div>       
   
<div>
  <form  method="post" action="action_uploadMenu.php">
     
      <h3 style="font-size: 20px; background-color: #b11116; color: #ffffff; text-align: center; margin-top: 50px; box-shadow: #8b8686 5px 5px 5px; padding: 6px;"><span id='display'>Upload Menu</span></h3>
      <div style="border: 2px solid #880000; padding: 10px; font-size: 15px; margin-top: 10px; box-shadow: #8b8686 5px 5px 5px; text-align: left; background: #ffffff;">
<!--   <input type="text" name="asdfa" onkeyup="showInput();"></input>-->
    <select id="veg-nonveg" name="veg-nonveg" placeholder="Select Category">
      <option  value="Veg">Veg</option>
      <option  value="NonVeg">NonVeg</option>
      </select>      
<!--	<label for="cusine">Cusine</label>-->
	<select id="cusine" name="cusine" placeholder="">
      <option value="North Indian">North Indian</option>
      <option value="South Indian">South Indian</option>
      <option value="American">American</option>
	  <option value="Chinese">Chinese</option>
	  <option value="Thai">Thai</option>
	  <option value="Other">Other</option>
    </select>
<!--	<label for="menu">Item</label>-->
    <input  type="text" id="item" name="item" placeholder="Menu Item"/>
<!--	<label for="menu">Price</label>-->
    <input  type="float" id="price" name="price" placeholder="Price"/>
      <input  type="number" id="quantity" name="quantity" placeholder="Quantity on sale" min="1"/><br/>
    
	<label for="menu">Last Order    : </label>
   
   	<select id="lo-hh" name="lo-hh" style="width: 80px" placeholder="HH">
   <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
	  <option value="04">04</option>
	  <option value="05">05</option>
	  <option value="06">06</option>
	  <option value="07">07</option>
	   <option value="08">08</option> 
        <option value="09">09</option>
	    <option value="10">10</option>
		 <option value="11">11</option>
		  <option value="12">12</option>
    </select> :
	<select id="lo-mm" name="lo-mm" style="width: 80px" placeholder="MM">
	 <option value="00">00</option>
     <option value="10">10</option>
      <option value="15">15</option>
      <option value ="20">20</option>
	  <option value="30">30</option>
	  <option value="40">40</option>
	  <option value="45">45</option>
	  <option value="50">50</option>
	   
    </select>
	
	<input type="radio" name="lo-ampm" value="AM" > AM</input>
  <input type="radio" name="lo-ampm" value="PM"> PM</input><br>
<label for="menu">Last Delivery : </label>

   
   	<select id="ld-hh" name="ld-hh" style="width: 80px" placeholder="HH">
   <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
	  <option value="04">04</option>
	  <option value="05">05</option>
	  <option value="06">06</option>
	  <option value="07">07</option>
	   <option value="08">08</option> <option value="09">09</option>
	    <option value="10">10</option>
		 <option value="11">11</option>
		  <option value="12">12</option>
    </select> :
	<select id="ld-mm" name="ld-mm" style="width: 80px" placeholder="MM">
	 <option value="00">00</option>
     <option value="10">10</option>
      <option value="15">15</option>
      <option value ="20">20</option>
	  <option value="30">30</option>
	  <option value="40">40</option>
	  <option value="45">45</option>
	  <option value="50">50</option>
	   
    </select>
	
	<input type="radio" name="ld-ampm" value="AM" > AM</input>
  <input type="radio" name="ld-ampm" value="PM"> PM</input><br/>
   <input type="submit" value="Submit"/>
   </div>
 </form>

</div>

</body>
</html>
