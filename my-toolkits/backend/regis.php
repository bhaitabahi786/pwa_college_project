<?php
include_once 'config.php';

if (isset($_SESSION['login'])){
  echo 'session';
  die();
}


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


// Login api endpoint send username and password parameter (POST method)
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];    
  $sql = "select * from users where username = '".$username."' and password = '".$password."'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $_SESSION['login'] = $row["id"];
      echo 'true';
      return true;
    }
  } else {
    echo 'false';
    return false;
  }

}

?>
