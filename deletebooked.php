
<?php
include('db.php');
session_start();

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE  FROM bookroom WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: editreservation.php');
    }
    else
    {
        $_SESSION['success'] = "Your Data Is Not Deleted";
        header('Location: editreservation.php');
    }
}
?>