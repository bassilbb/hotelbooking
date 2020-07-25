<?php

include("db.php");



if (isset($_POST['bookroom'])) {
    // receive all input values from the form
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];
    $numberofpersons = $_POST['numberofpersons'];
    $budgets = $_POST['budgets'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $roomrequirements = $_POST['roomrequirements'];
   

}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    // echo "connection was successful";
    }


$sql = "INSERT INTO bookroom (checkindate, checkoutdate, numberofpersons, budgets, firstname, lastname, email, phone, country, city, zipcode,roomrequirements)
VALUES (NOW(), NOW(),'".$_POST["numberofpersons"]."','".$_POST["budgets"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["country"]."','".$_POST["city"]."','".$_POST["zipcode"]."','".$_POST["roomrequirements"].")')";
  
if ($conn->query($sql) === TRUE) {
echo "alert('New Reservation done successfully')";
header('location: index.php');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;

}


$conn->close();



?>