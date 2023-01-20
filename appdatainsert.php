
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
header("Content-Type: application/json");

include 'config.php';
// session_start();
//  error_reporting(0);
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

 $ipadrs = $_SERVER['REMOTE_ADDR'];

 $id = mysqli_real_escape_string($db,$_POST['id']);
 $phone = mysqli_real_escape_string($db,$_POST['phone']);
 $email = mysqli_real_escape_string($db,$_POST['email']);
 $name = mysqli_real_escape_string($db,$_POST['name']);
 $title = mysqli_real_escape_string($db,$_POST['title']);
 $img = mysqli_real_escape_string($db,$_POST['imge']);

 $itemprice = mysqli_real_escape_string($db,$_POST['price']);

 $quntity = mysqli_real_escape_string($db,$_POST['quntityno']);
 $totalprice = mysqli_real_escape_string($db,$_POST['totalprice']);
 $address = mysqli_real_escape_string($db,$_POST['address']);
 $country = mysqli_real_escape_string($db,$_POST['country']);
 $city = mysqli_real_escape_string($db,$_POST['city']);
 $postalcode = mysqli_real_escape_string($db,$_POST['postalcode']);
 $desc = mysqli_real_escape_string($db,$_POST['descr']);

$insertorder = "INSERT INTO `waiting_orders` (cphone, cemail,cname,item_name,item_img,item_price,item_quantity,total_price,cmsg,country,city,postal_code,address,ip_address) VALUES ('$phone'
,'$email','$name','$title','$img','$itemprice','$quntity','$totalprice','$desc','$country'
,'$city','$postalcode','$address','$ipadrs')";
$insertorderq = mysqli_query($db,$insertorder) or die('not sql'.mysqli_error($db));
  
if($insertorderq)
  { json_encode(1); }else{ echo json_encode(0); }































 ?>





















