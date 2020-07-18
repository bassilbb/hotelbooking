<?php
include("db.php");

session_start();
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);


if (isset($_POST['update'])){
    $id = $_POST['id'];
    $checkindate =  $_POST['editcheckindate']; 
    $checkoutdate =  $_POST['editcheckoutdate'];
    $numberofpersons =  $_POST['editnumberofpersons'];
    $budgets =  $_POST['editbudgets'];
    $firstname =  $_POST['editfirstname'];
    $lastname =  $_POST['editlastname'];
    $email =  $_POST['editemail'];
    $phone =  $_POST['editphone'];
    $country =  $_POST['editcountry'];
    $city = $_POST['editcity'];
    $zipcode = $_POST['editzipcode'];
    $roomrequirements = $_POST['editroomrequirements'];

    $query = "UPDATE bookroom SET checkindate='$checkindate', checkoutdate='$checkoutdate',numberofpersons='$numberofpersons',
               budgets='$budgets',firstname='$firstname',lastname='$lastname','email='$email',
              phone='$phone',country='$country',city='$city', zipcode='$zipcode', roomrequirements='$roomrequirements' WHERE id='$id'";
         $query_run = mysqli_query($conn,$query);
        
         if($query_run){
                    $_SESSION['status'] = "Data Updated successfully";
                    $_SESSION['status_register'] = "success"; 
                    header('Location:viewreservation.php');
                }

           else{
                $_SESSION['status']="Data not Updated successfully";
                $_SESSION['status_register'] = "warning"; 
                   header('Location:viewreservation.php');
             }

  mysqli_close($conn);
        
}



if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $sql = "SELECT * FROM bookroom WHERE id=$id" ;
    $result = mysqli_query($conn, $sql);
    
    if($result->num_rows > 0){

        while($row = mysqli_fetch_array($result)){
            $checkindate = $row['checkindate'];
            $checkoutdate = $row['checkoutdate'];
            $numberofpersons = $row['numberofpersons'];
            $budgets = $row['budgets'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $phone = $row['phone'];
            $country = $row['country'];
            $city = $row['city'];
            $roomrequirements = $row['roomrequirements'];
      
   }

        
          
      }
  }

