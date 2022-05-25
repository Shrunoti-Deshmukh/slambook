<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        body{
            background-color: cornsilk;
        }
        .form1{
            width: 400px;
            height: 350px;
            box-shadow:  1px 1px 8px #000000;
            margin-top: 8%;
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
        <h1>Sign In</h1>
        <input type="text" name="user" id="" placeholder="Enter UserName or Email" class="round"><br>
    <input type="text" name="pass" id="" placeholder="Enter Password" class="round"><br>
    <input type="text" name="pass" id="" placeholder="Confirm Password" class="round"><br>
        <button type="submit" id="b1">Sign in</button>
    </form>
</center>
<br><br>
<center>
Back To 
    <a href="login.php"><samp style="color: crimson;font-size: large;">Login</samp></a></center>


    <?php
    
    if ($_POST) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    include ("config.php") ;
    $qry = mysqli_query($conn,"INSERT INTO `signup`(`username`,`password`) VALUES ('$user','$pass')");
        echo "<h1>Done</h1>";
    }
    ?>
</body>
</html>