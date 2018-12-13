<?php ob_start();

define("DB_HOST", "");
define("DB_USER", "");
define("DB_PASSWORD", "");
define("DB_NAME", "");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>