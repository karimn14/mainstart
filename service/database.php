<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "account";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error){
    echo "ERR_DB_CONNECT";
    die("error");
}


?>