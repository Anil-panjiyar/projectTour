<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Delete Pacakage</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<form class="form" action="Deletepackage.php" method="POST">

  <h1> Delete Package</h1>
 
  
  
  <div>
  <input type="text" class="box" placeholder="Search.." name="search">
  <input type="submit"  class ="button"value="Delete" name="submit">
  </div>
  
 

  
  

</form>
</body>
</html>
<style>
  h1 {text-align: center;}
  .button{
    
  display: block;
  width: 15%;
  border: none;
  background-color: #04AA6D;
  padding: 14px 28px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  border-radius: 25px;

  }
  .box{
    display: block;
  width: 40%;
  height 50px;
  padding: 14px 28px;
  border-color: red;
  border-radius: 25px;
  text-align: center;


  }
</style>

<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $Search= $_POST['search']; 
    // sql query where  to select 
 $sql= "DELETE FROM package WHERE Title = '$Search'";

 $result = mysqli_query($con, $sql);

 if ($result) {
  echo" Delete sucessfully";
}else{
  echo "Error deleting record: ";
}

}
 
?>
