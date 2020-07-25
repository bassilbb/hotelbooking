<?php
include('includes/header2.php');
include('includes/navbar.php');


?>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="addadminuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="useradmin.php" method="POST">

         <div class="modal-body" >

            <div class="form-group">
                <input type="hidden" name="id" class="form-control" placeholder="Enter id">
                <label>name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Enter Password" required>
            </div>

            <div class="form-group">
                <label>Confrim Passowrd</label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Confirmpassword" re>
            </div>
            <input type="hidden" name="usertype" value="admin" >
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="registerbtn" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">

    <!-- DataTable Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Admin Users
            <button type="button" class="btn bg-danger" data-toggle="modal" data-target="#addadminuser">
             Add Admin User
            </button>
            </h6>
        </div>
        <div class="card-body">

        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
          echo '<h2 class="bg-info"> '.$_SESSION['success'].'</h2>'; 
          unset($_SESSION['success']); 
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
          echo '<h2 class="bg-danger"> '.$_SESSION['status'].'</h2>'; 
          unset($_SESSION['status']); 
        }
        ?>
            <div class="table-responsive">

            <?php
               $conn = mysqli_connect("localhost", "root", "", "hoteldb");
               $query =  "SELECT * FROM regadmin";
               $query=mysqli_query($conn,$query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USER NAME</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th>USERS ROLES</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(mysqli_num_rows($query) > 0)
                      {
                        while($row = mysqli_fetch_assoc($query))
                        {
                         ?>
                          
                           <tr>
                           <td><?php echo $row ['id'];?></td>
                            <td><?php echo $row ['name'];?></td>
                            <td><?php echo $row ['email'];?></td>
                            <td><?php echo $row ['password'];?></td>
                            <td><?php echo $row ['usertype'];?></td>
                            <td>
                              <form action="useredit.php" method="POST">
                                <input type="hidden" name="edit_id"  value="<?php echo $row ['id'];?>">
                              <button type="submit" name="edit_btn" class="btn btn-info">EDIT</button>
                              </form>
                            </td>

                            <td> 
                              <form action="userdelete.php" method="POST">
                              <input type="hidden" name="delete_id"  value="<?php echo $row ['id'];?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                            </form>  
                          </td>
                          
                        </tr>
                        <?php
                        }
                      }
                      else{
                        echo "No Record Found";
                      }

                      ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
 include('includes/script.php');  
  include('includes/footer2.php');

?>