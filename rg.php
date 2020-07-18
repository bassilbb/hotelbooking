<?php
include('includes/header.php');
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
             <label>Username</label>
             <input type="text" name="username" class="form-control" placeholder="Enter Username">
         </div>
         <div class="form-group">
             <label>Email</label>
             <input type="text" name="email" class="form-control" placeholder="Enter Email">
         </div>

         <div class="form-group">
             <label>Password</label>
             <input type="text" name="password" class="form-control" placeholder="Enter Password">
         </div>

         <div class="form-group">
             <label>Confrim Passowrd</label>
             <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Confirmpassword">
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
            <h6 class="m-0 font-weight-bold text-primary">Admin Users
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminuser">
             Add Admin User
            </button>
            </h6>
        </div>
        <div class="card-body">

        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
          echo '<h2> '.$_SESSION['success'].'</h2>'; 
          unset($_SESSION['success']); 
        }
        ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Depatment</th>
                            <th>start Date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
 include('includes/script.php');  
//  include('includes/footer.php');

?>