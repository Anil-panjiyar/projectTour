<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<form class="form" action="#" method="POST">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button> 
  

</form>
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['search'])){
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
        echo " Sorry!!No destination was found";
    }
} 
}
 
?>
