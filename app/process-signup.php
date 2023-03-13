<?php 
if (empty($_POST["username"])) {
    die("Username is required");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$conn = include __DIR__. "/database.php";
$stmt = $conn->prepare("INSERT INTO `user` (`name`,`password_hash`) VALUES (?,?)");
$stmt->bindValue(1,$_POST["username"],PDO::PARAM_STR);
$stmt->bindValue(2,$password_hash,PDO::PARAM_STR);

if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    echo $e->getMessage();
}
