

<?php
include_once '../backend/config.php';
// include('../tools_navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Toolkits</title>
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
            <?php
      if (!isset($_SESSION['login'])){
      ?>

      <li><a href="../login_reg_page/login_page.html" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
          <i class="material-icons left">account_circle</i>Login/Sign up</a>
      </li>

      <?php 
    }
      else 
        {
        ?>
        <li><a href="User-Dashboard.php" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
          <i class="material-icons left">account_circle</i>Profile</a>
      </li>

      <?php
    }
      ?>

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
      <?php
      if (!isset($_SESSION['login'])){
      ?>

      <li><a href="../login_reg_page/login_page.html" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
          <i class="material-icons left">account_circle</i>Login/Sign up</a>
      </li>

      <?php 
    }
      else 
        {
        ?>
        <li><a href="User-Dashboard.php" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
          <i class="material-icons left">account_circle</i>Profile</a>
      </li>

      <?php
    }
      ?>
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


 <!-- jquery import -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../js/script.js"></script>

  </body>
</html>


