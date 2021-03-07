<?php
session_start();
if ( ! isset($_SESSION['user']) ) {
  header('location: login.php');
  die();
}
session_start();
if ( ! isset($_SESSION['user']) ) {
  die("not allowed");
}
include("database.php");
$link = connect();
$messages = get_messages($link);
foreach ($messages as $message) {
  echo "<pre>";
  var_dump($message);
  echo "</pre>";
}
?>