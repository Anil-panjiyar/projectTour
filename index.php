<!DOCTYPE html>
<!-- <html lang="en">   -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/team.png">
    <title>Register.com</title>

     <link rel="stylesheet" href="userkolagi.css"> 
    <link rel="shortcut icon" href="img/iconrn.jpg">
    
</head>

 <body>
 

    <div class="bbox">
        <div class="box">
            <div class="heed">
                <h1>Sign Up</h1>
            </div>
            <p class="heed">It's quick and easy</p>
            <form class="form" action="#" method="POST">
                <div class="formb">
                    <label class="uname">Username</label><br>
                    <input class="username" placeholder="Enter user name" type="text" name="Username"><br><br>
                    <label class="pword">Password</label><br>
                    <input class="password" placeholder="Enter a  password" type="password" name="Password"><br><br>
                    <label class="pword">Re-enter Password</label><br>
                    <input type="password" name="password1" class="password" placeholder="Please re-enter password"><br><br>
                    <label class="pword">E-mail</label><br>
                    <input type="email" name="Email" class="password" placeholder="Enter your email"><br>
                    <br><input class="reme" type="checkbox">Remember me
                    <br>
                    <br>
                </div>
                <div class="button">
                     <a href="#">Forget Password?</a><br>
                    <!-- <input class="butto" name="loginbtn" type="submit"> -->
                    <!-- <button class="butto1" name="registerbtn" type="submit">Sign up</button> <br><br> -->
                    <input type="submit" class= "button1" name="submit" value = "Sign up "/>
                    <br>
                    <p>Already have an account</p><a href="login.php" class="login"><b>Login</b></a>
                    
                    <!-- <button class="butto1" name="registerbtn">Crate Account</button>  -->
                </div>
            </form>

        </div>

        <div class="box1">
            <div class="welcome">
                <div class="wel">
                    <h1>WELCOME TO </h1>
                </div>
                <div class="come">
                    <h1>T&T WEBSITE</h1>
                </div>
            </div>
            <div class="dash">
                <p>Sign up to our website to access on packages</p>
            </div>
        </div>
    </div>
    <!-- <form method="post" action="register.php">
    <input type="text" placeholder="Enter your name" name="username" ><br><br>
     <input type="password" name="password" placeholder="Enter your password"><br><br>
     <input type="password" name="password1" placeholder="Please reenter password"><br><br>
     <input type="email" name="email" placeholder="Enter your email" ><br><br><br>
     <input type="submit" name="registerbtn">
     <button type="submit" name="registerbtn" class="subbut">Register</buttom><br><br>
    </form> -->
</body>

</html>


<?php
   include 'connection.php';

// $ post here is super global vairbael which  is used to collec data from after submitting an html 
 if (isset($_POST['submit'])){
     $Username= $_POST['Username'] ;
     $Password= password_hash($_POST ['Password'], PASSWORD_DEFAULT);
     $email= $_POST['Email'] ;
    // $Email = $_POST['email'] ;
     //$Phonenumber = $_POST['phonenumber'] ;

      $insertquery = "insert into regist(Username,Password,email) values('$Username','$Password','$email')" ;
// passing into database 
      $res= mysqli_query($con, $insertquery);
	   if($res){ 
           ?>
		   <script>
			   alert(" register succesfully ")
		   </script>
		   <?php
            }
	   else {
        ?>
		<script>
			alert("data  not inserted succesfully ")
		</script>
		<?php 
       }
		 
	    
	}
	  ?>

 