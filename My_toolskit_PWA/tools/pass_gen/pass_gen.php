
<?php
include_once '../../backend/config.php';
include('../tools_navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator </title>
  <!-- favicon here  -->
  <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.ico">
  <!-- styles import -->
  <link rel="stylesheet" href="../../tools/pass_gen/pass_gen.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- fonts import -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- main logo font and nav bar font import -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap">
  <!-- all contents fonts import -->
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">

</head>

<body>

 <!-- creation of the password Generator -->
 <div class="white container">
  <h2 class="center col s12 m7 l6" style="color: #00796b; text-transform: uppercase;
  font-family: 'Oswald', sans-serif;font-size:30px;">Password Generator
    <a href="#helptracker" class="waves-effect waves-light deep-purple darken-3 btn modal-trigger">
      <i class="material-icons">help</i></a>
    <hr>
  </h2>
</div>
 
   <div class="container">  
     <div class="">  
       <div class="">  
         <span id="pw"> <b>Your Password is Shown Here</b></span>  
         <button id="copy" class="waves-effect waves-light deep-purple darken-3 btn-small"><i class="material-icons">content_copy</i></button>  
       </div>  
     </div>  
     <div class="">  
       <div class="">  
         <lable for="length">Password Length</lable>  
         <input id="len" value="10" type="number" min="8" max="30"/>  
       </div>
 
       <div class=""> 
         <p>
         <label>
         <input id="upper" type="checkbox" checked="checked" class="filled-in deep-purple darken-3"/>
         <span for="upper">Contain Uppercase Letters</span>  
         </label>
         </p>
       </div>  
       <div class="">
         <p>
         <label>
         <input id="lower" type="checkbox"class="filled-in"/>  
         <span for="lower">Contain Lowercase Letters</span> 
       </label>
       </p>   
       </div>  
       <div class="">
         <p>
         <label>  
         <input id="number" type="checkbox" class="filled-in"/> 
         <span for="number">Contain Numbers </span>  
       </label>
       </p> 
       </div>  
       <div class="">
         <p>
         <label>  
         <input id="symbol" type="checkbox" checked="checked" class="filled-in"/>
         <span for="symbol">Contain Symbol</span>
       </label>
       </p>    
       </div> 
   
       <button id="generate" class="waves-effect waves-light deep-purple darken-3 btn">Generate Password</button>  
     </div>  
   </div>  

<!-- modal-content -->

<div id="helptracker" class="modal">
  <div class="modal-content">
    <div class="white container">
      <h5>💡 Tip</h5>
      <blockquote>
        You can generate password by clicking the add
        <b><i>Generate password</i></b>
        but make sure you check the boxes below
        <i class="material-icons">check_box</i>
        also you can choose as per your choice to generate password
        after Generate password make sure you copy the password 
        <i class="material-icons">content_copy</i> and paste it where ever you required.
        <br><tt>thank you</tt>
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
  <script src="../../tools/pass_gen/script.js"></script>

</body>
</html>