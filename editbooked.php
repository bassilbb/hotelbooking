<?php
include('db.php');
include('includes/header2.php');
include('includes/navbar.php');
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
  <header class="tete">

  </header>
  <body>

    <section>
    <div class="content">
<div class="container">
    	<div class="row">
	
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
                        <h2> Reschedule Clients Reservation Form</h2>
                        </div>
                        </div>
	                <div class="row">
	
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form">
                            
                            <form  action="editbookedprocess.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4 class="tour-form-title">Guest Detail</h4>
                                    </div>
                                    <?php
                                    if(isset($_POST['editbtn']))
                                    {
                                        $id = $_POST['editid'];
                                        // $conn = mysqli_connect('localhost', 'root', '', 'hoteldb');
                                        $query = "SELECT * FROM bookroom WHERE id=$id" ;
                                        $query_run = mysqli_query($conn, $query);
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                         
                                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control" placeholder="Enter id">
                                                <label class="control-label" for="checkindate">Check in</label>
                                                <div class="input-group">
                                                    <input id="checkindate"  name="edit_checkindate" type="date"  value="<?php echo $row['checkindate'] ?>" class="form-control" required/>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="checkindate">Check out</label>
                                            <div class="input-group">
                                                <input id="checkoutdate" name="edit_checkoutdate" type="date" value="<?php echo $row['checkindate'] ?>" class="form-control" required/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div> 
                                    <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="numberofpersons">Number of Persons:</label>
                                            <div class="select">
                                                <select id="numberofpersons" name="edit_numberofpersons"  class="form-control">
                                                    <option value="< echo $row['numberofpersons']  ?>">< echo $row['numberofpersons']  ?></option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Rooms-Budgets</label>
                                            <div class="select">
                                                <select id="budgets" name="edit_budgets" value="< echo $row['budgets']  ?>" class="form-control">
                                                <option value="< echo $row['budgets']  ?>">< echo $row['budgets']  ?></option>

                                                    <option value="">select rooms</option>
                                                    <option value="standard roon">Standard 1 to 2 Guest</option>
                                                    <option value="family room">Family  1 to 4 Guest</option>
                                                    <option value="private room">Private 1 to 2 Guest</option>
                                                    <option value="mix dorm">mix dorm 1 to 6 Guest</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30"> -->
                                        <!-- <h4 class="tour-form-title"></h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="firstname">Frst Name</label>
                                            <input id="firstname" type="text" name="edit_firstname" value="< echo $row['firstname']  ?>" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="lastname">Last Name</label>
                                            <input id="lastname" type="text" name="edit_lastname" value="< echo $row['lastname']  ?>" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                         -->
                                    <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email"> Email</label>
                                            <input id="email" type="text" name="edit_email" value="<$row['email']  ?>" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Phone</label>
                                            <input id="phone" type="text" name="edit_phone" value="< $row['phone']  ?>" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Country</label>
                                            <input id="country" type="text" name="edit_country" value="< echo $row['country']  ?>" placeholder="" class="form-control" required>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <input id="city" type="text" name="edit_city" value="< echo $row['city']  ?>" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="zipcode">Zipcode</label>
                                            <input id="zipcode" type="text" name="edit_zipcode" value="<echo $row['zipcode']  ?>" placeholder  ="" class="form-control"  size="1" required>
                                        </div> -->
                                    <!-- </div> -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="roomrequirements"> Room Requirements</label>
                                            <textarea class="form-control" id="roomrequirements" name="edit_roomrequirements"  rows="4" placeholder="Write Your Requirements"><?php echo $row['roomrequirements']  ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                         <a href="editreservation.php" class="btn btn-danger">Cancel</a>
                                        <button type="submit" name="updatebtn" class="btn btn-primary">submit your update request</button>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                </form>
                               
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

















