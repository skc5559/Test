<?php
//Read from configuration file
$servername = "localhost";
$username   = "root";
$password   = "";
$DB         = "TEST";


// Create connection
$conn = new mysqli($servername, $username, $password, $DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!($conn->connect_error)) {
    echo 'connected successfully';
}

// Read Posted data from registration form
//$bname = $_POST["bname"]; // get from table if already exists
//echo  $_POST["veg-nonveg"].$_POST["cusine"].$_POST["item"].$_POST["price"].$_POST["left"].$_POST["lo-hh"].$_POST["lo-mm"].$_POST["lo-ampm"].$_POST["ld-hh"].$_POST["ld-mm"].$_POST["ld-ampm"];

$menutype = $_POST["veg-nonveg"]; // veg or non veg
$cusine = $_POST["cusine"];
$item = $_POST["item"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$lohh = $_POST["lo-hh"];
$lomm = $_POST["lo-mm"];
$loampm = $_POST["lo-ampm"];
$ldhh = $_POST["ld-hh"];
$ldmm = $_POST["ld-mm"];
$ldampm = $_POST["ld-ampm"];
//echo $fname.$contact;
  try{
      $query = "INSERT INTO $menutype (ID,Cusine ,Item ,Price ,Quantity,Shop ,LastOrder ,Lastdelivery ) VALUES ('$item','$cusine','$item',$price,$quantity,'CodeShopname','$lohh:$lomm $loampm','$ldhh:$ldmm $ldampm');";  // See if this table name like this works
       echo $query;
    $data = mysqli_query($conn, $query);  
      echo "Registration Successful :".$data;
     // sleep(20);
      
     // header('Location: index.php');
          
  }
 catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
   // echo 'Try again! Registration Failed becuase of '.e->getMessage();  
       //sleep(2);
  header('Location: index.php');
}
  
?>

