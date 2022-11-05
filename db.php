<?php

//Server
$server = 10.0.5.73;

$username = "root";

$passsword = "password";

$conn = new mysqli($servername, $username, $passsword);

//Connection
if($conn -> connection_error){
    die("Connection failure: " + $conn -> $conn->connect_error);
}

$conn->close();
?>