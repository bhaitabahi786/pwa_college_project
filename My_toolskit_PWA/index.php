<?php
include_once 'backend/config.php';
// include('navbar_common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Toolkits</title>
  <!-- favicon here  -->
  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  <!-- styles import -->
  <link rel="stylesheet" href="css/style.css">
  <!-- materialize icons, css & js -->
  <link type="text/css" href="css/materialize.min.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- fonts import -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- main logo font and nav bar font import -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <!-- all contents fonts import -->
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">

  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- manifest import -->
  <link rel="manifest" href="manifest.json">
  <!-- required data for browser -->
  <meta name="theme-color" content="#00796b">
</head>

<body>

  <section class="navbar">

    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper  teal darken-2">
          <a href="#" class="brand-logo">
            <img src=" assets/main-logo/main-logo.png" alt="brand-logo" id="logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav" class="right hide-on-med-and-down">
            <li><a href="#" onclick="toggleModal();">How to use</a></li>
            <li><a href="pages/about-us.php">About us</a></li>
            <!-- <li><a href="/pages/favorites.html">Favorites</a></li> -->
            <li><a href="pages/contact-us.php">Contact Us</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger hoverable" href="#" data-target="dropdown1">&nbsp;
                <i class="material-icons right">more_vert</i></a></li>
            <!-- login button -->

            <?php
            if (!isset($_SESSION['login'])){
            ?>

            <li><a href="login_reg_page/login_page.html" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
                <i class="material-icons left">account_circle</i>Login/Sign up</a>
            </li>

            <?php 
          }
            else 
              {
              ?>
              <li><a href="pages/User-Dashboard.php" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
                <i class="material-icons left">account_circle</i>Profile</a>
            </li>

            <?php
          }
            ?>
            <!-- light/dark mode toggle button in nav bar  -->
            <!-- <li><a href="#" class="btn-floating btn-small waves-effect waves-light  light-blue accent-4">
            <i class="material-icons left">brightness_4</i></a>
          </li> -->

          </ul>
          <!-- dropdown menus -->
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="pages/Disclamer.php">Disclamer</a></li>
            <!-- <li><a href="/pages/contact-us.html">Contact Us</a></li> -->
            <li><a href="pages/privacy policy.php">Privacy Policy</a></li>
            <li><a href="pages/tnc.php">Terms & Conditions</a></li>
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

      <li><a href="login_reg_page/login_page.html" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
          <i class="material-icons left">account_circle</i>Login/Sign up</a>
      </li>

      <?php 
    }
      else 
        {
        ?>
        <li><a href="pages/User-Dashboard.php" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
          <i class="material-icons left">account_circle</i>Profile</a>
      </li>

      <?php
    }
      ?>
      <li><a href="#" onclick="toggleModal();">How to use</a></li>
      <li><a href="pages/about-us.php">About us</a></li>
      <!-- <li><a href="/pages/favorites.html">Favorites</a></li> -->
      <li><a href="pages/Disclamer.php">Disclamer</a></li>
      <li><a href="pages/contact-us.php">Contact Us</a></li>
      <li><a href="pages/privacy policy.php">Privacy Policy</a></li>
      <li><a href="pages/tnc.php">Terms & Conditions</a></li>
      <!-- light/dark mode toggle button  in side nav bar  -->
      <!-- <li><a href="#" class="btn-floating btn-small waves-effect waves-light  light-blue accent-4">
      <i class="material-icons left">brightness_4</i></a>
    </li> -->

    </ul>

  </section>


  <!-- basic tools lists -->
  <section class="tools">

  <div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>Basic Tools</h3>
        <hr>
      </section>

    <?php
      if (!isset($_SESSION['login'])){
      ?>

      <!-- qr code gen -->

      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/tools-logo/qrcode.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Qr Code Generator
              <i class="material-icons right">menu_open</i>
            </span>
            <p><a href="tools/qrcode/qr_code.html"><i class="material-icons left">launch</i>Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Qr Code Generator<i
                class="material-icons right">close</i></span>
            <p>You can Generate qr code just pasting the any link, text or what ever you what to paste</p>
          </div>
        </div>
      </div>

       <!-- Todo list -->
       <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material-sharp/100/000000/ok--v2.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Todo<br>List
              <i class="material-icons right">menu_open</i></span>
            <p><a href="tools/to_do_list/todo-list.html"><i class="material-icons left">launch</i>Click to open</a>
            </p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Todo list<i class="material-icons right">close</i></span>
            <p>You can create you todo list as per your daily Schedule,also delete it after the task is finished</p>
          </div>
        </div>
      </div>
<!-- password genetaror -->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/tools-logo/pwd-gen.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Password Generator
              <i class="material-icons right">menu_open</i></span>
            <p><a href="tools/pass_gen/pass_gen.html"><i class="material-icons left">launch</i>Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Password Generator<i class="material-icons right">close</i></span>
            <p>This is the Password Generator You can Generate as many as password you can !</p>
          </div>
        </div>
      </div>

     <!-- Draw -->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/tools-logo/draw.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Draw
              <i class="material-icons right">menu_open</i>
            </span>
            <p><a href="tools/draw/draw.html" title="upcoming tool in production"><i
                  class="material-icons left">launch</i>Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Draw<i class="material-icons right">close</i></span>
            <p>Just for time pass :) Draw it what you want & download the files & share it to anyone</p>
          </div>
        </div>
      </div>

 <?php 
}
  else 
    {
    ?>

    <!-- qr code gen logged in -->

      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/tools-logo/qrcode.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Qr Code Generator
              <i class="material-icons right">menu_open</i>
            </span>
            <p><a href="tools/qrcode/qrcode.php"><i class="material-icons left">launch</i>Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Qr Code Generator<i
                class="material-icons right">close</i></span>
            <p>You can Generate qr code just pasting the any link, text or what ever you what to paste</p>
          </div>
        </div>
      </div>

   <!-- Todo list login -->
   <div class="col s12 m6 l3" style="padding: 65px 35px;">
    <div class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="https://img.icons8.com/material-sharp/100/000000/ok--v2.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4" title="description">Todo<br>List
          <i class="material-icons right">menu_open</i></span>
        <p><a href="tools/todo_php/todo_index.php"><i class="material-icons left">launch</i>Click to open</a>
        </p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Todo list<i class="material-icons right">close</i></span>
        <p>You can create you todo list as per your daily Schedule,also delete it after the task is finished</p>
      </div>
    </div>
  </div>

  <!-- password generator logged in-->
            <div class="col s12 m6 l3" style="padding: 65px 35px;">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="assets/tools-logo/pwd-gen.png">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4" title="description">Password Generator
                    <i class="material-icons right">menu_open</i></span>
                  <p><a href="tools/pass_gen/pass_gen.php"><i class="material-icons left">launch</i>Click to open</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Password Generator<i
                      class="material-icons right">close</i></span>
                  <p>This is the Password Generator You can Generate as many as password you can !</p>
                </div>
              </div>
            </div>

            <!-- Draw logged in-->
            <div class="col s12 m6 l3" style="padding: 65px 35px;">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="assets/tools-logo/draw.png">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4" title="description">Draw
                    <i class="material-icons right">menu_open</i>
                  </span>
                  <p><a href="tools/draw/draw.php" title="upcoming tool in production"><i
                        class="material-icons left">launch</i>Click to open</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Draw<i class="material-icons right">close</i></span>
                  <p>Just for time pass :) Draw it what you want & download the files & share it to anyone</p>
                </div>
              </div>
            </div>

<?php

    }

      ?>

    </div>
  </section>

  <section class="tools">
    <!-- up coming tools-->
    <div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>login to use these Tools</h3>
        <hr>
      </section>
      <?php
      if (!isset($_SESSION['login'])){
      ?>
      <!-- Expense Calculator -->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/tools-logo/expense-cal.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Expense Calculator
              <i class="material-icons right">menu_open</i>
            </span>
            <p><a href="tools/expense_calculator/expense-cal.html" title="fixing bug"><i
                  class="material-icons left">launch</i>Click to open </a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Expense Calculator<i
                class="material-icons right">close</i></span>
            <p>Here is the Expense Calculator to track the expense of you earnings.</p>
          </div>
        </div>
      </div>

      <?php 
    }
      else 
        {
        ?>

<!-- Expense Calculator logged in usable -->
<div class="col s12 m6 l3" style="padding: 65px 35px;">
  <div class="card hoverable">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="assets/tools-logo/expense-cal.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4" title="description">Expense Calculator
        <i class="material-icons right">menu_open</i>
      </span>
      <p><a href="tools/expense_php/expense-cal.php" title="fixing bug"><i
            class="material-icons left">launch</i>Click to open </a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Expense Calculator<i
          class="material-icons right">close</i></span>
      <p>Here is the Expense Calculator to track the expense of you earnings.</p>
    </div>
  </div>
</div>
<?php

        }

          ?>

      <!-- Habit tracker-->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/tools-logo/habit-track.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">habit tracker
              <i class="material-icons right">menu_open</i>
            </span>
            <p><a href="#" title="upcoming tool in production"><i class="material-icons left">launch</i>Click to
                open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">habit tracker<i
                class="material-icons right">close</i></span>
            <p>You can Generate you good Habits just add it</p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- coming soon tools section -->
  <section class="tools">
    <!-- tool 8 , 9 10 -->
    <div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>Coming Soon</h3>
        <hr>
      </section>
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/news--v1.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Tool Name 8<i
                class="material-icons right">description</i></span>
            <p><a href="#"><i class="material-icons left">launch</i>Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool Name 8<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <!-- tool 9  -->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/puzzle--v1.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Tool Name 9<i
                class="material-icons right">description</i></span>
            <p><a href="#"><i class="material-icons left">launch</i>Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool Name 9<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <!-- tool 10  -->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/share-2.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" title="description">Tool Name 10<i
                class="material-icons right">description</i></span>
            <p><a href="tools/tool-name-7.html"><i class="material-icons left">launch</i>Click To Open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool name 10<i
                class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <div class="chip">tool tag</div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- another seciton for tools -->
  <!-- <section class="tools">
    <div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>"Tools Section 4 name "</h3>
        <hr>
      </section>
    </div>
    </div>
  </section> -->


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
            <img src="assets/images/dwl-pwa.jpg" alt="h2u" class="responsive-img"> on dektop or on android mobile
            <img src="assets/images/add2home.jpeg" alt="h2u" class="center-on-small-only responsive-img"> 
            <li>Then just click add or download as per on which ever your device is</li>
            <li>Give some time to download </li>
            <li>after your dowload is finished you will get this notification like this</li>
            <img src="assets/images/notify.jpeg" alt="h2u" class="center-on-small-only responsive-img"> 
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
    <a class="btn-floating btn-large deep-purple darken-3 hoverable" title="dark mode coming soon">
      <i class="large material-icons">brightness_4</i>
    </a>
  </div>

  <!-- jquery import -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- custom js files  -->
  <script src="js/script.js"></script>
  <script src="js/app.js"></script>
</body>

</html>