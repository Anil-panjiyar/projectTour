<?php
include 'connection.php';
 if(isset($_POST['loginbtn'])){
    $Username= $_POST['username'];              
     $Password = $_POST['password'];
     $username_search = " select * from adminregister where Username='$Username' ";
     $query = mysqli_query($con,$username_search);
// checks the email in very row if not founs ir has not been register

    if($username_search == "") {
        echo "User name not found";
    } else {
        $username_count = mysqli_num_rows($query); 

     if($username_count){
          $user_pass =mysqli_fetch_assoc($query);
          $db_pass = $user_pass['Password'];
           $pass_decode = password_verify($Password, $db_pass);
           if ($pass_decode){
            
               header("location:dashboard.php");
            } 
            else{
                    echo "Invalid password ";
                }

   //else {
        //    echo "invalid password";
        //   } 
        }
    }
     
}
?>

<style>
    .heed,
    .uname,
    .pword,
    .reme,
    .up,
    .sinup {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .heed {
        color: #5a88d2;
        /* font-size: 14px; */

    }

    .box {
        /* background-color: #D5F1F2; */
        opacity: 0.1px;
        text-align: center;
        /* border: 2px solid plum; */
        width: 500px;

    }

    .box1 {
        background-image: url("img/nimsdau.jpg");
        width: 450px;
        background-repeat: no-repeat;
        background-size: contain;
        border-radius: 8px;
    }


    .bbox {
        float: left;
        display: flex;
        gap: 2%;
        /* border: powderblue 2px solid; */
        padding: 30px 20px 30px 30px;
        margin-left: 275px;
        margin-top: 60px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 5px 5px 10px rgb(184, 181, 181);
        height: 550px;
    }

    body {
        background-color: #a1bbe5;
        opacity: 0.2px;
    }

    .wel {

        
        background-color: #fff;
        width: fit-content;
        color: black;
        font-size: 9px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .come {
        color: black;
        width: fit-content;
        background-color: #fff;
        font-size: 17px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .dash {
        border-top: white 4px solid;
        text-align: center;
        font-size: 13px;
        width: 170px;
        margin-left: 120px;
        /* background-color: #fff;
        width: fit-content; */
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
        border-radius: 8px;
    }

    .butto:hover {
        background-color: rgb(211, 208, 208);
        color: #5a88d2;
        /* border-radius: 12px; */
    }

    .butto1 {
        background-color: #5a88d2;
        border: #A79DEB 1px solid;
        width: 350px;
        height: 40px;
        color: white;
        border-radius: 8px;

    }

    .butto1:hover {
        background-color: #5a88d2;
        color: black;
        /* border-radius: 12px; */
    }

    .formb {
        text-align: left;
        margin-left: 80px;

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
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this is a login page practice">
    <meta name="keywords" content="login hsekinrm hser loginkn">
    <meta name="author" content="nikesh shrestha">
    <!-- <link rel="stylesheet" href="login.css"> -->
    <link rel="shortcut icon" href="img/iconrn.jpg">
    <title>admin login</title>
</head>
<form class="form" action="#" method="POST">
<body>
    <div class="bbox">
        <div class="box">
            <div class="heed">
                <h1>Admin Login</h1>
            </div>
        
                <div class="formb">
                    <label class="uname">Username</label><br>
                    <input class="username" placeholder="Type your username" type="text" name="username"><br><br>
                    <label class="pword">Password</label><br>
                    <input class="password" placeholder="Type your password" type="password" name="password"><br>
                    <br><input class="reme" type="checkbox">Remember me
                    <br>
                    <br>
                </div>
                <div class="button">
                    <a href="#">Forget Password?</a><br><br>
                    <!-- <input class="butto" name="loginbtn" type="submit"> -->
                    <button class="butto" type ="submit" name="loginbtn">Login</button> <br><br>
                    <button class="butto1" name="registerbtn"> <a href="adminregister.php">Create Account</button>
                </div>
            </form>

            <p class="up">Or Sign Up Using</p>

            <div class="media">
                <a href="facebook.com"><img src="img/facebook.png" alt="facebook logo" width="30px"></a>
                <a href="twitter.com"><img src="img/twiter.png" alt="twitter logo" width="30px"></a>
                <a href="google.com"><img src="img/google.png" alt="google logo" width="30px"></a>
                <a href="instagram.com"><img src="img/igr.png" alt="instagram logo" width="27px"></a>
            </div>
            <br>
            <!-- <div class="sinup">
                <p>Or Sign Up Using</p>
                <a href="#">SIGN UP</a> 
            </div> -->
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
                <h2>Login to Access Admin Dashboard</h2>
            </div>
        </div>
    </div>

</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="login.php">
     <input type="text" placeholder="Enter your name" name="username">
     <input type="password" name="password" placeholder="Enter your password">
     <input type="password" name="password1" placeholder="Please reenter password">
     <br>
     <input type="submit" name="loginbtn">
      <input type="submit" name="registerbtn">
    </form>
</body>
</html> -->