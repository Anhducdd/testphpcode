<?php
session_start();
require_once 'databaseconnect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
     content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
   
<div class="wrapper animated bounce">
  <h1>Login</h1>
  <hr>
  <form action="post-login.php" method="post">
    <label id="icon" for="username"><i class="fa fa-user"></i></label>
    <input type="text" placeholder="Username" id="username" name="username">
    <label id="icon" for="password"><i class="fa fa-key"></i></label>
    <input type="password" placeholder="Password" id="password" name="password">
    <input type="submit" value="Sign In">
    <hr>
    <div class="crtacc"><a href="#">Create Account</a></div>
  </form>
</div>

</body>
</html>
