<?php

$host = "34.162.5.185";
$dbname = "AccountInformation";
$username = "aaronmyrick";
$password = "UMD-3232733174";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;