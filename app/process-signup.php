<?php 
if (empty($_POST["username"])) {
    die("Username is required");
}


$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$conn = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, password_hash)
        VALUES (?, ?)";
        
$stmt = $conn->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("ss",
                  $_POST["username"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    
    if ($conn->errno === 1062) {
        die("email already taken");
    } else {
        die($conn->error . " " . $conn->errno);
    }
}