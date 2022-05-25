<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: cornsilk;
        }
        .form1{
            width: 400px;
            height: 300px;
            box-shadow:  1px 1px 8px #000000;
            margin-top: 10%;
            background-color: whitesmoke;
        }
        .round{
            margin-top: 3%;
            margin-bottom: 5%;
            height: 30px;
            height: 30px;
            border-radius: 25px;
        }
        #b1{
            margin-top: 5%;
            padding: 2%;
            font-size: large;
            background-color: rgb(206, 6, 72);
            color: cornsilk;
        }
        h1{
            color: crimson;
        }
        span{
            padding-top: 10%;
            font-size: large;
        }
    </style>
</head>
<body>
    <center>
    <form action="" method="post" class="form1">
        <h1>Login</h1>
        <input type="text" name="user" id="" placeholder="Enter UserName" class="round"><br>
         <input type="text" name="pass" id="" placeholder="Enter Password" class="round"><br>
        <button type="submit" id="b1">Login</button>
    </form>
</center>
<br><br>
<center>
Create An Acount 
    <a href="signup.php"><samp style="color: crimson;font-size: large;">SignUp</samp></a></center>


<?php

session_start();
include ("config.php");
if (isset($_SESSION['login_set'])) {
    header("location:slambook.php");
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST['user'];
    $password=$_POST['pass'];
    echo $username;
    echo $password;
    $qry=mysqli_query($conn,"SELECT `username` FROM `signup` WHERE `username`='$username' AND `password`='$password'");
    $result=mysqli_fetch_array($qry);
    echo $result['username'];
    $count=mysqli_num_rows($qry);
    if ($count==1) {
        $_SESSION['login_set']=$username;
        header("location:slambook.php");
    }
    else {
        echo "Your UserName Or Password is Wrong";
    }
}

?>

</body>
</html>