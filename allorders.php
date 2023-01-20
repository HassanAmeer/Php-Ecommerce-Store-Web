

<?php

include 'config.php';
session_start();
 error_reporting(0);

if(isset($_POST['loginbtn']))
{
  $mailflogin = mysqli_real_escape_string($db,$_POST['loginmail']);
  $chklogses = setcookie('bymail', $mailflogin , time() + 184600 , '/');
}

// setcookie('bymail', 'hs' , time() - 184600 , '/');


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assetscdn/favicon.png" type="image/png">
<title> Orders Shipping </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    #emailsbell{
        width:70%;display:flex;flex-direction:row;
        margin-left: 15%;
    }
    @media screen and (max-width:600px) {
        #emailsbell{
        width:90%;margin-left:5%;
    }
    }
</style>
  </head>
  <body>


<div style="width:100%;background:black;box-shadow:1px 1px 20px gray;padding:8px;">
     <a href="allorders.php" style="color:white;text-decoration:none;"><h2 style="color:white;letter-spacing:2px; margin-left:1rem;"> Orders Shipping </h2></a>
</div>
<br>

<?
 $bythischk = $_COOKIE['bymail'];
if(!isset($_COOKIE['bymail']))
{ 
?>
<form method="post" id="emailsbell">
  <div style="width:85%;">
     <input type="email" name="loginmail" style="outline:none; border-radius:15px;font-size:1.4rem;color:rgb(255, 136, 0);text-shadow:1px 1px 1px black; letter-spacing:1px;border:1px solid silver;width:90%;text-align:center;" placeholder="Email">
  </div>
  <div style="width:15%;">
   <button type="submit" name="loginbtn" style="oultine:none !important; text-shadow:1px 1px 1px black; font-size:1.4rem;border: none; border-left:5px solid orange;border-right: 5px solid orange;color:orange; background: black; border-radius: 15px;box-shadow: 1px 1px 8px rgba(82, 54, 0, 0.741);"> Login </button>
  </div>
</form>
<? }else{ ?>

<div id="emailsbell">
  <div style="width:85%;">
    <input type="email" style="oultine:none; border-radius:15px;font-size:1.4rem;color:rgb(255, 136, 0);text-shadow:1px 1px 1px black; letter-spacing:1px;border:1px solid silver;width:90%;" placeholder="Email" readonly="" value="<? echo $bythischk; ?>">
  </div>
  <div style="width:15%;">
    <button id="bellvbtn" class="fa fa-bell text-warning" style="text-shadow:1px 1px 1px black; font-size:2rem;border: none; background: none;outline:none;"> </button>
  </div>
</div>





<div id="bellvdiv" style="display:none; width:90%;margin:5%;background:whitesmoke;box-shadow:1px 1px 20px silver;border-radius: 5px;">
   <br>

<?
$vnotifiy ="SELECT * FROM `notifiy` WHERE bell_to='$bythischk'";
 $vnotifiyq = mysqli_query($db,$vnotifiy);
while($notifiyf= mysqli_fetch_assoc($vnotifiyq)){


?>

  <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="width:90%;margin-left:5%;">
    <div class="toast-header">
    <i class="fa fa-bell text-warning" style="text-shadow:1px 1px 1px black;"></i>
      <strong class="me-auto" style="margin-left:2%;"> <? echo $notifiyf['bell_from']; ?> </strong>
      <small class="text-muted"> <? echo substr($notifiyf['date'],0,11); ?> </small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
<? echo $notifiyf['msgs']; ?>
    </div>
  </div><br>
<? } ?>
  <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="width:90%;margin-left:5%;">
    <div class="toast-header">
    <i class="fa fa-bell text-warning" style="text-shadow:1px 1px 1px black;"></i>
      <strong class="me-auto" style="margin-left:2%;"> Shop </strong>
      <small class="text-muted"> Remaining </small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
 Welcome | <small style="color:gray;"><? echo substr($bythischk,0,10).'•••'; ?></small> Your Orders Shipping details Are there when Any Performance you can Access This Page From bottom of HomePage Of shop 
    </div>
  </div>







  <br>
</div>

































<br>
    <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin:5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a style="color:gray;text-decoration:none;" href="allorders.php?ctgry=Recent"> Recent </a>  </li>
            <li class="breadcrumb-item"><a style="color:black;text-decoration:none;" href="allorders.php?ctgry=Return"> Rejected </a></li>
            <li class="breadcrumb-item"><a style="color:black;text-decoration:none;" href="allorders.php?ctgry=InProgress"> In Progress </a></li>
          <li class="breadcrumb-item active" aria-current="page"> <a style="color:gray;text-decoration:none;" href="allorders.php?ctgry=Deliverd"> Deliverd </a> </li>
        </ol>
    </div>


<!-- heading -->
<h2 style="color:orange;text-shadow:1px 1px 1px black; margin-left:5%;"> <?
if(isset($_GET['ctgry']))
{
  echo $_GET['ctgry'].' ';
}else{
  echo 'Recent ';
}
?>
 Products </h2>
<!-- heading -->



<div style="width:96%;margin-left:3%;display:flex;flex-direction:row;flex-wrap:wrap;">
 
 <? 
 
 if(isset($_GET['ctgry']))
 {  $ctgrname = $_GET['ctgry'];
$vwordr ="SELECT * FROM `c_orders` WHERE cemail='$bythischk' AND shipping_statues LIKE '$ctgrname' ";
  $vwordrsq = mysqli_query($db,$vwordr);
 }else{
$vwordr ="SELECT * FROM `c_orders` WHERE cemail='$bythischk'";
  $vwordrsq = mysqli_query($db,$vwordr);
}

while($vwordrs= mysqli_fetch_assoc($vwordrsq)){
  
/*
$orderid = $vwordrs['orderid'];
$cphone = $vwordrs['cphone'];
$cemail = $vwordrs['cemail'];
$cname = $vwordrs['cname'];
$item_name = $vwordrs['item_name'];
$item_img = $vwordrs['item_img'];
$item_size = $vwordrs['item_size'];
$item_price = $vwordrs['item_price'];
$item_quantity = $vwordrs['item_quantity'];
$total_price = $vwordrs['total_price'];
$cmsg = $vwordrs['cmsg'];
$country = $vwordrs['country'];
$city = $vwordrs['city'];
$postal_code = $vwordrs['postal_code'];
$address = $vwordrs['address'];
$ip_address = $vwordrs['ip_address'];
$order_time = $vwordrs['order_time'];
*/
  
  
  
  
  
  ?>
  
  
  
  <div class="card mb-3" style="max-width: 20rem;margin-left:4%;margin-top:1%;box-shadow:1px 1px 20px gray;border-radius:5px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="assetscdn/adminitems/<? echo $vwordrs['item_img']; ?>" class="img-fluid rounded-start">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          
<a href="vorders.php?orderid=<? echo $vwordrs['orderid']; ?>" style="text-decoration:none;" class="card-title"> <b style="font-size:1rem;color:indigo;" ><? echo $vwordrs['item_name']; ?></b> <small class="fa fa-eye" style="color:rgba(255,184,106,0.888);text-shadow:1px 1px 1px gray;"> </small> </a>  
          
          <p class="card-text"><? echo  $vwordrs['cmsg']; ?></p>

        </div>
        <div class="card-footer text-muted"> <? echo $vwordrs['order_time']; ?>
        </div>
      </div>
    </div>
  </div>
 <? } ?>






</div>
<? } ?>


























































<script src="assetscdn/js/jqoffline.js"></script>
<script>
  $(document).on('click','#bellvbtn', function(){
      $('#bellvdiv').slideToggle();
  });
</script>
  </body>
</html>