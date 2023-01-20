





<?php
include 'config.php';
session_start();
 // error_reporting(0);

unset($_SESSION['alertgreenhom']);
unset($_SESSION['alertredhom']);


///////////////////////////////////////////
if(isset($_POST['btnfmsgs']))
{
 $namefmsgs = mysqli_real_escape_string($db,$_POST['namefmsgs']);
 $emailfmsgs = mysqli_real_escape_string($db,$_POST['emailfmsgs']);
 $descfmsgs = mysqli_real_escape_string($db,$_POST['descfmsgs']);

  $emailfmsgsql = "INSERT INTO `contacts` (name, email, desc_msgs) VALUES ('$namefmsgs','$emailfmsgs','$descfmsgs')";
   $emailfmsgsq = mysqli_query($db,$emailfmsgsql) or die('not sql'.mysqli_error($db)) ;
   if($emailfmsgsq){
   $_SESSION['alertgreenhom'] = 'thank_you For Contact reply soon';
   } else { 
      $_SESSION['alertredhom'] = 'Something Went Wrong';
   }
}
///////////////////////////////////







include 'config.php';
session_start();
 error_reporting(0);


if(!isset($_COOKIE['usrs']))
{
 $lnksupdat = "UPDATE `store_stngs` SET t_visitor=t_visitor + 1 ";
 $lnksupdatq = mysqli_query($db,$lnksupdat);
 setcookie('usrs','hdhdh',time() + 10000,'/');
}




$v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
$v_stngsq =mysqli_query($db,$v_stngs);
$v_stngsf = mysqli_fetch_array($v_stngsq);
$title = $v_stngsf['ntitle'];
$bell = $v_stngsf['bell'];
$ndesc = $v_stngsf['ndesc'];
$logo = $v_stngsf['logo'];
$headbgimg = $v_stngsf['headbgimg'];
$baner1 = $v_stngsf['baner1'];
$shoesbg = $v_stngsf['shoesbg'];
$voucherv0 = $v_stngsf['voucherv0'];
$email = $v_stngsf['email'];
?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta name="theme-color" content="#f59627">
    <link rel="shortcut icon" href="assetscdn/favicon.png" type="image/png">
    <title> <? echo $title; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <style>
    *{
      margin:0;
      padding: 0;
  /*    overflow-x:hidden; */
    }
   </style>
</head>

          <!-- =======================  popup data ================== -->
            

<style>
  #alertred{
width:50%; margin-left:25%; position:fixed;top:0;z-index:1100;  background:rgba(255,196,196,0.836); color:red; border-radius:0 0 5px 5px; border-left:15px solid red;font-size:1.5rem;box-shadow:1px 1px 10px red;
  }
  #alertgreen{
   width:50%; margin-left:25%; position:fixed;top:0;z-index:1100; background:rgba(176,254,159,0.835); color:green; border-radius:0 0 5px 5px; border-left:15px solid green;font-size:1.5rem;box-shadow:1px 1px 10px green;
  }
  @media screen and (min-width:2000px) {
  #alertgreen{ width:40%;margin-left:30%; }
   #alertred{ width:40%;margin-left:30%; }
  }
  @media screen and (max-width:600px) {
   #alertgreen{ width:100%;margin-left:0%;}
   #alertred{ width:100%;margin-left:0%;}
  }
</style>


<? if(isset($_SESSION['alertgreenhom'])){ ?>
<div id="alertgreen" role="alert">
   <? echo $_SESSION['alertgreenhom']; ?>
</div> 
<? } ?>

<? if(isset($_SESSION['alertredhom'])){ ?>
<div id="alertred" role="alert">
   <? echo $_SESSION['alertredhom']; ?>
</div>
<? } ?>

<script src="assetscdn//js/jqoffline.js"></script>
    <script>
   $(document).on('click','#alertgreen',function(){
     $('#alertgreen').hide(10);
   });
   $(document).on('click','#alertred',function(){
     $('#alertred').hide(10);
   });
</script>


<body style="background:black;">
<? include 'header.php'; ?>








<center>
 <h1 style="border-bottom:1px solid silver; width:40%;margin-top:40%;color:white;">Contact Us</h1>
 <br>
 <br>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 



















<form method="post">
  
<div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label"> Name </label>
  <input type="text" name="namefmsgs" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Email address</label>
  <input type="email" name="emailfmsgs" class="form-control" id="exampleFormControlInput2" placeholder="example@gmail.com" required="">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea name="descfmsgs" class="form-control" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
 </div>
 
 <button name="btnfmsgs" style="width:100%;padding:7px;color:white; font-size:1.3rem;" class="btn btn-outline-warning"> Send </button>
 
 
</form>





</center>












<div style="margin-top:30%;">
<? include 'footer.php'; ?>
</div>

 <script src="assetscdn/js/jqoffline.js"></script>
  <script>





  </script>
  </body></html>




