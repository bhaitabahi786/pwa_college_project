<h1>hi</h1>
<form action="" method="POST">
<input name="username" />
<input name="password" >
<button name="create" >create</button>
</form>



<h1>hi</h1>
<form action="" method="POST">
<input name="username" />
<input name="password" >
<button name="login" >login</button>
</form>


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

if (isset($_SESSION['login'])){
  echo $_SESSION['login'];
}




// SIgnup api endpoint send username and password parameter (POST method)
if(isset($_POST['create'])){
    $username = $_POST['username'];
    $password = $_POST['password'];    
    $sql = "INSERT INTO users (username, password) values ('".$username."','".$password."')";
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
      echo "id: " . $row["id"];
      $_SESSION['login'] = $row["id"];
    }
  } else {
    echo "0 results";
  }

}






// GET THE TOOLS
// id, title, info
if(isset($_SESSION['login'])) {


  $sql = "select * from tools";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"];
      $_SESSION['login'] = $row["id"];
      ?>
          <h1><?php echo $row["title"]?></h1><br>
          <h1><?php echo $row["info"]?></h1><br>          
      <?php
    }
  } else {
    echo "0 results";
  }

   
}

?>



