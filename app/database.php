<?php 
$host_name = "127.0.0.1";
$database = "AccountInformation";
$user_name = "root";
$password = "";
$GCSocket ="/cloudsql/vaporgaming-umd:us-east5:vaporgaming-umd"; 
$GCPort='3306';

$conn = new mysqli($host_name, $user_name,$password,$database,$GCPort,$GCSocket);
  if ($conn->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

    return $conn;