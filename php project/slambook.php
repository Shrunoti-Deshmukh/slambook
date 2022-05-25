<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: linear-gradient(to right, #ff0066 0%, #66ccff 100%);
        }
        .form1{
            width: 500px;
            height: 630px;
            background-color: cornsilk;
            border: 2px solid black;
        }
        .round{
            border-radius: 50px;
            height: 30px;
            margin-top: 7px;
            margin-left: 10px;
            margin-bottom: 10px;
        }
        .round:hover{
            background-color: black;
            color: cornsilk;
        }
        .b1{
            border-radius: 50px;
            background-color: black;
            color: cornsilk;
            height: 7%;
            width: 30%;
            margin-top: 2%;
        }
        .b2{
            margin-top: 20px;
            margin-left: 100px;
            border-radius: 50px;
            height: 7%;
            width: 10%;
            background-color: black;
            color: cornsilk;
            position: absolute;

        }
        .b1:hover{
            background-color: cyan;
            font-size: x-large;
            border: 2px solid black;
            color: deeppink;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php 
    if (isset($_POST['Save'])) {
        $name=$_POST['name1'];
        $nick=$_POST['nick'];
        $sign=$_POST['sign'];
        $bir=$_POST['bir'];
        $address=$_POST['address'];
        $num=$_POST['num'];
        $dish=$_POST['dish'];
        $song=$_POST['song'];
        $movie=$_POST['movie'];
        $hobbies=$_POST['hobbies'];
        
            include ("config.php") ;
            $qry = mysqli_query($conn,"INSERT INTO `slam`(`name`, `nickname`, `sign`, `birth`, `address`, `number`,
             `dish`,`song`, `movie`, `hobbie`) VALUES ('$name','$nick','$sign','$bir','
             $address','$num','$dish','$song','$movie','$hobbies')");
                
            echo "<h1>Done</h1>";
        
        }
        elseif (isset($_POST['Search'])) {
            # code...
            $nick=$_POST['nick'];
            include ("config.php");
            $qry=mysqli_query($conn,"SELECT * FROM `slam` WHERE `nickname`='$nick'");
            $result = mysqli_fetch_array($qry);
            $name1=$result['name'];
            $nick1=$result['nickname'];
            $sign1=$result['sign'];
            $bir1=$result['birth'];
            $address1=$result['address'];
            $num1=$result['number'];
            $dish1=$result['dish'];
            $song1=$result['song'];
            $movie1=$result['movie'];
            $hobbies1=$result['hobbie'];

        }
    ?>


<a href="logout.php"><button type="submit" class="b2">Logout</button></a>
    <center><form action="" method="post" class="form1">
    <h1>Welcome To Slam Book</h1>
        Name: <input type="text" name="name1" class="round" id="" value="<?php  echo @$name1; ?>"><br>
        Nick Name: <input type="text" name="nick" class="round" id=""value="<?php  echo @$nick1; ?>"><br>
        Zodiac Sign: <select name="sign" id="" class="round" value="<?php  echo @$sign1; ?>">
            <option value="Aries">Aries</option>
            <option value="Leo">Leo</option>
            <option value="Sagittarius">Sagittarius</option>
            <option value="Taurus">Taurus</option>
            <option value="Virgo">Virgo</option>
            <option value="Capricorn">Capricorn</option>
            <option value="Gemini">Gemini</option>
            <option value="Libra">Libra</option>
            <option value="Aquarius">Aquarius</option>
            <option value="Cancer">Cancer</option>
            <option value="Scorpio">Scorpio</option>
            <option value="Pisces">Pisces</option>
            </select> &nbsp;
        Birth Date: <input type="date" name="bir" class="round" id="" value="<?php  echo @$bir1; ?>"><br>
        Address: <input type="text" name="address" class="round" id="" value="<?php  echo @$address1; ?>"><br>
        Contant Number: <input type="number" name="num" class="round" id="" value="<?php  echo @$num1; ?>"><br>
        Favourite Dish: <input type="text" name="dish" class="round" id="" value="<?php  echo @$dish1; ?>"><br>
        Favourite Song: <input type="text" name="song" class="round" id="" value="<?php  echo @$song1; ?>"><br>
        Favourite Movie: <input type="text" name="movie" class="round" id="" value="<?php  echo @$movie1; ?>"><br>
        Favourite hobbies: <input type="text" name="hobbies" class="round" id="" value="<?php  echo @$hobbies1; ?>"><br>
       <button type="submit"  class="b1" style="margin-right: 40px;" name="Save">Save It</button>
        <button type="submit"  class="b1" name="Search">Search</button></a>
        

    
</body>
</html>