
<?php

include 'config.php';
session_start();
 error_reporting(0);

if(!isset($_COOKIE['bytrid']))
{ header('location:checkout.php'); }


 $whrvid = $_COOKIE['bytrid'];
 $whrvmal = $_COOKIE['bymail'];


$vwordr ="SELECT * FROM `waiting_orders` WHERE orderid='$whrvid'";
  $vwordrsq = mysqli_query($db,$vwordr);
$vwordrs= mysqli_fetch_assoc($vwordrsq);

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





if(isset($_POST['updatordrbtn']))
{
$ordrinput = mysqli_real_escape_string($db,$_POST['ordrinput']);
 
 $vcodejsql = "INSERT INTO `c_orders` (orderid,cphone, cemail,cname,item_name,item_img,item_size,item_price,item_quantity,total_price,cmsg,country,city,postal_code,address,ip_address,tr_id) VALUES ('$orderid','$cphone','$cemail','$cname','$item_name','$item_img','$item_size','$item_price','$item_quantity','$total_price','$cmsg','$country','$city','$postal_code','$address','$ip_address','$ordrinput')";
 $vcodejq = mysqli_query($db,$vcodejsql) or die('not sql'.mysqli_error($db));
   if($vcodejq)
  { header('location:allorders.php'); }
  
  
}













?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title> Pay By Tr_ID </title>
<link rel="shortcut icon" href="assetscdn/favicon.png" type="image/png">
    <!-- custom css file link  -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
    text-transform: uppercase;
}

.container{
    min-height: 60vh;
    min-width: 100% !important;
    background: #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    padding-bottom: 10px;
}
@media screen and (max-width:800px)
{
    .container{
        min-height: 43vh;
    }
}
.container form{
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 10px 15px rgba(0,0,0,.1);
    padding: 20px;
    width: 600px;
    padding-top: 160px;
}

.container form .inputBox{
    margin-top: 20px;
}

.container form .inputBox span{
    display: block;
    color:#999;
    padding-bottom: 5px;
}

.container form .inputBox input,
.container form .inputBox select{
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border:1px solid rgba(0,0,0,.3);
    color:#444;
}

.container form .flexbox{
    display: flex;
    gap:15px;
}

.container form .flexbox .inputBox{
    flex:1 1 150px;
}

.container form .submit-btn{
    width: 100%;
    background:linear-gradient(45deg, indigo, orange);
    margin-top: 20px;
    padding: 10px;
    font-size: 20px;
    color:#fff;
    border-radius: 10px;
    cursor: pointer;
    transition: .2s linear;
}

.container form .submit-btn:hover{
    letter-spacing: 2px;
    opacity: .8;
}

.container .card-container{
    margin-bottom: -150px;
    position: relative;
    height: 250px;
    width: 400px;
}

.container .card-container .front{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0; left: 0;
    background:linear-gradient(45deg, indigo, orange);
    border-radius: 5px;
    backface-visibility: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,.2);
    padding:20px;
    transform:perspective(1000px) rotateY(0deg);
    transition:transform .4s ease-out;
}

.card-container{
  animation: rotatcard 2s infinite alternate-reverse;
}
@keyframes rotatcard{
  from{
transform:perspective(1000px) rotateY(-10deg);
  }
  to{
 transform:perspective(1000px) rotateY(10deg);
  }
}


.container .card-container .front .image{
    display: flex;
    align-items:center;
    justify-content: space-between;
    padding-top: 10px;
}

.container .card-container .front .image img{
    height: 50px;
}

.container .card-container .front .card-number-box{
    padding:30px 0;
    font-size: 22px;
    color:#fff;
}

.container .card-container .front .flexbox{
    display: flex;
}

.container .card-container .front .flexbox .box:nth-child(1){
    margin-right: auto;
}

.container .card-container .front .flexbox .box{
    font-size: 15px;
    color:#fff;
}

.container .card-container .back{
    position: absolute;
    top:0; left: 0;
    height: 100%;
    width: 100%;
    background:linear-gradient(45deg, blueviolet, orange);
    border-radius: 5px;
    padding: 20px 0;
    text-align: right;
    backface-visibility: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,.2);
    transform:perspective(1000px) rotateY(180deg);
    transition:transform .4s ease-out;
}

.container .card-container .back .stripe{
    background: #000;
    width: 100%;
    margin: 10px 0;
    height: 50px;
}

.container .card-container .back .box{
    padding: 0 20px;
}

.container .card-container .back .box span{
    color:#fff;
    font-size: 15px;
}

.container .card-container .back .box .cvv-box{
    height: 50px;
    padding: 10px;
    margin-top: 5px;
    color:#333;
    background: #fff;
    border-radius: 5px;
    width: 100%;
}

.container .card-container .back .box img{
    margin-top: 30px;
    height: 30px;
}
</style>
<title> Pay By TR ID </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); padding:6px;position: absolute; top:20px; left:20px;" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> Information </li>
        <li class="breadcrumb-item" onclick="history.back()"><a style="color:black;text-decoration:none;" href="/"> Payments </a></li>
      <li class="breadcrumb-item active" aria-current="page"> Shipping </li>
    </ol>
  </nav>



<?

$accnodata = "SELECT * FROM `store_stngs`";
$accnodtaq = mysqli_query($db,$accnodata);
$accnodtaf= mysqli_fetch_assoc($accnodtaq);
 
 $accno = $accnodtaf['acc_number'];
 $accname = $accnodtaf['acc_holder_name'];




?>



<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="image/chip.png">
                <img src="image/mezanbank_logo.png">
            </div>


<div class="card-number-box" style="letter-spacing:4px;"><? echo $accno;?></div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name"><? echo $accname; ?></div>
                </div>
                <div class="box">
                    <span style="font-size:1rem;"> <i class="fa fa-info-circle text-warning" style="text-shadow:1px 1px 1px black;"> </i> Pay Amounts </span>
                    <div class="expiration" style="font-size:0.8rem;color:rgb(255, 234, 234);text-shadow:1px 1px 1px black;">
                        <span class="exp-month"> On This Account No.</span><br>
                        <span class="exp-year"> send Transaction ID</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="image/visa.png" alt="">
            </div>
        </div>

    </div>

    <form method="post">
        <div class="inputBox">
            <span>Transaction Id Number</span>
            <input type="text" name="ordrinput" maxlength="100" class="card-number-input">
        </div>
        
        <input type="submit" name="updatordrbtn" value="Send Transaction Id" class="submit-btn">
    </form>

</div>    
    
<hr style="padding:7px; box-shadow:inset 1px 1px 13px silver, inset 1px 1px 5px black;">
<br>

<style>
    #detalcard{
        width:80%;margin-left:15%;
    }
#itemdetals{
    width:60%;display:flex;flex-direction:column;
}
/********************************/
@media screen and (max-width:900px)
{
    #detalcard{
        width:94%;margin-left:3%;
    }
    #itemdetals{
    width:90%; margin-left:5%;
}
}

</style>

<?

$vcountry = "SELECT * FROM `shipping_tax`";
  $vcountryq = mysqli_query($db,$vcountry);
$vcountryf= mysqli_fetch_assoc($vcountryq);
 
  if($vcountryf['vcountry'] == $country)
  { $ttltaxrs = $vcountryf['vtax'];
  }else{
    $ttltaxrs = $vcountryf['othertax'];
  }
/////////////////

?>
<div id="detalcard">
 <p><u style="color:rgb(255, 115, 0);"> <? echo $country; ?> </u> Shipping Fees + Taxes <b style="color:green;"> Rs. <? echo $ttltaxrs; ?> </b> </p>
<div style="box-shadow:1px 1px 20px gray; border-left:6px solid black;">
    <h1 style="float:right;">
        Rs.<? echo $total_price; ?> 
    </h1>
     <h1 style="color:rgb(211, 70, 0); margin-left:4px;"> <i class="fa-solid fa-money-check text-secondary"></i>
        Amounts To Pay
     </h1>
</div>
<h2 style="color:whitesmoke; text-shadow:1px 1px 1px black;"> PAY by: <b style="color:orange">
    Transaction ID
</b> </h2>
<br>
<div style="display:flex;flex-direction:row; margin:2%;">
    <div style="width:40%;">
        <img src="assetscdn/adminitems/<? echo $item_img; ?> " style="width:90%;margin:5%;box-shadow:1px 1px 10px black;border-radius:5px;">

     </div>
    <div style="display:flex;flex-direction:column; width:60%; margin-left:5%;">

        <div style="box-shadow:1px 1px 10px silver,inset 1px 1px 5px silver, 1px 1px 10px silverblack; background: rgb(252, 244, 237);padding:5px;border-left:4px solid orange;">
        <h3 style="color:orange; letter-spacing:2px; text-shadow:1px 1px 1px black;text-align: center;
        font-size: 2rem;padding:5px;"> <? echo $item_name; ?>  </h3>
        </div>

        <div style="box-shadow:1px 1px 10px silver,inset 1px 1px 5px silver, 1px 1px 10px silverblack; background: rgb(252, 244, 237);padding:5px;border-left:4px solid orange;">
        <h3 style="color:gray;"> Product Price: <b style="color:black;">Rs. <? echo $item_price; ?>  </b> </h3>
        </div>

        <div style="box-shadow:1px 1px 10px silver,inset 1px 1px 5px silver, 1px 1px 10px silver; background: rgb(252, 246, 240);padding:5px;border-left:4px solid orange;">
        <h3 style="color:gray;"> Size: <b style="color:black;"> <? echo $item_size; ?>  </b> </h3>
        </div>
        <div style="box-shadow:1px 1px 10px silver,inset 1px 1px 5px silver, 1px 1px 10px silver; background: rgb(255, 248, 243);padding:5px;border-left:4px solid orange;">
        <h3 style="color:gray;"> Quantity: <b style="color:black;"> <? echo $item_quantity; ?>  </b> </h3>
        </div>
        <div style="box-shadow:1px 1px 10px silver,inset 1px 1px 5px silver, 1px 1px 10px silver; background: rgb(255, 248, 243);padding:5px;border-left:4px solid orange;">
        <h3 style="color:gray;"> Order ID: <b style="color:black;"> <? echo $orderid; ?> </b> </h3>
        </div>
   </div>
</div>
<!------------- end of work row ------------------->
  
 <div id="itemdetals">
    <b style="color:rgb(170, 78, 237);text-shadow:1px 1px 1px silver;font-size:1rem;"> <u style="color:gray;border-bottom:0.1px solid silver;" class="fa fa-user-tie text-info"> </u> <? echo $cname; ?>  </b>
    <b style="color:black;font-size:1rem;"> <u style="color:gray;border-bottom:0.1px solid silver;">Email:</u> <? echo $cemail; ?>  </b>
    <b style="color:black;font-size:1rem;"> <u style="color:gray;border-bottom:0.1px solid silver;">Phone:</u> <? echo $cphone; ?>  </b>
    <b style="color:black;font-size:1rem;"> <u style="color:gray;border-bottom:0.1px solid silver;">country:</u> <? echo $country; ?> </b>
    <b style="color:black;font-size:1rem;"> <u style="color:gray;border-bottom:0.1px solid silver;">City:</u> <? echo $city; ?>  </b>
    <b style="color:black;font-size:1rem;"> <u style="color:gray;border-bottom:0.1px solid silver;">Postal Code:</u> <? echo $postal_code; ?>  </b>
 </div>

<br>
 <p style="color:gray;"> <b style="color:orange;">My Others Information: </b>
    <? echo $cmsg; ?> 
 </p>
 

</div>









<script>


</script>







</body>
</html>