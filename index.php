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

$name = $_POST["name"] ?? '';
$address = $_POST["address"] ?? '';
$email = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';

$sql = "INSERT INTO user (name, address, email, password) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $address, $email, $password);
$stmt->execute();

$conn->close();

?>