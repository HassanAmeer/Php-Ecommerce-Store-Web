



<?php
include 'config.php';
session_start();
 error_reporting(0);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
<link rel="shortcut icon" href="assetscdn/favicon.png" type="image/png">
    
    <title> orders shipping </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    
<style>
    #emailsbell{
        width:60%;display:flex;flex-direction:row;
        margin-left: 20%;
    }
    @media screen and (max-width:600px) {
        #emailsbell{
        width:90%;margin-left:5%;
    }
    }
</style>
  </head>
  <body>


<div style="width:100%;background:black;box-shadow:1px 1px 20px gray;padding:8px; display:flex;flex-direction:row;">
   <a href="allorders.php" class="fa fa-arrow-left text-light" style="text-decoration:none; margin-left:1rem;font-size:2rem;"> </a>  <a href="vorders.php?orderid=<? echo $_GET['orderid']; ?>" style="color:white;text-decoration:none; margin-left:2rem;"><h2 style="color:white;"> Orders Shipping </h2></a>
</div>
<br>













<center>
<div style="float:right; width:10%;margin-right:1rem;">
  <div style="width:100%;">
    <img src="https://chart.apis.google.com/chart?cht=qr&chs=90x90&chl=<? $_SERVER['HTTP_HOST'].'/vorders.php?orderid='.$_GET['orderid']; ?>" data-imgscnrto="https://chart.apis.google.com/chart?cht=qr&chs=90x90&chl=<? $_SERVER['HTTP_HOST'].'/vorders.php?orderid='.$_GET['orderid']; ?>" class="scanbtn">
  </div>
  <div style="width:100%;">
    <button style="color:red;background:whitesmoke;border:none;border-radius:7px; border-left:4px solid red; border-right:4px solid red; box-shadow:1px 1px 10px gray;text-shadow:1px 1px 1px black;letter-spacing:5px;width:40px;" class="fa fa-scaner scanbtn"> </button>
  </div>
</div>
</center>



















<!-- heading -->
<h2 style="color:orange;text-shadow:1px 1px 1px black; margin-left:5%;"> Orders details </h2>
<!-- heading -->

<style>
#card{
  width:76%;margin-left:12%;
}
  @media screen and (max-width:600px) {
  #card{
  width:98%;margin-left:1%;
  }  
  }
</style>



 <? 
 
 if(isset($_GET['orderid']))
 {  $orderid = $_GET['orderid'];
$vwordr ="SELECT * FROM `c_orders` WHERE orderid='$orderid'";
  $vwordrsq = mysqli_query($db,$vwordr);
$vwordrs= mysqli_fetch_assoc($vwordrsq);
}

  

$orderid = $vwordrs['orderid'];
//$cphone = $vwordrs['cphone'];
$cemail = $vwordrs['cemail'];
$cname = $vwordrs['cname'];
$item_name = $vwordrs['item_name'];
$item_img = $vwordrs['item_img'];
$item_size = $vwordrs['item_size'];
//$item_price = $vwordrs['item_price'];
$item_quantity = $vwordrs['item_quantity'];
$total_price = $vwordrs['total_price'];
$cmsg = $vwordrs['cmsg'];
$country = $vwordrs['country'];
//$city = $vwordrs['city'];
$postal_code = $vwordrs['postal_code'];
//$address = $vwordrs['address'];
//$ip_address = $vwordrs['ip_address'];
$order_time = $vwordrs['order_time'];
$shipingstatus = $vwordrs['shipping_statues'];


?>


<br>
<br>
<br>
<br>

<div id="card">

<div style="width:60%;margin-left:20%;">
  <img id="getscanimg" src="assetscdn/adminitems/<? echo $item_img; ?>" style="width:80%;margin:5%;position:relative;z-index:150; float:right;background:none;backdrop-filter:blur(10px); box-shadow:1px 1px 10px silver; border-radius:10px 10px 0 0;">
</div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

<div style="width:90%;margin-left:5%; box-shadow: 1px 1px 20px gray;margin-top:-1rem;border-radius:10px;border-bottom:5px solid silver;background:whitesmoke;">

  <div class="card-body p-4">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h5 class="card-title"><? echo $item_name; ?></h5>
    <p class="card-text"><? echo $cmsg; ?></p>
    <p class="card-text"><small class="text-muted"><? echo $order_time; ?></small></p>
  </div>

<div style="justify-content:space-around;display:flex;flex-direction:row;border-top:1px solid silver;font-size:1.2rem;">
  <p class="text-muted"> Order By </p>
  <b style="color:black;"> <? echo $cname; ?> </b>
</div>
<div style="justify-content:space-around;display:flex;flex-direction:row;border-top:1px solid silver;font-size:1.2rem;">
  <p class="text-muted"> Email </p>
  <b style="color:black;"> <? echo $cemail; ?> </b>
</div>
<div style="justify-content:space-around;display:flex;flex-direction:row;border-top:1px solid silver;font-size:1.2rem;">
  <p class="text-muted"> Country </p>
  <b style="color:black;"> <? echo $country; ?> </b>
</div>

<div style="justify-content:space-around;display:flex;flex-direction:row;border-top:1px solid silver;font-size:1.2rem;">
  <p class="text-muted"> Postal Code </p>
  <b style="color:black;"> <? echo $postal_code; ?> </b>
</div>
<div style="justify-content:space-around;display:flex;flex-direction:row;border-top:1px solid silver;font-size:1.2rem;">
  <p class="text-muted"> Quantity <i class="fa fa-bar">, </i> Size </p>
  <b style="color:black;"> <? echo $item_quantity; ?> <i class="fa fa-bar">, </i> <? echo $item_size; ?> </b>
</div>
<div style="justify-content:space-around;display:flex;flex-direction:row;border-top:1px solid silver;font-size:1.2rem;">
  <p class="text-muted"> Price </p>
  <b style="color:black;"> Rs. <? echo $total_price; ?> </b>
</div>


<div class="card-footer text-muted" style="justify-content:space-around;display:flex;flex-direction:row; background:rgba(243, 243, 243, 0.889);">
  <p style="color:rgb(255, 165, 96);text-shadow:1px 1px 1px black; letter-spacing:2px;"> Status </p>
  <? if($shipingstatus == 'Recent')
  { ?>
  <b style="color:rgb(0, 183, 116);"><? echo $shipingstatus; ?> </b>
  <? } else if($shipingstatus == 'Return'){
    ?>
  <b style="color:rgb(183,0,0);"><? echo $shipingstatus; ?> </b>
  <? } else if($shipingstatus == 'InProgress'){ ?>
  <b style="color:rgb(0,70,183);"><? echo $shipingstatus; ?> </b>
  <? }else{ ?>
  <b style="color:rgb(26,255,171);text-shadow:1px 1px 1px black;letter-spacing:2px;"><? echo $shipingstatus; ?> √ </b>
  <? } ?>
</div>
</div>

</div>





















<script src="assetscdn/js/jqoffline.js"></script>
<script>
  $(document).on('click','#bellvbtn', function(){
      $('#bellvdiv').slideToggle();
  });
///////////////////////////////////////////
  $(document).on('click','.scanbtn', function(){
    var scan = $('.scanbtn').data('imgscnrto');
    $('#getscanimg').attr('src',scan);
    
  });
/////////


/////////
 /* function generatePD8F() {
       var doc = new jsPDF();
        doc.fromHTML(document.getElementById("card"),18,10,{
          'width': 170
        },
        function(a) {
          doc.save("coustomermsgs.pdf");
        });
      }  */
</script>

  </body>
</html>