<?php
include("db.php");
include('includes/header2.php');
include('includes/navbar.php')

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
    <title>Hello, world!</title>
  </head>
  <header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Edit Reservation Details</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="about-us.php">About</a>
          <a class="nav-item nav-link" href="rooms.php">Rooms</a>
         </div>
      </div>
    </nav>

</header>
<section>
    <header class="tete">

    </header>
</section>
  <body>
    <section>
        <div class="content">
            <div class="container">
                    <div class="row">
                
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
                     <h2>Edit  Client Reservation  Form</h2>
                     <!-- <button type="button" class="btn btn-primary" data-toggle="model" data-target="#editclientreservation">
                         Edit Client Details
                     </button> -->
                    </div>
                    </div>
                    <div class="row"> 
                   
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form">
                            <form  action="editprocess.php" method="POST">
                            
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4 class="tour-form-title"></h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                    <?php
                                     if(isset($_POST['edit'])){
                                      $id = $_POST['edit'];
                                      $conn = mysqli_connect('localhost', 'root', '', 'hoteldb');
                                       $query = "SELECT * FROM bookroom WHERE id='$id'";
                                       $query_run = mysqli_query($conn,$query);
                                       

                                        foreach($query_run as $row)
                                        
                                        {
                                          ?>
                                       

                                        <div class="form-group">
                                            <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
                                                <label class="control-label" for="checkindate">Check in</label>
                                                <div class="input-group">
                                                    <input id="checkindate"  name="editcheckindate"  value="<?php echo $row['checkindate'];?>" type="date" placeholder="Enter checkin" class="form-control" required/>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="checkindate">Check out</label>
                                            <div class="input-group">
                                                <input id="checkoutdate" name="editcheckoutdate" value="<?php echo $row['checkoutdate'];?>" type="date" placeholder="Enter checkout" class="form-control" required/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="numberofpersons">Number of Persons:</label>
                                            <div class="select">
                                                <select id="numberofpersons" type="text" name="editnumberofpersons" value="<?php echo $row['numberofpersons'];?>" placeholder="Enter numberofpersons" class="form-control">
                                                <option value="">select here</option>    
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Rooms-Budgets</label>
                                            <div class="select">
                                                <select id="budgets" name="editbudgets" type="text" value="<?php echo $row['budgets'];?>" aria-placeholder="Enter budgets" class="form-control">
                                                    <option value="">select rooms</option>
                                                    <option value="standard roon">Standard 1 to 2 Guest</option>
                                                    <option value="family room">Family  1 to 4 Guest</option>
                                                    <option value="private room">Private 1 to 2 Guest</option>
                                                    <option value="mix dorm">mix dorm 1 to 6 Guest</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                        <h4 class="tour-form-title"></h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="firstname">Frst Name</label>
                                            <input id="firstname" type="text" name="editfirstname"value="<?php echo $row['firstname'];?>"  placeholder="Enter firstname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="lastname">Last Name</label>
                                            <input id="lastname" type="text" name="editlastname" value="<?php echo $rows['lastname'];?>" placeholder="Enter lastname" class="form-control" required>
                                        </div>
                                    </div>
                        
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email"> Email</label>
                                            <input id="email" type="text" name="editemail" value="<?php echo $row['email'];?>"  placeholder="Enter email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Phone</label>
                                            <input id="phone" type="text" name="editphone" value="<?php echo $row['phone'];?>"  placeholder="Enter phone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Country</label>
                                            <input id="country" type="text" name="editcountry" value="<?php echo $row['country'];?>" placeholder="Enter country" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <input id="city" type="text" name="editcity" value="<?php echo $row['city'];?>"  placeholder="Enter city" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="zipcode">Zipcode</label>
                                            <input id="zipcode" type="text" name="editzipcode" value="<?php echo $row['zipcode'];?>"  placeholder  ="Enter zipcode" class="form-control"  size="1" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="roomrequirements"> Room Requirements</label>
                                            <textarea class="form-control" id="roomrequirements" type="text"  name="editroomrequirements" value="<?php echo $row['roomrequirements'];?>" rows="4"  placeholder="Write Your Requirements"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <a href="viewreservation.php" type="submit" name="update"  class="btn btn-primary">Update Reservation</a>
                                        <a href="viewreservation.php" type="submit" name="delete" class="btn pull-right btn-primary">Cancel Update</a>
                                    </div>
                                </div>
                                </form>
                                <?php
                                 }

                            }
                                 ?>
                        </div>
                        
                    </div>
	</div>
		<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center mt20">
              Created for <a href="https://goo.gl/9e2gny" target="_blank">easetemplate</a>
              </div></div>
</div>
</div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
include('includes/script.php');
include('includes/footer2.php');

?>









