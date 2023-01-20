
<?php

include 'config.php';
session_start();
error_reporting(0);

if(!isset($_COOKIE['bytrid']))
{ header('location:checkout.php'); }
 $whrvid = $_COOKIE['bytrid'];
 $whrvmal = $_COOKIE['bymail'];
///////////////////////////

$v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
$v_stngsq =mysqli_query($db,$v_stngs);
$v_stngsf = mysqli_fetch_array($v_stngsq);
$title = $v_stngsf['ntitle'];
$frommail = $v_stngsf['email'];
$tothis = $_SERVER['HTTP_HOST'].'/allorders.php';

 $subject = $title;
 $message = 'Hi <mark> '.$whrvmal.' </mark> Your Order have been received And Products Deleiverd Soon Can Check your All Statics Of Products By View Profile Or By Link : '.$tothis;
 $headers = "From: ".$frommail;
 mail($whrvmal,$subject, $message, $headers);
 

 
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
$total_price = $vwordrs['total_price'].'00';
$cmsg = $vwordrs['cmsg'];
$country = $vwordrs['country'];
$city = $vwordrs['city'];
$postal_code = $vwordrs['postal_code'];
$address = $vwordrs['address'];
$ip_address = $vwordrs['ip_address'];



if(isset($_GET['amount_cents']))
{ 
  if($_GET['amount_cents'] == $total_price)
{
$ordrinput = 'bypaymob';
 $vcodejsql = "INSERT INTO `c_orders` (orderid,cphone, cemail,cname,item_name,item_img,item_size,item_price,item_quantity,total_price,cmsg,country,city,postal_code,address,ip_address,tr_id) VALUES ('$orderid','$cphone','$cemail','$cname','$item_name','$item_img','$item_size','$item_price','$item_quantity','$total_price','$cmsg','$country','$city','$postal_code','$address','$ip_address','$ordrinput')";
 $vcodejq = mysqli_query($db,$vcodejsql) or die('not sql'.mysqli_error($db));
  if($vcodejq)
  { 

 header('location:allorders.php');
  }
  else{ header('location:checkout.php'); }
 }
}

?>