<?php
require("database.php");
require( "session.php");
if($isLoggedIn){
  header("Location:home.php");
}
$firstName = isset($_POST['first_name']) ? $_POST['first_name'] : null;
$lastName = isset($_POST['last_name']) ? $_POST['last_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$error = null;
if ($email && $password && $firstName && $lastName) {
  try {
    $query = $pdo->prepare("INSERT INTO users(first_name, last_name, email, password) values (?,?,?,?)");
    $query->execute([$firstName, $lastName, $email, $password]);
    header("Location: index.php");
  } catch (PDOException $e) {
    $error = "Something went wrong!";
  }
}
require("./views/register.view.php");
?>