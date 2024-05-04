<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "projet_web"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo "Connexion échouée : ".$conn->connect_error;
}
?>