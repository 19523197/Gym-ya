<?php
session_start();

$_SESSION['id'] = '';
$_SESSION['username'] = '';
$_SESSION['password'] = '';
$_SESSION['email'] = '';
$_SESSION['contributor'] = '';

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['email']);
unset($_SESSION['contributor']);

session_unset();
session_destroy();
header("location:../index.php");
?>