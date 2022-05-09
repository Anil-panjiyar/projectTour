<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   
    <title> Contact deatils </title>
</head>
<body>
<form class="form" action="#" method="POST">
<div class="container">
        <h1 class="text-white bg-dark text-cente"> 
               Contact  us Details
        </h1>
            <div class="table-responsive">
                <table class = "table table-bordered table-striped table-hover">
                    <thead>
                    <th> Id</th> 
                   <th>Name</th> 
                   <th>Email</th> 
                   <th>Message</th> 
                    </thead>
                   <tbody>
    
                  <?php
include 'connection.php';
$selectquery = "select *from contact";
$query= mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
//echo $nums;
// checking rows


//displaying  deatils
while($res =mysqli_fetch_array($query)){
   ?>
    <tr>
      <td><?php echo $res['ID']; ?> </td>
   <td><?php echo $res['Name']; ?> </td>
   <td><?php echo $res['Email']; ?> </td>
   <td><?php echo $res['Message']; ?> </td>
   
    
  </tr>

<?php
}

?>
              </form>      
                  </tbody>    
        </table>
      </div>
    </div>
</form>
</body>
</html>
