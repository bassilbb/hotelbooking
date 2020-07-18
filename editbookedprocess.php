<?php
session_start();


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $checkindate = $_POST['edit_checkindate']; 
    $checkoutdate = $_POST['edit_checkoutdate'];
    $numberofpersons = $_POST['edit_numberofpersons'];
    $budgets = $_POST['edit_budgets'];
    $firstname = $_POST['edit_firstname'];
    $lastname = $_POST['edit_lastname'];
    $email = $_POST['edit_email'];
    $phone = $_POST['edit_phone'];
    $country = $_POST['edit_country'];
    $city = $_POST['edit_city'];
    $zipcode = $_POST['edit_zipcode'];
    $roomrequirements = $_POST['edit_roomrequirements'];
    $conn = mysqli_connect('localhost', 'root', '', 'hoteldb');

    $query = "UPDATE bookroom SET checkindate='$checkindate', checkoutdate='$checkoutdate',numberofpersons='$numberofpersons', budgets='$budgets',firstname='$firstname',lastname='$lastname',
    email='$email',phone='$phone',country='$country',city='$city',zipcode='$zipcode',roomrequirements='$roomrequirements' WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success']="Your Data is Updated";
        header('Location:viewreservation.php');
    }
    else
    {
        $_SESSION['status']="Your Data is not Updated";
        header('viewreservation .php');
    }


}


?>