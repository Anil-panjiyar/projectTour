
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
  <div class="row my-2">
    <div class="serach-box">
      <input type="text" name="search" placeholder="search here ..."/>
      <button class="reset-btn">Reset</button>
    </div>
  </div>
  <div class="row">
      <h1 class="text-white bg-dark text-cente"> 
                  Package Details
            </h1>

      <table class = 'table table-bordered table-striped table-hover'>
          <thead>
            <th>Tilte</th> 
            <th>Price</th> 
            <th>Days</th> 
            <th>Picture</th>
            <th>Description</th>
          </thead>
          <tbody class="package-details">
            <!-- details goes here -->
          </tbody>
    </table>
  </div>
  
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {

    // load package details
    function loadPackageDetails() {
      $.ajax({
        url : 'packoption2.php',
        type : 'GET',
        success : function ($data) {
          $('.package-details').html($data);
        }
      });
    }

    loadPackageDetails();

    // search function
    function search($input) {
      $.ajax({
        url: 'package.php',
        type: 'POST',
        data: {data:$input},
        success: function ($data) {
          if ($data == "") {
            $('.package-details').html("No Record Found !!!");
          } else {
            $('.package-details').html($data);
          }
          
        }
      });
    }

    // search button
    $('input[name=search]').on('keyup', function () {
      var searchVal = $('input[name=search]').val();
      
      // function call - search
      search(searchVal);
    });

    // reset button 
    $('.reset-btn').on('click', function() {
      $('input[name=search]').val("");
      loadPackageDetails();
    });
    
  })
</script>
</body>
</html>