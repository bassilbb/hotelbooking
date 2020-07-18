<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bassi Admin  - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<section>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Admin Registration Details</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="about-us.html">Admin Users</a>
          <a class="nav-item nav-link" href="rooms.html">Dashbord</a>
         </div>
      </div>
    </nav>
  </header>
</section>


<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Register</div>
                                <div class="card-body">
    
                                    <form class="form-horizontal" method="post" action="adminprocess.php">
    
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="cols-sm-2 control-label">Username</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="cols-sm-2 control-label">Password</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                    <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <a href="adminlogin.php" type="submit" name="registerbtn" class="btn btn-primary btn-lg btn-block login-button">Register</a>
                                        </div>
                                        <div class="login-register">
                                            <a href="admin.php">Login</a>
                                        </div>
                                    </form>
                                </div>
    
                            </div>
                        </div>
                    </div>
                   </div>

    <!-- <div class="container-fluid">
      <!-- Datatable Example-->
      <!-- <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Admin Users Account
            <button type="button" class="btn btn-primary" data-toggle="model" data-toggle="#adminuseraccount">
              Add Admin User
            </button>
          </h6> -->
        </div> -->


        <!-- <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Department</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                </tr>
              </tbody>

            </table>

          </div>

        </div> -->


      </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
