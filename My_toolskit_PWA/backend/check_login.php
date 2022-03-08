<?php
include_once 'config.php';
// echo "connected";

if (isset($_SESSION['login'])){
  echo 'session';
  die();
}
