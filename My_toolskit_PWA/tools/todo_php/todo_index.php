<?php
include_once '../../backend/config.php';
include('../tools_navbar.php');

if(isset($_POST['add'])){
  $note = $_POST['task'];
  $user_id = $_SESSION['login'];
  $sql = "INSERT INTO tasks (user_id, task) values ('".$user_id."','".$note."')";
  $conn->query($sql);
  // echo $sql;
  // if ($conn->query($sql) === TRUE) {
  //   echo "New record created successfully";
  // } else {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }

}

$user_session = $_SESSION['login'];
$result = mysqli_query($conn,"SELECT * FROM tasks WHERE user_id = $user_session");

$delete = mysqli_query($conn,"SELECT * FROM tasks WHERE user_id = $user_session");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  <!-- favicon here  -->
  <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.ico">
  <!-- styles import -->
  <link rel="stylesheet" href="todo-list.css">
  <link rel="stylesheet" href="../../css/style.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- fonts import -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- main logo font and nav bar font import -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

  <!-- all contents fonts import -->
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">


</head>

<body>

  <!-- Header is created for todo list  -->
  <div class="center">
    <h2>todo list
      <a href="#helptodo" class="waves-effect waves-light deep-purple darken-3 btn modal-trigger">
        <i class="material-icons">help</i></a>
    </h2>
  </div>


  <!-- section in the task  card panel -->
  <div id="tab-tasks" class="white container">
    <div class="card-panel teal darken-2 hoverable">
      <h4 class="white-text">Try to Add your Tasks !</h4>
      <a class="btn-large waves-effect waves-light deep-purple darken-3 right modal-trigger" id="btnadd"
        href="#addtask">
        <i class="material-icons">add</i>
      </a>
    </div>
  </div>
  <br>



  <!-- creating new task  -->
  <div class="white container">
    <hr>
    <ul class="collection with-header z-depth-2">
      <li class="collection-header">
        <h4>All Tasks</h4>
      </li>
      <div class="containerj">

      <?php
      if (mysqli_num_rows($result) > 0) {
      ?>
        
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>

        <li class="collection-item">
        <i class="material-icons deep-purple-text text-darken-3 left">description</i>

          <?php echo $row["task"]; ?>

          <a href="delete_task.php?task=<?php echo $row["task"]; ?>" class="secondary-content">
            <i class="material-icons red-text cdel" id=" ">delete_forever</i>
          </a>
        </li>

        <?php
          $i++;
          }
        ?>

      </div>
      <?php
      }
      else{
            echo "No result found";
        }
      ?>
    </ul>
  </div>

 <!-- all modals are here  -->


  <!-- modal for add Tasks -->
  <!-- "bottom-sheet" , "modal-fixed-footer" this are the different properties -->
  <div id="addtask" class="modal bottom-sheet">
    <form action="" method="POST">
    <div class="modal-content">
      <div class="white container">
        <h4>Add your Tasks</h4>
        <div class="input-field">
          
          <i class="material-icons prefix">text_fields</i>
          <input type="text" id="task_name" name = "task" class="inputj">
          <label for="task_name">Name of the Task</label>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button id="addclick" name = "add" class="modal-close btn deep-purple darken-3">
        <i class="material-icons prefix">add_box</i></button>
      <button class="modal-close btn deep-purple darken-3">
        <i class="material-icons prefix">close</i>
            </button>
    </div>
    </form>
  </div>


<!-- modal for help of todo -->
<div id="helptodo" class="modal">
  <div class="modal-content">
    <div class="white container">
      <h5>💡 Tip</h5>
      <blockquote>
      You can add your tasks by clicking the add 
      <i class="material-icons">add</i>
      Type your task in the input field and click on again 
      <i class="material-icons">add_box</i>
      After done the task you can easliy delete the task via 
      <i class="material-icons">delete_forever</i>this icon <br>
      <tt>thank you</tt>
      </blockquote>
      <a href="#!" class="modal-close btn deep-purple darken-3 ">
        <i class="material-icons">close</i>
      </a>
    </div>
  </div>
</div>

  <!-- modal-content for how to use-->
  <section class="infomodal">
  <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4 id="info-modal-heading">How To Use</h4>
      <h5 id="info-modal-content" class="center-on-small-only">So What is PWA</h5>
      <hr>
      <p class="justify">A progressive web application (PWA), commonly known as a progressive web app, is a type of
        application software delivered through the web, built using common web technologies including HTML, CSS,
        JavaScript, and WebAssembly. It is intended to work on any platform that uses a standards-compliant browser,
        including both desktop and mobile devices.</p>
      <p>Since a progressive web app is a type of webpage or website known as a web application, they do not require
        separate bundling or distribution. Developers can just publish the web application online, ensure that it
        meets baseline "installability requirements", and users will be able to add the application to their home
        screen.Publishing the app to digital distribution systems like Apple App Store or Google Play is optional</p>
        <h5 id="info-modal-content" class="center-on-small-only">how to add this web app</h5>
        <hr>
        <p><b>Here are the steps to add</b></p>
        <ol>
          <li>First and formost you will see the download icon on the address bar of your browser if you use chrome </li>
          <img src="../../assets/images/dwl-pwa.jpg" alt="h2u" class="responsive-img"> on dektop or on android mobile
          <img src="../../assets/images/add2home.jpeg" alt="h2u" class="center-on-small-only responsive-img"> 
          <li>Then just click add or download as per on which ever your device is</li>
          <li>Give some time to download </li>
          <li>after your dowload is finished you will get this notification like this</li>
          <img src="../../assets/images/notify.jpeg" alt="h2u" class="center-on-small-only responsive-img"> 
          <li>Now you will see the app icon on your home screen Hurray!</li>
        </ol>
        <p>Now your Good to go</p>
        <h5 id="info-modal-content" class="center-on-small-only">special features</h5>
        <hr>
        <p class="deep-purple-text">
          <i>It can work offline as it is a native web app after net permits it works like as usual</i>
        </p>

        <!-- btn for know more  -->
        <span class="waves-light waves-effect btn deep-purple darken-3">
          <a href="https://web.dev/progressive-web-apps/" target="_blank" class="white-text">To know More Info click me</a>
        </span>
    
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
</section>

  <!-- light/dark mode button  -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large deep-purple darken-3 hoverable">
      <i class="large material-icons">brightness_4</i>
    </a>
  </div>



  <!-- jquery import -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <script src="../../js/script.js"></script>
  <!-- <script src="todo-list.js"></script> -->
</body>

</html>





