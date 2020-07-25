<?php
include('db.php');

$color1 = "lightblue";
$color2 = "Ivory";
$color = $color1;

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
  <section>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class="navbar-brand" href="#"><h4>Reservation Page</h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ml-auto" >
                    <a  class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                   
                  </div>
                </div>
              </nav>
        </header>
    </section>
  <header class="bbb">

  </header>
  <body>

    <section>
    <div class="content">
<div class="container">
    	<div class="row">
	
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
                        <h2>Clients Reservation Booking Form</h2>
                        </div>
                        </div>
	<div class="row">
	
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form">
                            <form  action="bookroomprocess.php" method="POST">
                            
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4 class="tour-form-title">Guest Detail</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="control-label" for="checkindate">Check in</label>
                                                <div class="input-group">
                                                    <input id="checkindate"  name="checkindate" type="date"   class="form-control" required/>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="checkindate">Check out</label>
                                            <div class="input-group">
                                                <input id="checkoutdate" name="checkoutdate" type="date" class="form-control" required/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="numberofpersons">Number of Persons:</label>
                                            <div class="select">
                                                <select id="numberofpersons" name="numberofpersons" class="form-control">
                                                    <option value="01">select no of guest</option>
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
                                                <select id="budgets" name="budgets" class="form-control">
                                                    <option value="">select rooms</option>
                                                    <?php 
                                                    $query=mysqli_query($conn,"select * from rooms");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                        $color == $color1 ? $color = $color2 : $color = $color1;
                                                        $name = $row['name'];
                                                        echo "<option value='$name'style='background:$color;'>$name</option>";
                                                        
                                                    }
                                                    ?>
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
                                            <input id="firstname" type="text" name="firstname" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="lastname">Last Name</label>
                                            <input id="lastname" type="text" name="lastname"  placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                        
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email"> Email</label>
                                            <input id="email" type="text" name="email" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Phone</label>
                                            <input id="phone" type="text" name="phone" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="zipcode">Zipcode</label>
                                            <input id="zipcode" type="hidden"   class="form-control" placeholder="" size="1" required>
                                            <select id="country" name="country" class="form-control">
                                                    <option value="">select zipcode</option>
                                                    <?php 
                                                    $query=mysqli_query($conn,"select * from country");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                        $color == $color1 ? $color = $color2 : $color = $color1;
                                                        $name = $row['name'];
                                                        echo "<option value='$name' style='background:$color;'>$name</option>"; 
                                                    }
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Country</label>
                                            <div class="select">
                                                <select id="country" name="country" class="form-control">
                                                    <option value="">select country</option>
                                                    <?php 
                                                    $query=mysqli_query($conn,"select * from country");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                        $color == $color1 ? $color = $color2 : $color = $color1;
                                                        $name = $row['name'];
                                                        echo "<option value='$name' style='background:$color;'>$name</option>";  
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Cites</label>
                                            <div class="select">
                                                <select id="cities" name="city" class="form-control">
                                                <option value="">select city</option>
                                                    <?php 
                                                    $query=mysqli_query($conn,"select * from cities");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                        $color == $color1 ? $color = $color2 : $color = $color1;
                                                        $name = $row['name'];
                                                        echo "<option value='$name' style='background:$color;'>$name</option>";    
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="roomrequirements"> Room Requirements</label>
                                            <textarea class="form-control" id="roomrequirements" name="roomrequirements" rows="4" placeholder="Write Your Requirements"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" name="bookroom" class="btn btn-primary">submit your book request</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                        
                    </div>
                                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="8E55XHMBE3EPL">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
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





















