<?php
   include 'connection.php';

// $ post here is super global vairbael which  is used to collec data from after submitting an html 
 if (isset($_POST['submit'])){
     $Username= $_POST['username'] ;
     $Password=  password_hash($_POST ['password'], PASSWORD_DEFAULT);
     $Email= $_POST['email'] ;
     $post= $_POST['adminpost'];

    

      $insertquery = "insert into adminregister(Username,Password,Email,post) values('$Username','$Password','$Email','$post')" ;
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


<style>
    .red {
        background-color: red;
        width: 500px;
        text-align: center;
        height: 100px;
        color: azure;
    }

    .green {
        background-color: greenyellow;
        width: 500px;
        text-align: center;
        height: 100px;
        color: azure;
    }

    .heed,
    .uname,
    .pword,
    .reme,
    .up,
    .post,
    .sinup {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .heed {
        color: #9999ff;
        margin-left: 80px;
        margin-top: -16px;
        /* font-size: 14px; */

    }

    .box {
        /* background-color: #D5F1F2; */
        opacity: 0.1px;
        /* text-align: center; */
        /* border: 2px solid plum; */
        width: 500px;
    }

    .box1 {
        background-image: url("img/mb.jpg");
        width: 460px;
        background-repeat: no-repeat;
        background-size: contain;        
    }


    .bbox {
        float: left;
        display: flex;
        gap: 2%;
        /* border: powderblue 2px solid; */
        padding: 30px 20px 30px 30px;
        margin-left: 210px;
        margin-top: 50px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 5px 5px 10px rgb(184, 181, 181);
        height: 550px;
        width: 1050px;
    }

    body {
        background-color: #D6F6F7;
        opacity: 0.2px;
    }

    .wel {

        color: black;
        font-size: 9px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .come {
        color: whitesmoke;

        font-size: 17px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .dash {
        border-top: white 2px solid;
        text-align: center;
        font-size: 13px;
        width: 170px;
        margin-left: 170px;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .welcome {
        margin-left: 60px;
        margin-top: 140px;
    }

    .button {
        text-align: center;
        gap: 20px;
    }

    .butto {
        background-color: whitesmoke;
        border: #A4AFF5 1px solid;
        width: 350px;
        height: 40px;
        color: rgb(0, 0, 0);
    }

    .butto:hover {
        background-color: rgb(211, 208, 208);
        color: #F56954;
        /* border-radius: 12px; */
    }

    .butto1 {
        background-color: #9999ff;
        border: #A79DEB 1px solid;
        width: 350px;
        height: 40px;
        color: white;
        margin-top: 10px;
        font-size: 15px;
        border-radius: 8px;

    }

    .butto1:hover {
        background-color: #6666FF;
        color: rgb(255, 255, 255);
        border-radius: 8px;
    }

    .formb {
        text-align: left;
        margin-left: 80px;
        margin-top: 10px;

    }

    .pword {
        padding-top: 20px;
    }

    .username {
        width: 300px;
        height: 35px;
    }

    .password {
        width: 300px;
        height: 35px;
    }

    .fb,
    .yt,
    .ig,
    .tw,
    .gh,
    .ld,
    .email {
        width: 300px;
        height: 35px;
    }

    .postkolagi{
        width: 150px;
        height: 30px;
        font-size: 12px;
        
    }

    .loogin{
        font-weight: bold;
        color: blue;
        
    }
</style>

<!DOCTYPE html>
<!-- <html lang="en">   -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register.com</title>
    <!-- <link rel="stylesheet" href="register.css"> -->
    <link rel="shortcut icon" href="img/team.png">
</head>

<body>
    <div>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='red'>" . $_SESSION['message'] . "</div>";
        }
        ?>
    </div>

    <div>
        <?php
        if (isset($_SESSION['message1'])) {
            echo "<div class='green'>" . $_SESSION['message1'] . "</div>";
        }
        ?>
    </div>

    <div class="bbox">
        <div class="box">
            <div class="heed">
                <h1>Sign Up</h1>
            </div>
            <p class="heed">It's quick and easy</p>
            <form class="form" action="#" method="POST">
                <div class="formb">
                    <label class="uname">Username</label><br>
                    <input class="username" placeholder="Please give a username" type="text" name="username"><br><br>
                    <label class="pword">Password</label><br>
                    <input class="password" placeholder="Please give a password" type="password" name="password"><br><br>
                    <label class="pword">Re-enter Password</label><br>
                    <input type="password" name="password1" class="password" placeholder="Please re-enter password"><br><br>
                    <label class="pword">E-mail</label><br>
                    <input type="email" name="email" class="password" placeholder="Enter your email"><br>
                    
                    <br><label class="post">Register as :</label> &nbsp; &nbsp;       
                    <select name="adminpost" class="postkolagi">
                    <option value="Manager">Manager</option>
                    <option value="Staff">Staff</option>
                    <option value="Accountant">Accountant</option>
                    </select> <br>
                    
                    <br>
                </div>
                <div class="button">
                    <!-- <a href="#">Forget Password?</a><br><br> -->
                    <!-- <input class="butto" name="loginbtn" type="submit"> -->
                    <button class="butto1" name="submit" type="submit">Sign up</button> <br>
                    <p>Already have an account</p><a href="adminlogin.php" class="loogin">Login</a>
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
                    <h1>THE WEBSITE</h1>
                </div>
            </div>
            <div class="dash">
                <p>Create an Account to Access Admin Dashboard</p>
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