<pre><?php
  $errors = array();
  
  if ( isset($_GET) ) {
if ( !isset($_GET['name']) || empty($_GET['name']) ) {
	$errors['name'] = "Name is required";
	}
if ( !isset($_GET['email']) || empty($_GET['email']) ) {
	$errors['email'] = "Email is required";
	}
$reasons = ["feedback", "bug", "question"];
if ( !isset($_GET['reason']) || empty($_GET['reason']) ) {
	$errors['reason'] = "Reason is required";
	}
if (in_array('reason', $reasons)) {
	echo "Got the reason";}
if ( !isset($_GET['message']) || empty($_GET['message']) ) {
	$errors['message'] = "Message is required";
	}
if (preg_match ("/@/", 'email'));
}
if (!empty($errors)){
	require("database.php");
    $link = connect();
	$save_message = new save_message();
	$var = $save_message->filter($_GET['params']);
}

  // var_dump($errors);
?></pre>