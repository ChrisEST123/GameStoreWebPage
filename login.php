<!DOCTYPE html>
<!--1906001-->
<!--Code used from https://www.w3schools.com/howto/howto_css_login_form.asp-->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<form action="database.php" method="post">
    <div class="imgcontainer">
        <img src="unknown.png" href="index.html" alt="Catalog Logo" class="avatar">
    </div>

    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
<?php include("login_process.php"); ?>
<footer>

    <h5>Author: Chris Kristjan Kivaste | Contact:ck19702@essex.ac.uk</h5>

    <a href="index.html">Home Page</a>
    <!--PHP code so when a user is logged in, it shows a log out option-->

</footer>
</html>