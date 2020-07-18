<?php
include('db.php');

session_start();
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(isset($_POST['registerbtn']))
{
    $name =$_POST['name'];
    $email =$_POST['email'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $confirmpassword =$_POST['confirmpassword'];
}
 if($password === $confirmpassword)
 {
     $query = "INSERT INTO `regadmin`(`id`, `name`, `email`, `username`, `password`, `confirmpassword`) VALUES ($id, $name, $email, $username,$password,$confirmpassword)";
     $query_run = mysqli_query($conn,$query);

     if($query_run)
     {
         $_SESSION['success'] = "New Admin User Registered";
         header('Location: adminregister.php');
     }
     else{
         $_SESSION['status']= "New Admin User Not Registered";
     }
    }
     else{
       $_SESSION['status'] = "Password and Confirm Password Does Not Match";
    }

     
 

?>