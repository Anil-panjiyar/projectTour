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
        <br>
        <h1 class="text-white bg-dark text-center"> Package details</h1>
      <div class="col-lg-8">
        <form action="senddata.php" method ="POST" enctype="multipart/form-data"  >
            <div class="form-group">
            <label for="user">Tilte </label>
            <input type="text" name="title"  class="form-control">
            </div>
           
            <div class="form-group">
            <label for="user">Price </label>
            <input type="text" name="price"  class="form-control">
            </div>

            <div class="form-group">
            <label for="user">Days </label>
            <input type="text" name="days" class="form-control">
            </div>

            <div class="form-group">
            <label for="user">Descrption </label>
            <input type="text" name="descrption" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="user">Picture </label>
            <input type="file" name="file" class="form-control">
            </div>
<input type="submit" name ="submit" values="Submit" class="suCcess">
        </form>
      </div>   
         
    </div>
</body>
</html>
<style>

</style>