<?php
if ( isset($_POST['username']) ) {
  // start the session
  session_start();
  // get the user details
  $user_data = get_user($link, $_POST['username']);
  // hash the submitted password
  $hashed_password = sha1( $_POST['password'] . $user_data['salt'] );
  // check the password matches
  if ($hashed_password === $user_data['password']) {
  echo "Password was correct";
  $_SESSION['user'] = $user_data;
  } else {
  echo "password was wrong";
  }
}
?>