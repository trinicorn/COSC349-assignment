<?php
$user = 'admin';
$password = 'fuzcosc349';
$db = 'goals';
$host = 'goals.cxsilhrkvyds.us-east-1.rds.amazonaws.com';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

?>
