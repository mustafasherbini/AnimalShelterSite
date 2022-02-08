<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName="shelter";

$con =  mysqli_connect($serverName, $username, $password, $dbName);
if(mysqli_connect_errno()){
    echo "failed";
    exit();
}


?>
