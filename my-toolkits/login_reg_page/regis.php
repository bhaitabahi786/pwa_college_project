<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo "connected";

// if (isset($_SESSION['login'])){
//   echo $_SESSION['login'];
// }




// SIgnup api endpoint send username and password parameter (POST method)
if(isset($_POST['create'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];    
    $sql = "INSERT INTO users (username, email, password) values ('".$username."','".$email."','".$password."')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 

}

?>
