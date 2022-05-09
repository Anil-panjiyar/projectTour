<?php 

$username="root";
$password ="";
$server ='localhost';
$db ='projectone';
 $con = mysqli_connect($server,$username,$password,$db);
if ($con){
    //echo " Connection successfull";
    // ?>
  <!-- <script>  alert("connection sucessful ")</script> -->
   <?php  
}

else{
   // echo " unsucessfull";
    die ("no connection" .mysqli_connect_error());
} 


?>