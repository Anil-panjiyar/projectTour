<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Paymentkolagi.css">

</head>
<body>

<div class="container">

<form class="form" action="#" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text"name="fullname" placeholder="Anil Panjiyar">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text"  name ="city" placeholder="Kathmandu">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" placeholder="Nepal">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zipcode" placeholder="44600">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text"  name="cardname"placeholder=" Anil Panjiyar">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number"  name="creditnumber"placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="expmonth" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="expyear" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text"  name="cvv"placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="Submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>
<?php
   include 'connection.php';

// $ post here is super global vairbael which  is used to collec data from after submitting an html 
 if (isset($_POST['Submit'])){
     $Fullname= $_POST['fullname'] ;
     $Email= $_POST['email'] ;
     $Address= $_POST['address'] ;
     $City= $_POST['city'] ;
     $State= $_POST['state'] ;
     $Zipcode= $_POST['zipcode'] ;
     $Cardname= $_POST['cardname'] ;
     $Cardnumber= $_POST['creditnumber'] ;
     $Expmonth= $_POST['expmonth'] ;
     $Expyear= $_POST['expyear'] ;
     $Cvv= $_POST['cvv'] ;
    
     //$Phonenumber = $_POST['phonenumber'] ;
    //  $_SESSION is one of a couple of superglobals in PHP meaning that it is accessible regardless of scope. Every superglobal is an array, thus the code snippet is verifying that the key 'username' 
    //  exist and isn't empty and in that case assign its value to the variable $username.

      $insertquery = "insert into payment(Fullname,Email,Address,City,State,Zipcode,Cardname,Cardnumber,Expmonth,Expyear,Cvv) values('$Fullname','$Email','$Address','$City','$State','$Zipcode','$Cardname','$Cardnumber','$Expmonth','$Expyear','$Cvv')" ;
// passing into database 
      $res= mysqli_query($con, $insertquery);
	   if($res){ 
           ?>
		   <script>
			   alert(" Payment succesfully ")
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