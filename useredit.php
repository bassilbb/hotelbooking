<?php
include('includes/header2.php');
include('includes/navbar2.php');


?>

<div class="container-fluid">
<!-- DataTable Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Edit Admin Users</h6>
        </div>
        <div class="card-body">
          
                            
         <div class="form-group"> 
             <?php
                        
                if(isset($_POST['edit_btn']))
                 {
                     $id = $_POST['edit_id'];
                     $conn = mysqli_connect('localhost', 'root', '', 'hoteldb');

                     $query = "SELECT * FROM regadmin WHERE id='$id'";
                      $query_run = mysqli_query($conn,$query);

                  
                    foreach($query_run as $row)
                    {
                        ?>

                        <form action="userupdate.php" method="POST" >
                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control" placeholder="Enter id"> 
                        <label>Name</label>
                        <input type="text" name="edit_name" value="<?php echo $row['name'] ?>"  class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Usertype</label>
                       <select name="update_usertype" class="form-control">
                           <option value="admin">Admin</option>
                           <option value="user">User</option>
                       </select>
                    </div>
                    <a href="userregister.php" class="btn btn-success">Cancel</a>
                    <button type="submit" name="updatebtn" class="btn btn-info"> Update </button>
                    </form>
                    <?php
                    }
                 }
                ?>
        </div>
    </div>
   </div>
</div>
<!--/.container-fluid-->
    








<?php 
include('includes/script.php.php');
include('includes/footer2.php.php');
?>