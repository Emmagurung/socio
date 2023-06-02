<?php
session_start();
$isLoggedIn = isset($_SESSION["user"]);
$user = $isLoggedIn ? $_SESSION["user"] : null;
?>