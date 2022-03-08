<?php
include_once '../../backend/config.php';
include('../tools_navbar.php');

$total_income = $total_exp = $balance = $count_inc = $count_exp = $row_length = 0;

if(isset($_POST['add'])){
  $date = $_POST['date'];
  $newDate = date("Y-m-d", strtotime($date));
  $income = $_POST['income'];
  $expense = $_POST['exp'];
  $category = $_POST['category'];
  $user_id = $_SESSION['login'];
  $sql = "INSERT INTO exp_tool (date, income, expense, category, user_id) values ('".$newDate."','".$income."','".$expense."','".$category."','".$user_id."')";
  $conn->query($sql);
  // echo $sql;
  // if ($conn->query($sql) === TRUE) {
  //   echo "New record created successfully";
  // } else {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }
  
}

$user_session = $_SESSION['login'];
$detail = mysqli_query($conn,"SELECT * FROM exp_tool WHERE user_id = $user_session");

$for_bal = mysqli_query($conn,"SELECT * FROM exp_tool WHERE user_id = $user_session");

if (mysqli_num_rows($for_bal) > 0) {

  $i=0;
  while($row = mysqli_fetch_array($for_bal)) {
// $row = mysqli_fetch_array($detail);

$total_income += $row["income"];

$total_exp += $row["expense"];

$i++;
}


$balance = $total_income - $total_exp;
// echo $balance;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expense Calculator</title>
  <!-- favicon here  -->
  <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.ico">
  <!-- styles import -->
  <link rel="stylesheet" href="expense-style.css">

  <link rel="stylesheet" href="../../css/style.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- fonts import -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- main logo font import -->
  <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&display=swap" rel="stylesheet">

  <!-- nav bar font import  -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

  <!-- all contents fonts import -->
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">


</head>

<body>

  <!-- main section for expense_calculator -->
  <div class="white container">
    <h2 class="center col s12 m7 l6" style="font-size: 35px;">Expense Tracker
      <a href="#helptracker" class="waves-effect waves-light deep-purple darken-3 btn modal-trigger">
        <i class="material-icons">help</i></a>
      <hr>
    </h2>
  </div>

 <!-- form for calculation -->

  <!-- section in the expense card panel -->
  <div id="tab-tasks" class="white container">
    <div class="card-panel teal darken-2 hoverable">
      <h5 id="amt" class="white-text right amttext">
      <?PHP
	      echo $balance;

        ?>
        <!-- <span>₹</span> -->
        <div class="col s12 m2 l1">
          <div class="input-field col s12">
            <select class="browser-default">
              <option value="rs">₹</option>
              <option value="drs">$</option>
              <option value="eur">£</option>
              <option value="jpy">¥</option>
            </select>
          </div>
        </div>
      </h5>
      <h4 class="white-text">You Spent</h4>
    </div>
  </div>
  <br>

 
  <!-- Three tiled header -->
  <div class="container">
    <ul class="tabs tabs-fixed-width  z-depth-2">
      <li class="tab">
        <a href="#addexp" id="" class="active">Add</a>
      </li>
      <li class="tab">
        <a href="#gettable" id="">Full list</a>
      </li>
    </ul>
    <!-- all the content of the tabs  -->

    <div id="addexp">
      <!-- Add Expense Div -->
      <div class="container expenseDiv">
        <div class="col s12">
          <h4 style="margin-left: 12px;">All Expense</h4>
        </div>
        <div class="row">

        <!-- PHP form  -->
          <form  class="col s12" method = "post" action = " ">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">date_range</i>
                <input id="date" type="text" class="datepicker" name = "date" />
                <label for="date">Date</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">money</i>
                <input id="income" type="number" class="validate" name = "income" />
                <label for="income">income</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">money</i>
                <input id="expense" type="number" class="validate" name = "exp" />
                <label for="expense">expense</label>
              </div>
              <!-- <div class="input-field col s12">
                <i class="material-icons prefix">format_list_bulleted</i>
                <select id="catagory" name = "">
                  <option value="" selected disabled>Select Catagory</option>
                  <option value="household">Household</option>
                  <option value="food">Food</option>
                  <option value="taxi">Taxi</option>
                  <option value="grocery">Grocery</option>
                  <option value="type">Type my own</option>
                </select>
                <label>Select catagory</label>
              </div> -->
              <div id="typemo" class="input-field col s12">
                <i class="material-icons prefix">post_add</i>
                <input id="addcatagory" type="text" class="validate" name = "category" />
                <label for="addcatagory">Type my own</label>
              </div>
              <div class="col s12 subBtn">
                <button id="addexpense" class=" waves-effect waves-light deep-purple darken-3 btn" name = "add">
                  <i class="material-icons right">add</i>Add</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="gettable">
      <!-- Table list -->
      <div class="table">

      <?php
      if (mysqli_num_rows($detail) > 0) {
      ?>

        <table class="striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Income</th>
              <th>Expense</th>
              <th>Category</th>
            </tr>
          </thead>
          <tbody id="addrows">
            <!-- <tr>
              <td>1</td>
              <td>9-1-22</td>
              <td>54</td>
              <td>grocery</td>
            </tr> -->

            <?php
            $i=0;
              while($row = mysqli_fetch_array($detail)) {
            ?>
           
           <tr>
              <!-- <td><?php echo $row["id"]; ?></td> -->
              <td><?php echo $row["date"]; ?></td>
              <td><?php echo $row["income"]; ?></td>
              <td><?php echo $row["expense"]; ?></td>
              <td><?php echo $row["category"]; ?></td>
              <td><a href="delete.php?task=<?php echo $row["id"]; ?>" >
            <i class="material-icons red-text cdel" id=" ">delete_forever</i>
          </a></td>
            </tr>

            <?php
            $i++;
            }
            ?>
          </tbody>
        </table>

        <?php
          }
          else{
               echo "No result found";
              }
            ?>

      </div>
    </div>
  </div>

  <!-- modal for help of expense tracker -->
  <!-- fixme: remaing to add the actuall detaials for this help btn  -->
  <div id="helptracker" class="modal">
    <div class="modal-content">
      <div class="white container">
        <h5>💡 Tip</h5>
        <blockquote style="border-color: #5d32ac;">
          You can add your expense by clicking the add
          <i class="material-icons">add</i>
          Type your expense in the input field also provide all the required detials
          After done with the adding the detials you can check the full list tab 
          <b>also you can see the amount in the you expense section 
            <u>as well as you can change the type of currency that you are using</u></b><br>
          <tt>thank you</tt>
        </blockquote>
        <a href="#!" class="modal-close btn deep-purple darken-3 ">
          <i class="material-icons">close</i>
        </a>
      </div>
    </div>
  </div>


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

  <!-- back button  -->
  <!-- <section class="back-button right">
  <div class="btn">
  <a href="/index.html" class="waves-effect waves-light deep-purple darken-3 btn hoverable">
    <i class="material-icons left">arrow_back</i>Back to Home</a>
</div>
</section> -->


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

  <!-- todo: add the script later  -->
  <script src="../../js/script.js"></script>
  <!-- <script src="/tools/expense_calculator/mychart.js"></script> -->
  <script src="expense.js"></script>

</body>

</html>