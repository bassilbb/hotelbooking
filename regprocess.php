  <?php
include("db.php");
$firstname = $lastname = $password = $email = $username = "";


if (isset($_POST['register'])) {
// receive all input values from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email =  $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
echo "connection was successful";
}

$sql = "INSERT INTO register (firstname, lastname, email, username, password, confirmpassword)
VALUES ('$firstname', '$lastname', '$email', '$username','$password', '$confirmpassword')";
if ($conn->query($sql) === TRUE) {
 $_SESSION['status'] = "Email Already Taken. Please Try Another One";
 $_SESSION['status_register'] = "error";
 header('location: login.php');
} 
else 
{
  if($query_run){
    $_SESSION['status'] = "Registration was successfully";
    $_SESSION['status_register'] = "success"; 
    header('location: register.php');
    }
    else{
      $_SESSION['status'] = "Registration was not successfull";
      $_SESSION['status_register'] = "error"; 
      header('location: register.php');
    }  
}
   

 }

$conn->close();






    // // by adding (array_push()) corresponding error unto $errors array
    // if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    // if (empty( $lastname)) { array_push($errors, "Lastname is required"); }
    // if (empty($username)) { array_push($errors, "Username is required"); }
    // if (empty($email)) { array_push($errors, "Email is required"); }
    // if (empty($password)) { array_push($errors, "Password is required"); }
    // if ($password!= $confirmpassword) {
    // array_push($errors, "The two passwords do not match");
    // }
    // // first check the database to make sure
    // // a user does not already exist with the same username and/or email
    // $register_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
    // $result = mysqli_query($hoteldb, $register_check_query);
    // $register = mysqli_fetch_assoc($result);
    // if ($register) { // if user exists
    // if ($register['username'] === $username) {
    // array_push($errors, "Username already exists");
    // }
    // if ($register['email'] === $email) {
    // array_push($errors, "email already exists");
    // }
    // }
    
    // // Finally, register user if there are no errors in the form
    // if (count($errors) == 0) {
    // $password = md5($password);//encrypt the password before saving in the database
    // echo $password ;
    // $query = "INSERT INTO register(username, email, password)
    // VALUES('$username', '$email', '$password')";
    // mysqli_query($hoteldb, $query);
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    // header('location: login.php');
    // }
    



 


?>

 
