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
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$bname = $_POST["bname"];
//echo $fname.$contact;
  try{
      $query = "INSERT INTO users (FName,LName,Email,Pass,Address,Contact,BName) VALUES ('$fname','$lname','$email','$password','$address',$contact,'$bname');"; 
       
    $data = mysqli_query($conn, $query);  
      echo "Registration Successful ";
     // sleep(20);
      
      header('Location: index.php');
          
  }
 catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
   // echo 'Try again! Registration Failed becuase of '.e->getMessage();  
       //sleep(2);
  header('Location: index.php');
}
  
?>

