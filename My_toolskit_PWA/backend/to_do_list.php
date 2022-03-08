<?php
include_once 'config.php';

if(isset($_POST['add'])){
    $note = $_POST['note'];
    $user_id = $_SESSION['login'];
    $sql = "INSERT INTO tasks (user_id, task) values ('".$user_id."','".$note."')";
    // echo $sql;
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 

}

?>


<html>
    <form action="" method="POST">
    <input name="note"/>
    <button name="add">add</button>

    </form>
</html>

