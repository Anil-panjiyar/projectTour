
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   
    <title>admin deatils </title>
    
</head>
<body>
<div class="container py-4">
<div class="row mt-4">
    
    <?php
include 'connection.php';
$selectquery = "select *from package";
$query= mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
//echo $nums;
// checking rows


//displaying  deatils
while($res =mysqli_fetch_array($query)){
   ?>
    <!-- <tr>
      <td><?php echo $res['Title']; ?> </td>
      <td><?php echo $res['Price']; ?> </td>

   <td><?php echo $res['Days'] ?> </td>
   <td><img src="<?php echo $res['Picture']; ?>" width="100" height="100"></td>

   <td><?php echo $res['Description']; ?> </td>
   
    
  </tr> -->
  <div class="col-md-4">

  <div class="card">
            <div class="card-body">
             <img src="<?php echo $res['Picture']; ?>" class ="card-img-top" alt="Destinatin images  ">   
            
              <h2 class ="card-title">Title:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $res['Title']; ?></h2>
         
               <h3 class ="card-title">Price:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $res['Price']; ?></h3>
              <h4 class ="card-title">Days:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $res['Days']; ?></h4>
              <h5>Description</h5>
              <p class="card-text">
              <?php echo $res['Description']; ?>
              </p>
            </div>
        </div>
    </div>


<?php
}

?>
        
</div>

</div>
                  
          
</body>
</html>
<!-- width="100" height="100"  -->