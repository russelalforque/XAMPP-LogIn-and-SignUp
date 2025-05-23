<?php

$servername="localhost";
$username="root";
$password="";
$dbname= "practice";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection fialed: ". $conn->connect_error);
} else {
    echo "Connected successfully <br>";
}

//To Sign Up

$email = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';

$sql = "SELECT * FROM user WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

$conn->close();

?>