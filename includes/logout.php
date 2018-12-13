<?php session_start(); ?>

<?php

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();

//$_SESSION['username'] = null;
//$_SESSION['firstname'] = null;
//$_SESSION['lastname'] = null;
//$_SESSION['user_role'] = null;

header("Location: ../index.php");

?>

