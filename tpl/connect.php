<?php

$host="localhost";
$pass="";
$username="root";
$dbname="biozem";
$link  = mysqli_connect($host, $username, $pass, $dbname);
mysqli_set_charset($link, 'utf8mb4');

?>