<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
<form class="form" action="#" method="POST">
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form>
								<div class="form-group">
									<span class="form-label">Your Destination</span>
									<input class="form-control"  name="destination"type="text" placeholder="Enter a destination or placename">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control"name="checkin" type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input class="form-control" name="checkout"type="date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Price</span>
											<input class="form-control" name="price" type="text" required>
											<select class="form-control">
												
											</select>
											<span class=></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select  name="adults"class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select  name="children"class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
								<input type="submit" class= "submit-btn" name="submit" value = "Book Now "/>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>

</body>

</html>

<!-- <?php
   include '../../connection.php';

// $ post here is super global vairbael which  is used to collec data from after submitting an html 
 if (isset($_POST['submit'])){
     $Destination= $_POST['destination'] ;
     $Checkin= $_POST['checkin'] ; 
     $Checkout= $_POST['checkout'] ;
     $Adults= $_POST['adults'];
	 $Children= $_POST['children'];


    

      $insertquery = "insert into detailsbooking(Destination,Checkin,Checkout,Price,Adults,Children) values('$Destination','$Checkin','$Checkout','$Price','$Adults','$Children')" ;
// passing into database 
      $res= mysqli_query($con, $insertquery);
	   if($res){ 
           ?>
		   <script>
			   alert(" register succesfully ")
		   </script>
		   <?php
            }
	   else {
        ?>
		<script>
			alert("data  not inserted succesfully ")
		</script>
		<?php 
       } 
		 
	    
	}
	  ?>
