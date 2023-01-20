









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





















<div style="color:white;width:80%;margin-left:10%;margin-top:20%;">
  <div class="shopify-policy__title">
    <h1>Refund policy</h1>
  </div>

  <div class="shopify-policy__body">
    <div class="rte">
        <p>We have a 07-day return policy, which means you have 07 days after receiving your item to request a return. <br><br>To be eligible for a return, your item must be in the same condition that you received it, unworn or unused, with tags, and in its original packaging. You’ll also need the receipt or proof of purchase. <br><br>To start a return, you can contact us at <a href="mailto:<? echo $email; ?>" class="text-warning"><? echo $email; ?></a>. Please note that returns will need to be sent to the following address: [INSERT RETURN ADDRESS] <br><br>If your return is accepted, we’ll send you a return shipping label, as well as instructions on how and where to send your package. Items sent back to us without first requesting a return will not be accepted. <br><br>You can always contact us for any return question at <a href="mailto:<? echo $email; ?>" class="text-warning"><? echo $email; ?></a>. <br></p>
<br>
<p><strong>Damages and issues</strong> <br>Please inspect your order upon reception and contact us immediately if the item is defective, damaged or if you receive the wrong item, so that we can evaluate the issue and make it right.</p>
<br>
<p><strong>Exceptions / non-returnable items</strong> <br>Certain types of items cannot be returned, like perishable goods (such as food, flowers, or plants), custom products (such as special orders or personalized items), and personal care goods (such as beauty products). We also do not accept returns for hazardous materials, flammable liquids, or gases. Please get in touch if you have questions or concerns about your specific item. <br><br>Unfortunately, we cannot accept returns on sale items or gift cards.</p>
<br>
<p><strong>Exchanges</strong> <br>The fastest way to ensure you get what you want is to return the item you have, and once the return is accepted, make a separate purchase for the new item.</p>
<br>
<p><strong>European Union 14 day cooling off period</strong> <br>Notwithstanding the above, if the merchandise is being shipped into the European Union, you have the right to cancel or return your order within 14 days, for any reason and without a justification. As above, your item must be in the same condition that you received it, unworn or unused, with tags, and in its original packaging. You’ll also need the receipt or proof of purchase.</p>
<br>
<p><strong>Refunds</strong> <br>We will notify you once we’ve received and inspected your return, and let you know if the refund was approved or not. If approved, you’ll be automatically refunded on your original payment method within 10 business days. Please remember it can take some time for your bank or credit card company to process and post the refund too. <br>If more than 15 business days have passed since we’ve approved your return, please contact us at <? echo $email; ?>.</p>
    </div>
  </div>
</div>
</div>


















<div style="margin-top:30%;">
<? include 'footer.php'; ?>
</div>

 <script src="assetscdn/js/jqoffline.js"></script>
  <script>





  </script>
  </body></html>