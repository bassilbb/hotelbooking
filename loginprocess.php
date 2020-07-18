<?php
   include("db.php");
   session_start();
// LOGIN USER
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
   
    $query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    echo "alert('you have login successfully')";
    header('location: dashboard.php');
    }else {
        header('location: login.php');
    echo "Wrong username/password combination";

    }
    
    }


?>