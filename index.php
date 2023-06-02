<?php
require("database.php");
require( "session.php");
if($isLoggedIn){
  header("Location:home.php");
}

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$error = null;
if ($email && $password) {
  $query = $pdo->prepare("SELECT * FROM users WHERE email='$email' AND password='$password'");
  $query->execute();
  $user = $query->fetch(PDO::FETCH_OBJ);
  if (!$user) {
    $error = "Invalid email or password";
  } else {
    $_SESSION['user'] = $user;
    header("Location: home.php");
  }
}
require("./views/login.view.php");
?>