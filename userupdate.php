<?php
include('db.php');

    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $name = $_POST['edit_name'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $usertypeupdate = $_POST['update_usertype'];
        // $conn = mysqli_connect('localhost', 'root', '', 'hoteldb');

        $query = "UPDATE regadmin SET name='$name', email='$email',password='$password', usertype='$usertypeupdate' WHERE id='$id'";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            $_SESSION['success']="Your Data is Updated";
            header('Location:userregister.php');
        }
        else
        {
            $_SESSION['status']="Your Data is not Updated";
            header('userregister.php');
        }


    }

    ?>

