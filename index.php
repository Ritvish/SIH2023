<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "student_dropout";
$conn = mysqli_connect($host, $username, $password, $database);
if ($conn) {
    echo "Connection succesful";
} else {
    echo "Connection not succesful";
}

?>