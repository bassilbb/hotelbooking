<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  </header>
    </section>
  <header class="tete">
    </header>

<!-- 
    <div class="bs-header" id="content">
	<div class="container">
		<h1>Bootsnipp</h1>
        		<p> Design elements, playground and code snippets for <a href="http://www.getbootstrap.com" target="_blank"> Bootstrap</a> HTML/CSS/JS framework </p>
		</div>
</div> -->


    <body>
    <div id="login">
      <h3 class="text-center text-white pt-5">Login form</h3>
      <div class="container">
          <div id="login-row" class="row justify-content-center align-items-center">
              <div id="login-column" class="col-md-6">
                  <div id="login-box" class="col-md-12">
                      <form id="login-form" class="form" action="loginprocess.php" method="post">
                          <h3 class="text-center text-info">Login</h3>
                          <div class="form-group">
                              <label for="username" class="text-info">Username:</label><br>
                              <input type="text" name="username" id="username" class="form-control" required>
                          </div>
                          <div class="form-group">
                              <label for="password" class="text-info">Password:</label><br>
                              <input type="password" name="password" id="password" class="form-control" required>
                          </div>
                          <div class="form-group">
                              <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                              <input type="submit" name="login" class="btn btn-info btn-md" value="login">
                          </div>
                          <div id="register-link" class="text-right">
                              <a href="register.php" class="text-info">Register here</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
include('includes/scripts.php');

?>




