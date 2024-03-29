
<?php
include_once '../backend/config.php';
include('pages_common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- favicon here  -->
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">
  <!-- styles import -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- fonts import -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- font awesome cdn import -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- main logo font and nav bar font import -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

  <!-- all contents fonts import -->
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">
<!-- required data for browser -->
  <meta name="theme-color" content="#00796b">
</head>

<body>

  <!-- About the Group -->
  <section class="white container">
    <section class="center">
      <h2>About Us</h2>
      <p class="caption">We are the Group of 2 students from Narsee Monjee Collage.
         <br>This is the last Year Project Implementation for Tybscit</p>
      <hr>
    </section>
    <br/>
<!-- pratap parui profile  -->
    <div class="col s12 m3 center-on-small-only hoverable">
      <div class="card-panel grey lighten-3">
        <div class="row">
          <div class="col s12 m3">
            <div class="image-container">
              <img src="../assets/images/pratap.jpg" alt="profile-pic" class="circle responsive-img">
            </div>
          </div>
          <div class="col s12 m9">
            <h4 class="deep-purple-text">Pratap Parui</h4>
            <div class="chip">Frontend Developer</div>
            <div class="chip">UI/UX Designer</div>
            <div class="chip">Graphic Designer</div>
            <div class="chip">Materialize Expert</div>
            <p class="teal-text left-align">Pratap is an Information Technology under-Grad Student and had curosity in Cloud Computing such as  Google Cloud & AWS also getting knowledege in Crypto Currency (NFT's)</p>
            <p >frontend Developer , Web Dev,Tech geek 💻 always 💗 to do code🧑‍💻 content writer & anime love</p>
            <p>connect with me 👇</p>
            
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://github.com/pratap360" class="fab fa-github fa-lg" style="color:white" title="Github"></a>
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://twitter.com/parui_pratap" class="fab fa-twitter fa-lg " style="color:white" title="Twitter"></a>
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://www.linkedin.com/in/pratap-parui-mr-sumbuddy/" class="fab fa-linkedin fa-lg " style="color:white" title="Linkedin"></a>              
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://www.instagram.com/mr_sumbuddy/" class="fab fa-instagram fa-lg " style="color:white" title="Instagram"></a>
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://unique134.blogspot.com/" title="My website"><i class="material-icons white-text">public</i></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- rahamat ali profile  -->

    <div class="col s12 m3 center-on-small-only hoverable">
      <div class="card-panel grey lighten-3">
        <div class="row">
          <div class="col s12 m3">
            <div class="image-container">
              <img src="../assets/images/rahamat.jpg" alt="profile-pic" class="circle responsive-img">
            </div>
          </div>
          <div class="col s12 m9">
            <h4 class="deep-purple-text">Rahamat Ali</h4>
            <div class="chip">Backend Developer</div>
            <div class="chip">Php Expert</div>
            <div class="chip">Ethical Hacker</div>
            <p class="teal-text left-align">Rahamat Ali is also an Information Technology under-Grad Student and the curosity to learn new things about Hacking and Crypto Currency such as bitcon and drop ship</p>
            <p>connect with me 👇</p>
            
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://github.com/bhaitabahi786" class="fab fa-github fa-lg" style="color:white" title="Github"></a>
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://twitter.com/bhai_tabahi_786" class="fab fa-twitter fa-lg " style="color:white" title="Twitter"></a>
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://www.linkedin.com/in/rahmatalishaikh-bhaitabahi/" class="fab fa-linkedin fa-lg " style="color:white" title="Linkedin"></a>              
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://www.instagram.com/bhai_tabahi_786/" class="fab fa-instagram fa-lg " style="color:white" title="Instagram"></a>
            </p>
            <p class="waves-light waves-effect btn deep-purple darken-3">
              <a href="https://bugcrowd.com/bhai_tabahi_786" title="Bugcrowd"><i class="material-icons white-text">public</i></a>
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
