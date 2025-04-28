<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

include('connection.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$validUser = $_SESSION['validUser'];

$sql = "UPDATE contacts SET firstName='$firstName', lastName='$lastName', age='$age', phone='$phone' WHERE email = '$validUser' LIMIT 1";

if ($conn->query($sql)===TRUE) {
    echo "Records Updated";
}
else {
    echo "Error updating records";
}

$conn->close();