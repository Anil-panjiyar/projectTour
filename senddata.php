<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   
    <title>Pacakge deatils </title>

</head>
<body>
    <div class="container">
        <h1 class="text-white bg-dark text-cente"> 
             Adding package
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
                      
                       include('connection.php');

                        if(isset($_POST['submit'])){
                            $Title= $_POST['title'];
                            $Price= $_POST['price'];
                            $Days= $_POST['days'];
                            $Description = $_POST['descrption'];
                            $Picture =$_FILES['file'];
                            // echo "<pre>";
                            // print_r($_FILES['file']);
                            // echo "</pre>";

                            // echo $Picture['tmp_name'];
                          // fetchind array data  form the Picture varibale
                            $filename = $Picture['name'];
                            $fileerror = $Picture['error'];
                            $filetmp = $Picture['tmp_name'];
// for spliting string  
                            $fileext = explode('.',$filename);
                            $filecheck = strtolower(end($fileext));
                             
                            $fileextstored = array('png','jpg','jpeg');

                            if(in_array($filecheck,$fileextstored)){

                                $destinationfile = 'Photo/'. $filename;
                                move_uploaded_file($filetmp,$destinationfile);
                                $q = "INSERT INTO package( `Title`, `Price`, `Days`, `Description`, `Picture`) VALUES ('$Title','$Price','$Days','$Description','$destinationfile')";
                                 $query = mysqli_query($con,$q);

                                  $displayquery = "SELECT * FROM package";
                                  $querydisplay= mysqli_query($con,$displayquery);

                                  while( $result = mysqli_fetch_array($querydisplay) ) {
                                      ?>
                                      <tr>
                                      
                                      <td> <?php echo $result['Title']; ?> </td> 
                                      <td><?php echo $result['Price']; ?>  </td>
                                      <td> <?php echo $result['Days']; ?>  </td>
                                      <td>  <img src="<?php echo $result['Picture']; ?>" height="100px" width="100px"> </td>
                                      <td> <?php echo $result['Description']; ?>  </td>

                                      </tr>
                                      <?php
                                 
                            }
                        }
                    }
                        ?>
                   </tbody>
                </table>
            </div>

    </div>
</body>
</html>