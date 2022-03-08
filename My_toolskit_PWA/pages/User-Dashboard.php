<?php
include_once '../backend/config.php';

$user_session = $_SESSION['login'];

// $user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"SELECT username,email from users where id='$user_session'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
$loggedin_id=$row['email'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <!-- favicon here  -->
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">
  <!-- styles import -->
  <link rel="stylesheet" href="../css/style.css">
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
<section class="navbar">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper  teal darken-2">
          <a href="../index.php" class="brand-logo">
            <img src="../assets/main-logo/main-logo.png" alt="brand-logo" id="logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav" class="right hide-on-med-and-down">
            <li><a href="#" onclick="toggleModal();">How to use</a></li>
            <li><a href="about-us.php">About us</a></li>
            <!-- <li><a href="/pages/favorites.html">Favorites</a></li> -->
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger hoverable" href="#!" data-target="dropdown1">&nbsp;
                <i class="material-icons right">more_vert</i></a></li>
            <!-- login button -->


          </ul>
          <!-- dropdown menus -->
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="Disclamer.php">Disclamer</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="privacy policy.php">Privacy Policy</a></li>
            <li><a href="tnc.php">Terms & Conditions</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Here is the Mobile side navbar   -->
    <ul class="sidenav" id="mobile-demo">
      <!-- login button -->

      <li><a href="#" onclick="toggleModal();">How to Use</a></li>
      <li><a href="about-us.php">About us</a></li>
      <!-- <li><a href="/pages/favorites.html">Favorites</a></li> -->
      <li><a href="Disclamer.php">Disclamer</a></li>
      <li><a href="contact-us.php">Contact Us</a></li>
      <li><a href="privacy policy.php">Privacy Policy</a></li>
      <li><a href="tnc.php">Terms & Conditions</a></li>
      <!-- light/dark mode toggle button  in side nav bar  -->
      <!-- <li><a href="#" class="btn-floating btn-small waves-effect waves-light  light-blue accent-4">
      <i class="material-icons left">brightness_4</i></a>
    </li> -->
    </ul>
  </section>


  <div class="section"></div>
  <!-- About the User -->
  <section class="white container">
    <section class="center">
      <h2>User Dashboard</h2>
      <hr>
    </section>
    <br/>
<!-- pratap parui profile  -->
    <div class="col s12 m3 center-on-small-only hoverable">
      <div class="card-panel grey lighten-3">
        <div class="row">
          <div class="col s12 m3">
            <div class="image-container">
              <img src="https://img.icons8.com/material/220/000000/user-male-circle--v1.png"/>
              <!-- <img src="/assets/images/pratap.jpg" alt="profile-pic" class="circle responsive-img">
              <a href="#" title="user-icon" class="white-text">
                <i class="material-icons white-text left">account_circle</i>
              </a> -->
            </div>
          </div>
          <div class="col s12 m9">
            <h4 class="deep-purple-text" id="#">Name - <?php echo $loggedin_session; ?></h4>
            <h5 class="deep-purple-text" id="#">User Name - <?php echo $loggedin_session; ?></h5>
            <h5 class="teal-text left-align" id="#">Email Id - <?php echo $loggedin_id; ?> </h5>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="../backend/logout.php" title="My website" class="white-text"><i class="material-icons white-text left">logout</i>Logout</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    </section>




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
          <img src="../assets/images/dwl-pwa.jpg" alt="h2u" class="responsive-img"> on dektop or on android mobile
          <img src="../assets/images/add2home.jpeg" alt="h2u" class="center-on-small-only responsive-img"> 
          <li>Then just click add or download as per on which ever your device is</li>
          <li>Give some time to download </li>
          <li>after your dowload is finished you will get this notification like this</li>
          <img src="../assets/images/notify.jpeg" alt="h2u" class="center-on-small-only responsive-img"> 
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
    <script src="../js/script.js"></script>
    <script src="../js/app.js"></script>
  
  </body>
  </html>