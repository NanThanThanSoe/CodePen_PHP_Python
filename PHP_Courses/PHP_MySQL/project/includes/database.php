<?php

//p[aram to connect to database]
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "phptutorial";

//connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);  // always use mysqli, it is improve version of mysql


if (!$conn) {
    die("Database connection failed!");
} 

?>