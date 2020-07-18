<tr>
             <td><?php echo $rows['id']; ?></td>
             <td><?php echo $rows['firstname']; ?></td>
             <td><?php echo $rows['lastname']; ?></td>
             <td><?php echo $rows['email']; ?></td>
             <td><?php echo $rows['password']; ?></td>
             <td><?php echo $rows['id']; ?></td>
             <td><?php echo $rows['checkindate']; ?></td>
             <td><?php echo $rows['checkoutdate']; ?></td>
             <td><?php echo $rows['numberofpersons']; ?></td>
             <td><?php echo $rows['budgets']; ?></td>
             <td><?php echo $rows['firstname']; ?></td>
             <td><?php echo $rows['lastname']; ?></td>
             <td><?php echo $rows['email']; ?></td>
             <td><?php echo $rows['phone']; ?></td>
             <td><?php echo $rows['country']; ?></td>
             <td><?php echo $rows['city']; ?></td>
             <td><?php echo $rows['roomrequirements']; ?></td>
           </tr>

           <?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "hoteldb";
// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
// if($conn){
//    echo 'connected';
// }
// else{
//     echo 'Not connected';
    //MYSQL query goes here
    $sql = "SELECT register.id, register.firstname,register.lastname, register.email, bookroom.checkindate,bookroom.checkoutdate,bookroom.numberofpersons, bookroom.budgets,  bookroom.phone, bookroom.country, bookroom.city, bookroom.roomrequirements
FROM register, bookroom
WHERE register.id = bookroom.id
ORDER BY register.id";

// if(isset($_POST['value'])){
//   $result = $_POST['result'];
// }
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
  <title>

  </title>
  <body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
      <tr> 
        <th colspan="17"><h2>View Booked Reservation</h2></th>
      </tr>
        <t>
           <th>Id</th>
           <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
           <th>Checkindate</th>
           <th>Checkoutdate</th>
           <th>Numberofpersons</th>
           <th>Budgets</th>
           <th>Phone</th>
           <th>Country</th>
           <th>City</th>
           <th>Roomrequirements</th>
        

           <?php 
      while($rows= $result->fetch_assoc()){
        if($result->num_rows > 0)
        echo '<tr>
        
        <td>'.  $rows["id"]    .'</td>
        <td>'.  $rows["firstname"]    .'</td>
        <td>'.  $rows["lastname"]    .'</td>
        <td>'.  $rows["email"]    .'</td>
        <td>'.  $rows["checkindate"]    .'</td>
        <td>'.  $rows["checkoutdate"]    .'</td>
        <td>'.  $rows["numberofpersons"]    .'</td>
        <td>'.  $rows["budgets"]    .'</td>
        <td>'.  $rows["phone"]    .'</td>
        <td>'.  $rows["country"]    .'</td>
        <td>'.  $rows["city"]    .'</td>
        <td>'.  $rows["roomrequirements"]    .'</td>

        
        
        </tr>';
     


      }
      ?>

           </table>
           
   
      
      
     
      
    
  </body>
</html>

