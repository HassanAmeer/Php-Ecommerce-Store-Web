



<?php

 include '../config.php';
 session_start();
 error_reporting(0);


if(isset($_POST['loginbtn']))
{
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $pass = mysqli_real_escape_string($db,$_POST['pass']);

$upasssha1 = sha1($pass);
$upassmd = md5($upasssha1);

 $chklogin = mysqli_query($db,"SELECT name, pass FROM `store_stngs` WHERE name='$name' AND pass='$upassmd'");
if(mysqli_num_rows($chklogin) == 1)
  { 
   $_SESSION['adminses'] = $name;
    header('location:home.php');
  }else{
    echo '<div style="display:flex;flex-direction:row;border-left:4px solid red;">
   <div style="border:none; border-right:1px solid silver;">
    <img src="assets/imgs/Coffee-red.gif">
   </div>
   <div style="text-shadow:1px 1px 1px black;color:rgb(228, 118, 118);background:rgba(255, 207, 215, 0.918);">
    <p style="font-size:1.7rem; letter-spacing:2px;"> Login Data Incorrect </p>
   </div>
</div>';
  }

}







?>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../assetscdn/favicon.png" type="image/png">
    <title> Admin Login </title>
</head>

<style>
    body{
        background-image: url('assets/imgs/mdbarbg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    
<style>
    #logindiv{
        width:60%;margin-left:20%;
        background:whitesmoke;box-shadow:1px 1px 20px gray;
        border-radius:20px 0 20px 0;
        border-left:4px solid rgb(35, 35, 141);
    }

#loginbtn:hover{
    background:rgb(235, 245, 255);
    border-radius:10px;
    border-left:none;
    border-bottom: 4px solid navy;
    border-top: 4px solid navy;
    transition-duration:1s;
    letter-spacing:4px;
}
#loginbtn{
    color:orange;letter-spacing:1px 1px 1px black;letter-spacing:2px;background:rgba(213, 213, 255, 0.76); font-size:2rem;border: none;border-left:4px solid navy; text-shadow: 1px 1px 1px black; box-shadow:1px 1px 10px gray;
    outline: none;
}




    @media screen and (min-width:2000px) {
        #logindiv{
        width:60%;margin-left:20%;
    }  
    }
    @media screen and (max-width:600px) {
        #logindiv{
        width:90%;margin-left:5%;
    }  
    }
</style>












<br>
<br>
<br>


<br>
<div style="display:none">
<div style="display:flex;flex-direction:row;border-left:4px solid navy;">
   <div style="border: none; border-right:1px solid silver;">
    <img src="assets/imgs/Coffee-blue.gif">
   </div>
   <div style="text-shadow:1px 1px 1px black;color:rgb(119, 157, 237);background:rgba(213, 207, 255, 0.918);">
    <p style="font-size:1.7rem; letter-spacing:2px;">Lorem ipsum dolor sit amet.</p>
   </div>
</div>
</div>



<br>
<br>

 <div id="logindiv">
       <h1 style="color:rgb(35, 35, 141); text-align: center;"> Admin Login </h1>
       <center>
        <form action="" method="post">
            <input type="text" name="name" id="" style="border:none;border-bottom:2px solid rgb(35, 35, 141); outline:none;font-size:2rem;background:rgba(213, 213, 255, 0.76);color: orange; text-shadow: 1px 1px 1px black; width:90%;margin:5%;text-align: center;" placeholder="Enter Email"><br><br>
            <input type="password" name="pass" id="" style="border:none;border-bottom:2px solid rgb(35, 35, 141); outline:none;font-size:2rem;background:rgba(213, 213, 255, 0.76);color: orange; text-shadow: 1px 1px 1px black; width:90%;margin:5%;text-align: center;" placeholder="Enter Password"><br><br><br>
             <button type="submit" name="loginbtn" id="loginbtn"> Login </button>
          </form>
       </center>
       <br>
       <br>
 </div>



</body>
</html>