
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
<form class="form" action="#" method="POST">

<div class="container">
        <h1 class="text-white bg-dark text-cente"> 
               Package Details 
        </h1>
            <div class="table-responsive">
                <table class = "table table-bordered table-striped table-hover">
                    <thead>
                    <th>Tilte</th> 
            <th>Price</th> 
            <th>Days</th> 
            <th>Picture</th>
            <th>Description</th>

                    </thead>
                   <tbody>

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
    <tr>
      <td><?php echo $res['Title']; ?> </td>
      <td><?php echo $res['Price']; ?> </td>

   <td><?php echo $res['Days'] ?> </td>
   <td><img src="<?php echo $res['Picture']; ?>" width="100" height="100"></td>

   <td><?php echo $res['Description']; ?> </td>
   
    
  </tr>

<?php
}

?>
              </form>      
                  </tbody>    
        </table>
      </div>
    </div>
</body>
</html>
