<?php
include_once 'config.php';

if(isset($_POST['forgot']))
{
    $user_email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email ='".$_POST['email']."'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_name =$row['username'];
	$email_id =$row['email'];
	$password =$row['password'];
    // echo "problem";
	if($user_email===$email_id) {
                echo "email sending";
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid email id';
				}
}
?>

<!-- <!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='forgot' value='Submit'/></td></tr>
</table>
</form>
</body>
</html> -->


<html>

<head>
  <link rel="stylesheet" href="../login_reg_page/com_style.css">

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
            <img src="../assets/main-logo/Frame 3.png" alt="brand-logo" id="logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav" class="right hide-on-med-and-down">
            <li><a href="#" onclick="toggleModal();">How to use</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">All Featues</a></li>
            <li><a href="#">Favorites</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger hoverable" href="#!" data-target="dropdown1">&nbsp;
                <i class="material-icons right">more_vert</i></a></li>
            <!-- login button -->
            <li><a href="#" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
                <i class="material-icons left">account_circle</i>Login/Sign up</a>
            </li>
            <!-- light/dark mode toggle button in nav bar  -->
            <!-- <li><a href="#" class="btn-floating btn-small waves-effect waves-light  light-blue accent-4">
            <i class="material-icons left">brightness_4</i></a>
          </li> -->

          </ul>
          <!-- dropdown menus -->
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Disclamer</a></li>
            <li><a href="#!">Contact Us</a></li>
            <li><a href="#!">Privacy Policy</a></li>
            <li><a href="#!">Terms & Conditions</a></li>
          </ul>

        </div>
      </nav>
    </div>
    <!-- Here is the Mobile side navbar   -->
    <ul class="sidenav" id="mobile-demo">
      <!-- login button -->
      <li><a href="#" class="waves-effect waves-light deep-purple darken-3 btn-large z-depth-2">
          <i class="material-icons  left">account_circle</i>Login/Sign Up</a></li>
      <li><a href="#" onclick="toggleModal();">How to use</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="#">All Featues</a></li>
      <li><a href="#">Favorites</a></li>
      <li><a href="#!">Disclamer</a></li>
      <li><a href="#!">Contact Us</a></li>
      <li><a href="#!">Privacy Policy</a></li>
      <li><a href="#!">Terms & Conditions</a></li>
      <!-- light/dark mode toggle button  in side nav bar  -->
      <!-- <li><a href="#" class="btn-floating btn-small waves-effect waves-light  light-blue accent-4">
      <i class="material-icons left">brightness_4</i></a>
    </li> -->

    </ul>

</section>


  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <h3 class="indigo-text"> Enter your Registered Email ID </h3>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <h1 id ="alert_msg"></h1>
          <!-- <form class="col s12" action="../backend/regis.php" method="POST" autocomplete="off"> -->
            <form class="col s12" action = '' autocomplete="off" method="POST">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='username' />
                <label for='username'>Enter your email id</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='forgot' class='col s12 btn btn-large waves-effect indigo'>Submit</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <!-- light/dark mode button  -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large deep-purple darken-3 hoverable">
      <i class="large material-icons">brightness_4</i>
    </a>
  </div>

  <section class="infomodal">
    <div id="modal3" class="modal">
        <div class="modal-content">
          <h4 id="info-modal-heading">Link Disabled</h4>
          <p id="info-modal-content">Sorry! The Link you're looking for is currently in development phase. So wait for some time till it comes live!</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
      </div>
    </section>

    <!-- jquery import -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script>
    $.ajax({
        type: "POST",
        url: "../backend/check_login.php",
        data: {
        },
        success: function (response) {
            if(response == 'session') {
                // $('body').html('logged in');
                // window.location.href = '';
            }
        },
        beforeSend: function () {
           
        }

    });

    </script> -->
  <script src="../js/script.js"></script>

</body>

</html>

