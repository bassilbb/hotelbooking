<?php
session_start();
include('db.php');
// sinclude('includes/header.php');
// include('includes/navbar.php');


// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(isset($_POST['registerbtn']))
{
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirmpassword =$_POST['confirmpassword'];

 if($password === $confirmpassword)
 {
     $query = "INSERT INTO regadmin (name, email, password)
     VALUES ('$name', '$email','$password')";  
     $query_run = mysqli_query($conn,$query);     
     

     if($query_run)
     {
         $_SESSION['success'] = "New Admin User Registered";
         header('Location: userregister.php');
     }
     else{
         $_SESSION['status']= "New Admin User Not Registered";
         header('Location: userregister.php');
     }
    }
     else{
         $_SESSION['status'] = "Password and Confirm Password Does Not Match";
         header('Location: admin.php');
    }

}











    


  

?>