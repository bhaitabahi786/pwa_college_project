<?php
include_once 'backend/config.php';
include('navbar_common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Toolkits</title>

  <link rel="manifest" href="manifest.json">
  <script src="js/app.js"></script>

  <!-- favicon here  -->
  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  <!-- styles import -->
  <link rel="stylesheet" href="css/style.css">
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

  <!-- all tools lists -->
  <section class="tools">

    <!-- tool 1 -->
    <?php
    if (!isset($_SESSION['login'])){
    ?>

<div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>Tools Section 1</h3>
        <hr>
      </section>
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/file--v2.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"> u are not logged in
              <i class="material-icons right">more_vert</i>
            </span><p><a href="tools/todo_php/todo_index.php">Click to open</a></p>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool name 1<i class="material-icons right">close</i></span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, necessitatibus.</p>
          </div>
        </div>
      </div>

      <?php 
          }
            else 
              {
              ?>

    <div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>Tools Section 1</h3>
        <hr>
      </section>
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/file--v2.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"> To do list php based
              <i class="material-icons right">more_vert</i>
            </span><p><a href="tools/todo_php/todo_index.php">Click to open</a></p>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool name 1<i class="material-icons right">close</i></span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, necessitatibus.</p>
          </div>
        </div>
      </div>

      <?php
              }
                ?>

      <!-- next tool 2-->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material-sharp/100/000000/ok--v2.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">expense php
              <i class="material-icons right">more_vert</i>
            </span><p><a href="tools/expense_php/expense-cal.php">Click to open</a></p>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool name 2<i class="material-icons right">close</i></span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, necessitatibus.</p>
          </div>
        </div>
      </div>
      <!-- next tool 3-->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material-sharp/100/000000/settings.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Tool Name 3
              <i class="material-icons right">more_vert</i>
            </span><p><a href="#">Click to open</a></p>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool name 3<i class="material-icons right">close</i></span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, necessitatibus.</p>
          </div>
        </div>
      </div>
      <!-- next tool 4-->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/gifs/icons8-edit.gif">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Tool Name 4
              <i class="material-icons right">more_vert</i>
            </span><p><a href="#">Click to open</a></p>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool name 4<i class="material-icons right">close</i></span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque commodi pariatur dolore esse, aliquam ab?
            </p>
          </div>
        </div>
      </div>

      <section class="tool-catogries center">
        <h3>Tools Section 2</h3>
        <hr>
      </section>
      <!-- next tool 5-->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/gifs/icons8-ok.gif">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Expense Calculator
              <i class="material-icons right">more_vert</i>
            </span><p><a href="tools/expense_calculator/expense-cal.html">Click to open </a></p>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Expense Calculator<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <!-- next tool 6-->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/gifs/icons8-document.gif">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Password Generator<i
                class="material-icons right">more_vert</i></span>
            <p><a href="tools/pass_gen/pass_gen.html">Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Password Generator<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <!-- next tool 7 -->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/bookmark--v1.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Todo list<i
                class="material-icons right">more_vert</i></span>
            <p><a href="tools/to_do_list/todo-list.html">Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Todo list<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- different section for different tools  -->
  <section class="tools">
    <!-- tool 8 , 9-->
    <div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>Tools Section 3</h3>
        <hr>
      </section>
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/news--v1.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Tool Name 8<i
                class="material-icons right">more_vert</i></span>
            <p><a href="#">Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool Name 8<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <!-- todo:  -->
      <!-- fixme:  -->
      <!-- tool 9  -->
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/puzzle--v1.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Tool Name 9<i
                class="material-icons right">more_vert</i></span>
            <p><a href="#">Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool Name 9<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- another seciton for tools -->
  <section class="tools">
    <div class="row" style="padding-left: 30px; padding-right: 30px;">
      <section class="tool-catogries center">
        <h3>Tools Section 4</h3>
        <hr>
      </section>
      <div class="col s12 m6 l3" style="padding: 65px 35px;">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://img.icons8.com/material/100/000000/share-2.png">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Tool Name 10<i
                class="material-icons right">more_vert</i></span>
            <p><a href="tools/tool-name-7.html">Click to open</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Tool name 10<i
                class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

 
<!-- modal-content -->

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


  <!-- light/dark mode button  -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large deep-purple darken-3 hoverable">
      <i class="large material-icons">brightness_4</i>
    </a>
  </div>


  <!-- jquery import -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>