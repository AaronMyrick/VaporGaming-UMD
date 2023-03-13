<?php

$mysqli = new mysqli("127.0.0.1", "aaronmyrick", "UMD-3232733174","AccountInformation");
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;