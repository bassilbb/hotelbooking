<?php
include("db.php");
session_start();
   
$id = $_GET['id'];
$query = "DELETE FROM bookroom WHERE id = '$id';";
$result = mysqli_query($conn,$query);

if($query_run){
    $_SESSION['status'] = "Record Has Been  Deleted Successfully"; 
    $_SESSION['status_register'] = "success"; 
    header('location: viewreservation.php');

}
else{
    $_SESSION['status'] = "Record Has Not Been Deleted Successfully"; 
    $_SESSION['status_register'] = "error"; 
    header('location: viewreservation.php');

}
      
// if(isset($_POST['delete'])){
//     $id = $_POST['delete'];
//     echo $id;
//     $mysqli->query("DELETE FROM bookroom WHERE id=$id") or die($mysqli->error());
//     $query_run = mysqli_query($conn,$query);

//     if($query_run){
//         $_SESSION['status'] = "Record Has Been  Deleted Successfully"; 
//         $_SESSION['status_register'] = "success"; 
//         header('location: viewreservation.php');

//     }
//     else{
//         $_SESSION['status'] = "Record Has Not Been Deleted Successfully"; 
//         $_SESSION['status_register'] = "error"; 
//         header('location: viewreservation.php');
    
//     }
    
   
// }

?>

