<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
//if (isset($_POST['submit'])) 

//Read from configuration file
$servername = "localhost";
$username   = "root";
$password   = "";
$DB         = "TEST";

if (empty($_POST['email']) || empty($_POST['pass'])) {
    $error = "Email or Password is invalid";
} else {
    
    // Define $username and $password
    $email      = $_POST['email'];
    $pass       = $_POST['pass'];
    $connection = new mysqli($servername, $username, $password, $DB);
    // To protect MySQL injection for Security purpose
    $email      = stripslashes($email);
    $pass       = stripslashes($pass);
    
    // SQL query to fetch information of registerd users and finds user match.
    $query  = "select * from users where pass='$pass' AND Email='$email';";
    $result = mysqli_query($connection, $query);
    
    if ($result->num_rows == 1) {
        $row                    = $result->fetch_assoc();
        $_SESSION['login_user'] = $row["FName"]; // Initializing Session
         $_SESSION['email'] = $row["Email"];
        echo $_SESSION['login_user'];
        //echo 'result'.$result;
        header("location: index.php"); // Redirecting To Other Page
    } else {
        $error = "Username or Password is invalid";
         $_SESSION['login_error'] =$error;
         header("location: login.php"); // Redirecting To Sign in Page again
    }
    mysqli_close($connection); // Closing Connection
}
?>