<?php

$mysqli = new mysqli("localhost", "aaronmyrick", "UMD-3232733174","AccountInformation");
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli