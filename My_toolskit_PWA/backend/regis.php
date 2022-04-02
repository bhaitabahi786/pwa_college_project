<?php
include_once 'config.php';

if (isset($_SESSION['login'])){
  echo 'session';
  die();
}


// SIgnup api endpoint send username and password parameter (POST method)
if(isset($_POST['create'])){
  // POST Username, email and password params need to be prepared
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];    
    // $sql = "INSERT INTO users (username, email, password) values ('".$username."','".$email."','".$password."')";
    // $conn->query($sql);

    $duplicate=mysqli_query($conn,"select * from users where username='$username' or email='$email'");

    if (mysqli_num_rows($duplicate)>0)
    {
      echo 'false';
      return false;
    }
    else
    {
    // POST Username, email and password params need to be prepared      
      $sql = "INSERT INTO users (username, email, password) values ('".$username."','".$email."','".$password."')";
      $conn->query($sql);
      echo 'true';
      return true;
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
