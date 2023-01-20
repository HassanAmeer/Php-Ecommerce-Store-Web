









<?php

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


$vcodesql = "SELECT * FROM `vochercode` ORDER BY id DESC LIMIT 1";
$vcodeq =mysqli_query($db,$vcodesql);
$vcodef = mysqli_fetch_array($vcodeq);
$vcode = $vcodef['vcode'];
$vcodeper= $vcodef['vpercentage'];
$vcodexpird = $vcodef['vexpired'];




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


  <body style="background:black;">
<? include 'header.php'; ?>

<center>
 <h1 style="border-bottom:1px solid silver; width:40%;margin-top:40%;color:white;">Contact information</h1>
 <br>
 <br>
   <div class="shopify-policy__body">
          <div class="rte">
   <? 
    $timchk = time();
  if($vcodexpird > $timchk){
  if( $voucherv == 0){
   ?>
<h3 style="color:gold;"> <? echo $vcodeper;  ?>% <sub> OF </sub></h3>
<p style="color:aqua;"><strong style="color:silver;">Coupon Code</strong>: <? echo $vcode; ?></p>
 
<p style="color:silver;"> On Every Events new Coupon codes can Access untill time duration is end  </p>
   <? }else{ ?>
  <h1 style="color:aqua;"> Sorry Last Coupon code is <u style="color:orange;"> expired</u> </h1>
 <? }  } else { ?>
     <h1 style="color:pink;"> Sorry Last Coupon code is <u style="color:orange;"> expired</u> </h1>
 <?  } ?>
          </div>
        </div>
</center>












<div style="margin-top:30%;">
<? include 'footer.php'; ?>
</div>

 <script src="assetscdn/js/jqoffline.js"></script>
  <script>





  </script>
  </body></html>