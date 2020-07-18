 <?php
    include("db.php");
include('includes/header2.php');
include('includes/navbar.php');


    //MYSQL query goes here
$sql = "SELECT register.id, register.firstname,register.lastname, register.email, bookroom.checkindate,bookroom.checkoutdate,bookroom.numberofpersons, bookroom.budgets,  bookroom.phone, bookroom.country, bookroom.city, bookroom.zipcode, bookroom.roomrequirements
FROM register, bookroom
WHERE register.id = bookroom.id
ORDER BY register.id";
  
   $result = $conn->query($sql);
?> 
<!doctype html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <title>View Reservation!</title>
   </head>
   <header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-danger">
       <a class="navbar-brand" href="#">View Reservation Details</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
           <a class="nav-item nav-link active" href="admin.php">Home <span class="sr-only">(current)</span></a>
           <a class="nav-item nav-link" href="about-us.html">About</a>
           <a class="nav-item nav-link" href="rooms.html">Rooms</a>
          </div>
       </div>
     </nav>

   </header> 
   <?php
    if (isset($_SESSION['success']) && $_SESSION['success']!='')
    {
      echo '<h2>'.$_SESSION['success'].'</h2>'; 
      unset($_SESSION['success']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
      echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
    }
    
   ?>
   
 <section>
      <table   class="table">
<thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
           <!-- <th scope="col">Image</th> -->
           <th scope="col">FirstName</th>
           <th scope="col">LastName</th>
            <th scope="col">email</th>
             <th scope="col">Checkin</th>
             <th scope="col">Checkout</th>
             <th scope="col">Nofpersons</th>
             <th scope="col">budgets</th>
             <th scope="col">phone</th>
             <th scope="col">Country</th>
             <th scope="col">City</th>
             <th scope="col">zipcode</th>
             <th scope="col">RmRequirement</th>
             <th scope="col">Action </th>
            <!-- <th scope="col">Action </th> --> 
          </tr>
         </thead>
         <tbody>
         <?php 
      while($rows= mysqli_fetch_assoc($result)): ?>
       <?php if($result->num_rows > 0) ?>
         
           <tr>
           <td> <?php echo  $rows["id"]; ?> </td>
             <!-- <td><img src="images/tobi.jpg" width="40"></td> -->
             <td> <?Php echo  $rows["firstname"]; ?></td>
             <td> <?php echo $rows["lastname"]; ?></td>
             <td> <?php echo $rows["email"]; ?></td>
             <td> <?php echo $rows["checkindate"]; ?></td>
             <td> <?php echo $rows["checkoutdate"]; ?></td>
             <td> <?php echo $rows["numberofpersons"]; ?></td>
             <td> <?php echo $rows["budgets"]; ?></td>
             <td> <?php echo $rows["phone"]; ?></td>
             <td> <?php echo $rows["country"]; ?></td>
             <td> <?php echo $rows["city"]; ?> </td>
             <td> <?php echo $rows["zipcode"]; ?> </td>
             <td> <?php echo $rows["roomrequirements"]; ?></td>
            <td>
              <form action="#" method="POST">
                <input type="hidden" name="editid" value="<?php echo  $rows["id"]; ?>">
              <button type="submit" name="edit" class="badge badge-info p-3">Booked</a> 
             </form>
              </td>
              <!-- <td>
              <a href='delete.php?deleteid=$id' class="badge badge-danger p-3">Delete</a>
              </td> -->
              
             

           </tr>
           <?php endwhile; ?>
      
          
      
         </tbody>
     </table>
  </section>  
    

    
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 </body> 


 <?php 
 include('includes/script.php');
 include('includes/footer2.php');
 
 ?>