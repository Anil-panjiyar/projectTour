<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home </title>
    <link rel="stylesheet" href="homecss.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="searchdata.php">
 </head>
 <body>
    <div class="full-page">
                        
        <div class="navbar">
            

            <img src="./logo.jpg" class="logo" height="100"> 
            
            <nav>
                <ul id="MenuItems">
                    <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<form class="form" action="#" method="POST">
  
                    
                    <li><a href="#">Home</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="packagedisplay.php">Destination</a></li>
                    <li><a href="colorlib-booking-1/colorlib-booking-1/Booking.php">Booking</a></li>
                    <li><a   href="Contactus.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <h1>TRAVEL WITH US</h1>
            <p>"Travel is the only thing you buy that makes you rich"</p>
            <div class="banner-btn">
                <a href="#"><span></span>Best Selling Package</a>
                <a href="#"><span></span>Learn More</a>
            </div>
        </div>
    </div>
    </body>
</form>
</html>
<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $Search= $_POST['search']; 
    // sql query where  to select 
 $sql= "SELECT * FROM package WHERE Title LIKE '%$Search%'";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Title</th>";
                echo "<th>Price</th>";
                echo "<th>Days</th>";
                echo "<th>Picture</th>";
                echo "<th>Description</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";

                 echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Days'] . "</td>";
                echo "<td><img src='" . $row['Picture'] . "' height='200px' width='350px'/></td>";
                
                echo "<td>" . $row['Description'] . "</td>";
                
            echo "</tr>";
        }
  } else{
        echo "No records matching your query were found.";
    }
} 
}
 
?>

        
            
        