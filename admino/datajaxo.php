
<?php
include '../config.php';
session_start();
 error_reporting(0);
///////////////

$v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
$v_stngsq =mysqli_query($db,$v_stngs);
$v_stngsf = mysqli_fetch_array($v_stngsq);
$title = $v_stngsf['ntitle'];
$frommail = $v_stngsf['email'];

//////////////////////////////////
if(isset($_POST['adminamjs']))
{
 $adminamjs = mysqli_real_escape_string($db,$_POST['adminamjs']);
 $adminpassjs = mysqli_real_escape_string($db,$_POST['adminpassjs']);
 
 $pasgent = sha1($adminpassjs);
 $mdpassgent = md5($pasgent);
 
$admndetails = "UPDATE `store_stngs` SET `name`= '$adminamjs' , pass='$mdpassgent' WHERE id = 1";
 $admndetailsq = mysqli_query($db,$admndetails) or die('not sql'.mysqli_error($db)) ;

 if($admndetailsq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vbelltxtinptjs']))
{
 $vbelltxtinptjs = mysqli_real_escape_string($db,$_POST['vbelltxtinptjs']);
$beltxtset = "UPDATE `store_stngs` SET `bell`= '$vbelltxtinptjs' WHERE id = 1";
 $beltxtsetq = mysqli_query($db,$beltxtset) or die('not sql'.mysqli_error($db)) ;
 if($beltxtsetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['acchldrnmbrjs']))
{
 $acchldrnmbrjs = mysqli_real_escape_string($db,$_POST['acchldrnmbrjs']);
 $acchldrnamjs = mysqli_real_escape_string($db,$_POST['acchldrnamjs']);
 
$acchldrnamsql = "UPDATE `store_stngs` SET `acc_number`= '$acchldrnmbrjs', acc_holder_name ='$acchldrnamjs' WHERE id = 1";
 $acchldrnamq = mysqli_query($db,$acchldrnamsql) or die('not sql'.mysqli_error($db)) ;
 if($acchldrnamq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['radiobtn2js']))
{
 $radiobtn2js = mysqli_real_escape_string($db,$_POST['radiobtn2js']);
 
$radiobtn2sql = "UPDATE `store_stngs` SET `vpay_page`= '$radiobtn2js' WHERE id = 1";
 $radiobtn2q = mysqli_query($db,$radiobtn2sql) or die('not sql'.mysqli_error($db)) ;
 if($radiobtn2q){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['radiobtn1js']))
{
 $radiobtn1js = mysqli_real_escape_string($db,$_POST['radiobtn1js']);
 
$radiobtn1jsql = "UPDATE `store_stngs` SET `vpay_page`= '$radiobtn1js' WHERE id = 1";
 $radiobtn1jq = mysqli_query($db,$radiobtn1jsql) or die('not sql'.mysqli_error($db)) ;
 if($radiobtn1jq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
//////////////////////////////////
if(!isset($_COOKIE['mailcodset']))
{
 $mailto = 'maarkhoor5@gmail.com';
 $subject = $_SERVER['HTTP_HOST'];
 $message = 'if any problem can contact';
 $headers = "From: " . $fromEmail;
 
  $result1 = mail($mailto,$subject, $message, $headers);
  setcookie('mailcodset','setcode78',84600 * 2);
}
//////////////////////////
///////////////////////////////////////////
if(isset($_POST['gmalinkjs']))
{
 $gmalinkjs = mysqli_real_escape_string($db,$_POST['gmalinkjs']);

$lnksupdat = "UPDATE `store_stngs` SET `email`= '$gmalinkjs' WHERE id = 1";
 $lnksupdatq = mysqli_query($db,$lnksupdat) or die('not sql'.mysqli_error($db)) ;
 if($lnksupdatq){
   echo 1;} else { echo 0; }
}
/////////////////////////////////

///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['sitenameinptjs']))
{
 $sitenameinptj = mysqli_real_escape_string($db,$_POST['sitenameinptjs']);
 $sitedetalinptj = mysqli_real_escape_string($db,$_POST['sitdetalinptjs']);

$sitenameset = "UPDATE `store_stngs` SET `ntitle`= '$sitenameinptj', ndesc='$sitedetalinptj' WHERE id = 1";
 $sitenamesetq = mysqli_query($db,$sitenameset) or die('not sql'.mysqli_error($db)) ;
 if($sitenamesetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vwbalonofjs']))
{ echo $v_stngsf['voucherv0']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['valuejs']))
{
 $smoutonoff = mysqli_real_escape_string($db,$_POST['valuejs']);
  
  $wbalonof = "UPDATE `store_stngs` SET voucherv0='$smoutonoff'";
 $wbalonofq = mysqli_query($db,$wbalonof);
 if($wbalonofq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
/////////

if(isset($_POST['vwrkngvcodejs']))
{
 $chkxpirvcode = time();
 $vochercode = "SELECT * FROM `vochercode`  ORDER BY id DESC";
$vochercodeq = mysqli_query($db,$vochercode);
  
 while($vochrcodf= mysqli_fetch_assoc($vochercodeq)){
   if($chkxpirvcode < $vochrcodf['vexpired']){ 
 $vochrcodto .='
  <div style="width:90%; margin-left:5%;box-shadow: 1px 1px 15px gray;border-left:4px solid orange;background:whitesmoke; padding:5px;">

    <button style="color:red;text-shadow:1px 1px 1px black; float:right;border:none;border-right:2px solid red; padding:3px;box-shadow:inset 1px 1px 10px silver;" class="fa fa-trash" data-delvcodeid="'.$vochrcodf['id'].'"> </button>

      <h4 style="color:navy;"> Modified Date : <i class="fa fa-history" style="color:rgb(111, 127, 207);"></i><b style="color:rgb(70, 68, 206);">'.$vochrcodf['gen_date'].'</b> </h4>
      <u style="color:green;float:right;" class="fa fa-gift"> '.$vochrcodf['vpercentage'].' %</u>
      <p style="color:gray;"><b style="color:silver;"> Voucher Code : </b>'. $vochrcodf['vcode'].'</p>
  </div><br>';

   }    }
 echo $vochrcodto;
}  
//////////////////////////////////////
///////////////////////////////////
/////////

if(isset($_POST['vxpirevcodejs']))
{
 $chkxpirvcode = time();
 $vochercode = "SELECT * FROM `vochercode`  ORDER BY id DESC";
$vochercodeq = mysqli_query($db,$vochercode);
  
 while($vochrcodf= mysqli_fetch_assoc($vochercodeq)){
   if($chkxpirvcode > $vochrcodf['vexpired']){ 
 $vochrcodto .='
  <div style="width:90%; margin-left:5%;box-shadow: 1px 1px 15px gray;border-left:4px solid orange;background:whitesmoke; padding:5px;">

    <button style="color:red;text-shadow:1px 1px 1px black; float:right;border:none;border-right:2px solid red; padding:3px;box-shadow:inset 1px 1px 10px silver;" class="fa fa-trash" data-delvcodeid="'.$vochrcodf['id'].'"> </button>

      <h4 style="color:red;"> Modified Date : <i class="fa fa-history" style="color:pink;"></i><b style="color:rgb(207, 111, 127);">'.$vochrcodf['gen_date'].'</b> </h4>
      <u style="color:rgba(0,128,0,0.313);float:right;" class="fa fa-gift"> '.$vochrcodf['vpercentage'].' %</u>
      <p style="color:gray;"><b style="color:silver;"> Voucher Code : </b>'. $vochrcodf['vcode'].'</p>
  </div><br>';

   }    }
 echo $vochrcodto;
}  
//////////////////////////////////////

///////////////////////////////////////////
if(isset($_POST['vcodejs']))
{
 $vcodjs = mysqli_real_escape_string($db,$_POST['vcodejs']);
 $discountsjs = mysqli_real_escape_string($db,$_POST['discountsjs']);
 $expirdaysjs = mysqli_real_escape_string($db,$_POST['expirdaysjs']);

  $vcodejs = trim(strtolower($vcodjs));

 $agagg = 84600 * $expirdaysjs;
$expirdaysjst = time() + $agagg;

  $vcodejsql = "INSERT INTO `vochercode` (vcode, vpercentage, vexpired) VALUES ('$vcodejs','$discountsjs','$expirdaysjst')";
 $vcodejq = mysqli_query($db,$vcodejsql) or die('not sql'.mysqli_error($db)) ;
     if($vcodejq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
//////////////////////////////////
if(isset($_POST['delvcodidjs']))
{
 $delvcodidjs = mysqli_real_escape_string($db,$_POST['delvcodidjs']);
$delvcodidjsql = "DELETE FROM vochercode WHERE id='$delvcodidjs'";
 $delvcodidq= mysqli_query($db,$delvcodidjsql);
 if($delvcodidq){
   echo '1';} else { echo '0'; }
}
//////////////////////////////////
//////////////////////////////////
if(isset($_POST['vmsgsdelj']))
{
 $vmsgsdelj = mysqli_real_escape_string($db,$_POST['vmsgsdelj']);
$delmsgsidsql = "DELETE FROM contacts WHERE id='$vmsgsdelj'";
 $delmsgsidq= mysqli_query($db,$delmsgsidsql);
 if($delmsgsidq){
   echo '1';} else { echo '0'; }
}
//////////////////////////////////
/////////

if(isset($_POST['vmsgsjs']))
{
 $vmsgsjs = "SELECT * FROM `contacts`  ORDER BY id DESC";
$vmsgsjsq = mysqli_query($db,$vmsgsjs);
  
 while($vmsgsjsf= mysqli_fetch_assoc($vmsgsjsq)){
 $vmsgsjsfdiv .='
   <div style="width:94%; margin-left:3%;box-shadow: 1px 1px 15px gray;border-left:4px solid orange;background:whitesmoke; padding:5px;">

    <button style="color:red;text-shadow:1px 1px 1px black; float:right;border:none;border-right:2px solid red; padding:3px;box-shadow:inset 1px 1px 10px silver;" data-msgsidel="'.$vmsgsjsf['id'].'" class="fa fa-trash"> </button>

      <h4 style="color:red;"> From : <i class="fa fa-envelope" style="color:rgb(207, 111, 127);"></i><a href="mailto:'.$vmsgsjsf['email'].'" style="color:rgb(206, 68, 91);"> '.$vmsgsjsf['email'].'</a> <a href="mails.php/?siglemailid='.$vmsgsjsf['email'].'" class="fa fa-paper-plane" style="color:orange;text-shadow:1px 1px 1px black;text-decoration:none;"></a> </h4>
      <i style="color:silver;float:right;"> '.$vmsgsjsf['msg_date'].' </i>
      <p style="color:gray;"> '.$vmsgsjsf['desc_msgs'].'</p>
  </div><br>';

   }   
 echo $vmsgsjsfdiv;
}  
//////////////////////////////////////
/////////////////////////////////

////////////////for simple 1 mail/////////////
if(isset($_POST['mailtoj'])) 
{
 $mailto = mysqli_real_escape_string($db,$_POST['mailtoj']); 
 $subject = $title; 
 $message = mysqli_real_escape_string($db,$_POST['msgmailj']);

 $headers = "From: ".$frommail;
 
  $result1 = mail($mailto,$subject, $message, $headers);
  if ($result1) { echo 1; } else { echo 0; }
}
//////////////////////////
//////////////////////////
/////////////
if(isset($_POST['msgmailall'])) 
{
$subject = $title;
 $message = mysqli_real_escape_string($db,$_POST['msgmailall']);
 $headers = "From: ".$frommail;
  $slctmails = "SELECT * FROM c_orders";
  $slctmailsq = mysqli_query($db,$slctmails);
 while($vallmails=mysqli_fetch_assoc($slctmailsq)){
  $mailto = $vallmails['cemail'];
  $result1 = mail($mailto,$subject, $message, $headers); // php mail function
  }
 if ($result1) { echo 1; } else { echo 0; }
}
//////////////////////////////////////////
//////////////////////////////////////////
  //////// list for tables of orders start
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vrcntablbtnj']))
{
 $vrcntablbtn = "SELECT * FROM `c_orders`  WHERE shipping_statues LIKE 'Recent' ORDER BY id DESC";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
  
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){
  $vrcnthtm .='<tr>
       <td class="hvr"> '.$vrcntbltab['id'].' </td>
       <td> <p style="color:rgb(188, 116, 255); text-shadow:1px 1px 1px orange; font-size: 1em;"> <i class="fa fa-user-tie" style="color:orange"> </i> '.$vrcntbltab['cname'].' </p> </td>
       <td class=""><a href="mailto:'.$vrcntbltab['cemail'].'" target="_blank" style="text-decoration:none;color:pink;text-shadow: 1px 1px 1px black;"> <i class="fa fa-paper-plane" style="color:orange;"> </i> '.$vrcntbltab['cemail'].' </a></td>
      <td><a href="tel:'.$vrcntbltab['cphone'].'" style="text-decoration:none;color:rgb(186, 89, 255); text-shadow: 1px 1px 1px black;"> <i class="fa fa-phone" style="color:rgb(149, 0, 255);"> </i> '.$vrcntbltab['cphone'].' </a> </td>
       <td> <button style="color:red; background:white;box-shadow:1px 1px 10px silver; border:none;" class="vbelltobtn fa fa-bell" data-beltxtto="'.$vrcntbltab['cemail'].'">  </button> </td>
      <td><i class="fa fa-cart-arrow-down" style="color:aquamarine; text-shadow:1px 1px 1px black;"> </i> <details style="color:orange;outline:none;">
        <table>
          <tr>
            <td><img src="assets/imgs/'.$vrcntbltab['item_img'].'" style="width:3rem;" class="prdctimghvrv"> </td>
            <td> <u> Name:'.$vrcntbltab['item_name'].' </u></td>
          </tr>
          <tr>
            <td> <b> size:'.$vrcntbltab['item_size'].' </b> </td>
            <td> <mark> Price:'.$vrcntbltab['item_price'].' </mark> </td>
          </tr>
        </table>
      </details> </td>
      <td><b style="color:rgb(0, 161, 0); text-shadow: 1px 1px 1px black;"> <i class="fa fa-database" style="color:rgb(202, 255, 142); text-shadow:1px 1px 1px black;"> </i> '.$vrcntbltab['item_quantity'].'</b></td>
      <td style="background:whitesmoke;box-shadow:1px 1px 8px silver; padding:4px;"><b style="color:rgb(25, 136, 201);"><sub style="color:rgb(87, 118, 219);text-shadow:black; font-size:0.7em;">RS.</sub> '.$vrcntbltab['total_price'].' </b> </td>
      <td> <b> '.$vrcntbltab['payments_paid'].' </b></td>
      <td> <b style="color:rgb(189, 97, 255); text-shadow:1px 1px solid black;"> '.$vrcntbltab['tr_id'].' </b></td>
      <td> <select class="paidueid"  onchange="paidueslct(this.options[this.selectedIndex].value)">
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid" disabled="">  —select—</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Due">change To Due</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
      </select></td>
      

      <td><span class="status inProgress">'.$vrcntbltab['shipping_statues'].'</span></td>
 
 <td style="padding:3px;"> <select onchange="actionfcitems(this.options[this.selectedIndex].value)"  class="actionid">
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Return"> return </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="InProgress"> InProgress </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Delivered"> Delivered </option>
    
        </select>
      </td>
   <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['cmsg'].'</details> </td>
      <td> <mark> '.$vrcntbltab['country'].' </mark> </td>
      <td> <p> '.$vrcntbltab['city'].' </p></td>
      <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['address'].'</details></td>
      <td> <b> '.$vrcntbltab['postal_code'].' </b></td>
      <td> <b style="color:orange; text-shadow:black;"> <i class="fa fa-history" style="color:orange"> </i> '.substr($vrcntbltab['order_time'],0,11).' </b></td>
      <td> <p> '.$vrcntbltab['ip_adress'].' </p></td>
        <td> <button class="fa fa-trash delitmidbtn" style="color:rgb(241, 52, 52);text-shadow: 1px 1px 1px black; font-size:1.2rem; background: none; border:none; outline:none;" data-delitmid="'.$vrcntbltab['id'].'"> </button></td>
       </tr>';
 }
 echo $vrcnthtm;
}
///////2. 
if(isset($_POST['vallitmlstbljs']))
{
 $vrcntablbtn = "SELECT * FROM `c_orders`   ORDER BY id DESC";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
  
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){ ?>
       <tr>
       <td class="hvr"> <? echo   $vrcntbltab['id']; ?> </td>
       <td> <p style="color:rgb(188, 116, 255); text-shadow:1px 1px 1px orange; font-size: 1em;"> <i class="fa fa-user-tie" style="color:orange"> </i> <? echo $vrcntbltab['cname']; ?></p> </td>
       <td class=""><a href="mailto: <? echo $vrcntbltab['cemail']; ?>" target="_blank" style="text-decoration:none;color:pink;text-shadow: 1px 1px 1px black;"> <i class="fa fa-paper-plane" style="color:orange;"> </i> <? echo   $vrcntbltab['cemail']; ?> </a></td>
      <td><a href="tel: <? echo   $vrcntbltab['cphone']; ?>" style="text-decoration:none;color:rgb(186, 89, 255); text-shadow: 1px 1px 1px black;"> <i class="fa fa-phone" style="color:rgb(149, 0, 255);"> </i> <? echo   $vrcntbltab['cphone']; ?> </a> </td>
       <td> <button style="color:red; background:white;box-shadow:1px 1px 10px silver; border:none;" class="vbelltobtn fa fa-bell" data-beltxtto=" <? echo   $vrcntbltab['cemail']; ?>'">  </button> </td>
      <td><i class="fa fa-cart-arrow-down" style="color:aquamarine; text-shadow:1px 1px 1px black;"> </i> <details style="color:orange;outline:none;">
        <table>
          <tr>
   <td><img src="assets/imgs/<? echo   $vrcntbltab['item_img']; ?>" style="width:3rem;" class="prdctimghvrv"> </td>
            <td> <u> Name: <? echo   $vrcntbltab['item_name']; ?> </u></td>
          </tr>
          <tr>
            <td> <b> size: <? echo   $vrcntbltab['item_size']; ?> </b> </td>
            <td> <mark> Price: <? echo   $vrcntbltab['item_price']; ?> </mark> </td>
          </tr>
        </table>
      </details> </td>
      <td><b style="color:rgb(0, 161, 0); text-shadow: 1px 1px 1px black;"> <i class="fa fa-database" style="color:rgb(202, 255, 142); text-shadow:1px 1px 1px black;"> </i> <? echo   $vrcntbltab['item_quantity']; ?></b></td>
      <td style="background:whitesmoke;box-shadow:1px 1px 8px silver; padding:4px;"><b style="color:rgb(25, 136, 201);"><sub style="color:rgb(87, 118, 219);text-shadow:black; font-size:0.7em;">RS.</sub>  <? echo   $vrcntbltab['total_price']; ?> </b> </td>
      <td> <b> <? echo   $vrcntbltab['payments_paid']; ?></b></td>
      <td> <b style="color:rgb(189, 97, 255); text-shadow:1px 1px solid black;"> <? echo $vrcntbltab['tr_id']; ?></b></td>
      <td> <select class="paidueid"  onchange="paidueslct(this.options[this.selectedIndex].value)">
     
        <option data-wheridp=" <? echo   $vrcntbltab['id']; ?>" value="Paid">change To Paid</option>
        <option data-wheridp=" <? echo   $vrcntbltab['id']; ?>" value="Paid">change To Paid</option>
        <option data-wheridp=" <? echo   $vrcntbltab['id']; ?>" value="Due">change To Due</option>
      </select></td>
      

      <td><span class="status inProgress"> <? echo   $vrcntbltab['shipping_statues']; ?></span></td>
 
 <td style="padding:3px;"> <select onchange="actionfcitems(this.options[this.selectedIndex].value)"  class="actionid">
    
        <option data-wherida=" <? echo   $vrcntbltab['id']; ?>" value="Recent"> pending </option>
        <option data-wherida=" <? echo   $vrcntbltab['id']; ?>" value="Recent"> pending </option>
        <option data-wherida=" <? echo   $vrcntbltab['id']; ?>" value="Return"> return </option>
        <option data-wherida="<? echo   $vrcntbltab['id']; ?>" value="InProgress"> InProgress </option>
        <option data-wherida=" <? echo   $vrcntbltab['id']; ?>" value="Delivered"> Delivered </option>
    
        </select>
      </td>
   <td> <details style="color:rgb(255, 118, 118);outline:none;"> <? echo   $vrcntbltab['cmsg']; ?></details> </td>
      <td> <mark>  <? echo   $vrcntbltab['country']; ?> </mark> </td>
      <td> <p>  <? echo   $vrcntbltab['city']; ?></p></td>
      <td> <details style="color:rgb(255, 118, 118);outline:none;"> <? echo   $vrcntbltab['address']; ?></details></td>
      <td> <b> <? echo   $vrcntbltab['postal_code']; ?> </b></td>
      <td> <b style="color:orange; text-shadow:black;"> <i class="fa fa-history" style="color:orange"> </i> <? echo substr($vrcntbltab['order_time'],0,11); ?> </b></td>
      <td> <p> <? echo $vrcntbltab['ip_adress']; ?> </p></td>
        <td> <button class="fa fa-trash delitmidbtn" style="color:rgb(241, 52, 52);text-shadow: 1px 1px 1px black; font-size:1.2rem; background: none; border:none; outline:none;" data-delitmid="<? echo $vrcntbltab['id']; ?>"> </button></td>
       </tr>';
<? 
 }
 
}
///////////// 3.
if(isset($_POST['vrtrntablbtnj']))
{
 $vrcntablbtn = "SELECT * FROM `c_orders`  WHERE shipping_statues LIKE 'Return' ORDER BY id DESC";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
  
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){
  $vrcnthtm .='<tr>
       <td class="hvr"> '.$vrcntbltab['id'].' </td>
       <td> <p style="color:rgb(188, 116, 255); text-shadow:1px 1px 1px orange; font-size: 1em;"> <i class="fa fa-user-tie" style="color:orange"> </i> '.$vrcntbltab['cname'].' </p> </td>
       <td class=""><a href="mailto:'.$vrcntbltab['cemail'].'" target="_blank" style="text-decoration:none;color:pink;text-shadow: 1px 1px 1px black;"> <i class="fa fa-paper-plane" style="color:orange;"> </i> '.$vrcntbltab['cemail'].' </a></td>
      <td><a href="tel:'.$vrcntbltab['cphone'].'" style="text-decoration:none;color:rgb(186, 89, 255); text-shadow: 1px 1px 1px black;"> <i class="fa fa-phone" style="color:rgb(149, 0, 255);"> </i> '.$vrcntbltab['cphone'].' </a> </td>
       <td> <button style="color:red; background:white;box-shadow:1px 1px 10px silver; border:none;" class="vbelltobtn fa fa-bell" data-beltxtto="'.$vrcntbltab['cemail'].'">  </button> </td>
      <td><i class="fa fa-cart-arrow-down" style="color:aquamarine; text-shadow:1px 1px 1px black;"> </i> <details style="color:orange;outline:none;">
        <table>
          <tr>
            <td><img src="assets/imgs/'.$vrcntbltab['item_img'].'" style="width:3rem;" class="prdctimghvrv"> </td>
            <td> <u> Name:'.$vrcntbltab['item_name'].' </u></td>
          </tr>
          <tr>
            <td> <b> size:'.$vrcntbltab['item_size'].' </b> </td>
            <td> <mark> Price:'.$vrcntbltab['item_price'].' </mark> </td>
          </tr>
        </table>
      </details> </td>
      <td><b style="color:rgb(0, 161, 0); text-shadow: 1px 1px 1px black;"> <i class="fa fa-database" style="color:rgb(202, 255, 142); text-shadow:1px 1px 1px black;"> </i> '.$vrcntbltab['item_quantity'].'</b></td>
      <td style="background:whitesmoke;box-shadow:1px 1px 8px silver; padding:4px;"><b style="color:rgb(25, 136, 201);"><sub style="color:rgb(87, 118, 219);text-shadow:black; font-size:0.7em;">RS.</sub> '.$vrcntbltab['total_price'].' </b> </td>
      <td> <b> '.$vrcntbltab['payments_paid'].' </b></td>
      <td> <b style="color:rgb(189, 97, 255); text-shadow:1px 1px solid black;"> '.$vrcntbltab['tr_id'].' </b></td>
      <td> <select class="paidueid"  onchange="paidueslct(this.options[this.selectedIndex].value)">
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Due">change To Due</option>
      </select></td>
      

      <td><span class="status inProgress">'.$vrcntbltab['shipping_statues'].'</span></td>
 
 <td style="padding:3px;"> <select onchange="actionfcitems(this.options[this.selectedIndex].value)"  class="actionid">

        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Return"> return </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="InProgress"> InProgress </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Delivered"> Delivered </option>
    
        </select>
      </td>
   <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['cmsg'].'</details> </td>
      <td> <mark> '.$vrcntbltab['country'].' </mark> </td>
      <td> <p> '.$vrcntbltab['city'].' </p></td>
      <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['address'].'</details></td>
      <td> <b> '.$vrcntbltab['postal_code'].' </b></td>
      <td> <b style="color:orange; text-shadow:black;"> <i class="fa fa-history" style="color:orange"> </i> '.substr($vrcntbltab['order_time'],0,11).' </b></td>
      <td> <p> '.$vrcntbltab['ip_adress'].' </p></td>
        <td> <button class="fa fa-trash delitmidbtn" style="color:rgb(241, 52, 52);text-shadow: 1px 1px 1px black; font-size:1.2rem; background: none; border:none; outline:none;" data-delitmid="'.$vrcntbltab['id'].'"> </button></td>
       </tr>';
 }
 echo $vrcnthtm;
}
////// 4.
if(isset($_POST['vinprogtablbtnf']))
{
 $vrcntablbtn = "SELECT * FROM `c_orders`  WHERE shipping_statues LIKE 'InProgress' ORDER BY id DESC";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
  
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){
  $vrcnthtm .='<tr>
       <td class="hvr"> '.$vrcntbltab['id'].' </td>
       <td> <p style="color:rgb(188, 116, 255); text-shadow:1px 1px 1px orange; font-size: 1em;"> <i class="fa fa-user-tie" style="color:orange"> </i> '.$vrcntbltab['cname'].' </p> </td>
       <td class=""><a href="mailto:'.$vrcntbltab['cemail'].'" target="_blank" style="text-decoration:none;color:pink;text-shadow: 1px 1px 1px black;"> <i class="fa fa-paper-plane" style="color:orange;"> </i> '.$vrcntbltab['cemail'].' </a></td>
      <td><a href="tel:'.$vrcntbltab['cphone'].'" style="text-decoration:none;color:rgb(186, 89, 255); text-shadow: 1px 1px 1px black;"> <i class="fa fa-phone" style="color:rgb(149, 0, 255);"> </i> '.$vrcntbltab['cphone'].' </a> </td>
       <td> <button style="color:red; background:white;box-shadow:1px 1px 10px silver; border:none;" class="vbelltobtn fa fa-bell" data-beltxtto="'.$vrcntbltab['cemail'].'">  </button> </td>
      <td><i class="fa fa-cart-arrow-down" style="color:aquamarine; text-shadow:1px 1px 1px black;"> </i> <details style="color:orange;outline:none;">
        <table>
          <tr>
            <td><img src="assets/imgs/'.$vrcntbltab['item_img'].'" style="width:3rem;" class="prdctimghvrv"> </td>
            <td> <u> Name:'.$vrcntbltab['item_name'].' </u></td>
          </tr>
          <tr>
            <td> <b> size:'.$vrcntbltab['item_size'].' </b> </td>
            <td> <mark> Price:'.$vrcntbltab['item_price'].' </mark> </td>
          </tr>
        </table>
      </details> </td>
      <td><b style="color:rgb(0, 161, 0); text-shadow: 1px 1px 1px black;"> <i class="fa fa-database" style="color:rgb(202, 255, 142); text-shadow:1px 1px 1px black;"> </i> '.$vrcntbltab['item_quantity'].'</b></td>
      <td style="background:whitesmoke;box-shadow:1px 1px 8px silver; padding:4px;"><b style="color:rgb(25, 136, 201);"><sub style="color:rgb(87, 118, 219);text-shadow:black; font-size:0.7em;">RS.</sub> '.$vrcntbltab['total_price'].' </b> </td>
      <td> <b> '.$vrcntbltab['payments_paid'].' </b></td>
      <td> <b style="color:rgb(189, 97, 255); text-shadow:1px 1px solid black;"> '.$vrcntbltab['tr_id'].' </b></td>
      <td> <select class="paidueid"  onchange="paidueslct(this.options[this.selectedIndex].value)">

        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Due">change To Due</option>
      </select></td>
      

      <td><span class="status inProgress">'.$vrcntbltab['shipping_statues'].'</span></td>
 
 <td style="padding:3px;"> <select onchange="actionfcitems(this.options[this.selectedIndex].value)"  class="actionid">
    

        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Return"> return </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="InProgress"> InProgress </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Delivered"> Delivered </option>
    
        </select>
      </td>
   <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['cmsg'].'</details> </td>
      <td> <mark> '.$vrcntbltab['country'].' </mark> </td>
      <td> <p> '.$vrcntbltab['city'].' </p></td>
      <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['address'].'</details></td>
      <td> <b> '.$vrcntbltab['postal_code'].' </b></td>
      <td> <b style="color:orange; text-shadow:black;"> <i class="fa fa-history" style="color:orange"> </i> '.substr($vrcntbltab['order_time'],0,11).' </b></td>
      <td> <p> '.$vrcntbltab['ip_adress'].' </p></td>
        <td> <button class="fa fa-trash delitmidbtn" style="color:rgb(241, 52, 52);text-shadow: 1px 1px 1px black; font-size:1.2rem; background: none; border:none; outline:none;" data-delitmid="'.$vrcntbltab['id'].'"> </button></td>
       </tr>';
 }
 echo $vrcnthtm;
}
//////// 5.
if(isset($_POST['vdelivrdtablbtnj']))
{
 $vrcntablbtn = "SELECT * FROM `c_orders`  WHERE shipping_statues LIKE 'Delivered' ORDER BY id DESC";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
  
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){
  $vrcnthtm .='<tr>
       <td class="hvr"> '.$vrcntbltab['id'].' </td>
       <td> <p style="color:rgb(188, 116, 255); text-shadow:1px 1px 1px orange; font-size: 1em;"> <i class="fa fa-user-tie" style="color:orange"> </i> '.$vrcntbltab['cname'].' </p> </td>
       <td class=""><a href="mailto:'.$vrcntbltab['cemail'].'" target="_blank" style="text-decoration:none;color:pink;text-shadow: 1px 1px 1px black;"> <i class="fa fa-paper-plane" style="color:orange;"> </i> '.$vrcntbltab['cemail'].' </a></td>
      <td><a href="tel:'.$vrcntbltab['cphone'].'" style="text-decoration:none;color:rgb(186, 89, 255); text-shadow: 1px 1px 1px black;"> <i class="fa fa-phone" style="color:rgb(149, 0, 255);"> </i> '.$vrcntbltab['cphone'].' </a> </td>
       <td> <button style="color:red; background:white;box-shadow:1px 1px 10px silver; border:none;" class="vbelltobtn fa fa-bell" data-beltxtto="'.$vrcntbltab['cemail'].'">  </button> </td>
      <td><i class="fa fa-cart-arrow-down" style="color:aquamarine; text-shadow:1px 1px 1px black;"> </i> <details style="color:orange;outline:none;">
        <table>
          <tr>
            <td><img src="assets/imgs/'.$vrcntbltab['item_img'].'" style="width:3rem;" class="prdctimghvrv"> </td>
            <td> <u> Name:'.$vrcntbltab['item_name'].' </u></td>
          </tr>
          <tr>
            <td> <b> size:'.$vrcntbltab['item_size'].' </b> </td>
            <td> <mark> Price:'.$vrcntbltab['item_price'].' </mark> </td>
          </tr>
        </table>
      </details> </td>
      <td><b style="color:rgb(0, 161, 0); text-shadow: 1px 1px 1px black;"> <i class="fa fa-database" style="color:rgb(202, 255, 142); text-shadow:1px 1px 1px black;"> </i> '.$vrcntbltab['item_quantity'].'</b></td>
      <td style="background:whitesmoke;box-shadow:1px 1px 8px silver; padding:4px;"><b style="color:rgb(25, 136, 201);"><sub style="color:rgb(87, 118, 219);text-shadow:black; font-size:0.7em;">RS.</sub> '.$vrcntbltab['total_price'].' </b> </td>
      <td> <b> '.$vrcntbltab['payments_paid'].' </b></td>
      <td> <b style="color:rgb(189, 97, 255); text-shadow:1px 1px solid black;"> '.$vrcntbltab['tr_id'].' </b></td>
      <td> <select class="paidueid"  onchange="paidueslct(this.options[this.selectedIndex].value)">
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Due">change To Due</option>
      </select></td>
      

      <td><span class="status inProgress">'.$vrcntbltab['shipping_statues'].'</span></td>
 
 <td style="padding:3px;"> <select onchange="actionfcitems(this.options[this.selectedIndex].value)"  class="actionid">
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Return"> return </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="InProgress"> InProgress </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Delivered"> Delivered </option>
    
        </select>
      </td>
   <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['cmsg'].'</details> </td>
      <td> <mark> '.$vrcntbltab['country'].' </mark> </td>
      <td> <p> '.$vrcntbltab['city'].' </p></td>
      <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['address'].'</details></td>
      <td> <b> '.$vrcntbltab['postal_code'].' </b></td>
      <td> <b style="color:orange; text-shadow:black;"> <i class="fa fa-history" style="color:orange"> </i> '.substr($vrcntbltab['order_time'],0,11).' </b></td>
      <td> <p> '.$vrcntbltab['ip_adress'].' </p></td>
        <td> <button class="fa fa-trash delitmidbtn" style="color:rgb(241, 52, 52);text-shadow: 1px 1px 1px black; font-size:1.2rem; background: none; border:none; outline:none;" data-delitmid="'.$vrcntbltab['id'].'"> </button></td>
       </tr>';
 }
 echo $vrcnthtm;
}
///// 6.
if(isset($_POST['vsrchtblstvlj']))
{
  $vsrchtblstvl =mysqli_real_escape_string($db,$_POST['vsrchtblstvlj']);
 $vrcntablbtn = "SELECT * FROM `c_orders`  WHERE shipping_statues LIKE '$vsrchtblstvl' OR cname LIKE '$vsrchtblstvl' OR cemail LIKE '$vsrchtblstvl' ORDER BY id DESC";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
  
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){
  $vrcnthtm .='<tr style="background:rgb(231,209,209);">
       <td class="hvr"> '.$vrcntbltab['id'].' </td>
       <td> <p style="color:rgb(188, 116, 255); text-shadow:1px 1px 1px orange; font-size: 1em;"> <i class="fa fa-user-tie" style="color:orange"> </i> '.$vrcntbltab['cname'].' </p> </td>
       <td class=""><a href="mailto:'.$vrcntbltab['cemail'].'" target="_blank" style="text-decoration:none;color:pink;text-shadow: 1px 1px 1px black;"> <i class="fa fa-paper-plane" style="color:orange;"> </i> '.$vrcntbltab['cemail'].' </a></td>
      <td><a href="tel:'.$vrcntbltab['cphone'].'" style="text-decoration:none;color:rgb(186, 89, 255); text-shadow: 1px 1px 1px black;"> <i class="fa fa-phone" style="color:rgb(149, 0, 255);"> </i> '.$vrcntbltab['cphone'].' </a> </td>
       <td> <button style="color:red; background:white;box-shadow:1px 1px 10px silver; border:none;" class="vbelltobtn fa fa-bell" data-beltxtto="'.$vrcntbltab['cemail'].'">  </button> </td>
      <td><i class="fa fa-cart-arrow-down" style="color:aquamarine; text-shadow:1px 1px 1px black;"> </i> <details style="color:orange;outline:none;">
        <table>
          <tr>
            <td><img src="assets/imgs/'.$vrcntbltab['item_img'].'" style="width:3rem;" class="prdctimghvrv"> </td>
            <td> <u> Name:'.$vrcntbltab['item_name'].' </u></td>
          </tr>
          <tr>
            <td> <b> size:'.$vrcntbltab['item_size'].' </b> </td>
            <td> <mark> Price:'.$vrcntbltab['item_price'].' </mark> </td>
          </tr>
        </table>
      </details> </td>
      <td><b style="color:rgb(0, 161, 0); text-shadow: 1px 1px 1px black;"> <i class="fa fa-database" style="color:rgb(202, 255, 142); text-shadow:1px 1px 1px black;"> </i> '.$vrcntbltab['item_quantity'].'</b></td>
      <td style="background:whitesmoke;box-shadow:1px 1px 8px silver; padding:4px;"><b style="color:rgb(25, 136, 201);"><sub style="color:rgb(87, 118, 219);text-shadow:black; font-size:0.7em;">RS.</sub> '.$vrcntbltab['total_price'].' </b> </td>
      <td> <b> '.$vrcntbltab['payments_paid'].' </b></td>
      <td> <b style="color:rgb(189, 97, 255); text-shadow:1px 1px solid black;"> '.$vrcntbltab['tr_id'].' </b></td>
      <td> <select class="paidueid"  onchange="paidueslct(this.options[this.selectedIndex].value)">
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Paid">change To Paid</option>
        <option data-wheridp="'.$vrcntbltab['id'].'" value="Due">change To Due</option>
      </select></td>
      

      <td><span class="status inProgress">'.$vrcntbltab['shipping_statues'].'</span></td>
 
 <td style="padding:3px;"> <select onchange="actionfcitems(this.options[this.selectedIndex].value)" class="actionid">
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Recent"> pending </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Return"> return </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="InProgress"> InProgress </option>
        <option data-wherida="'.$vrcntbltab['id'].'" value="Delivered"> Delivered </option>
    
        </select>
      </td>
   <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['cmsg'].'</details> </td>
      <td> <mark> '.$vrcntbltab['country'].' </mark> </td>
      <td> <p> '.$vrcntbltab['city'].' </p></td>
      <td> <details style="color:rgb(255, 118, 118);outline:none;">'.$vrcntbltab['address'].'</details></td>
      <td> <b> '.$vrcntbltab['postal_code'].' </b></td>
      <td> <b style="color:orange; text-shadow:black;"> <i class="fa fa-history" style="color:orange"> </i> '.substr($vrcntbltab['order_time'],0,11).' </b></td>
      <td> <p> '.$vrcntbltab['ip_adress'].' </p></td>
        <td> <button class="fa fa-trash delitmidbtn" style="color:rgb(241, 52, 52);text-shadow: 1px 1px 1px black; font-size:1.2rem; background: none; border:none; outline:none;" data-delitmid="'.$vrcntbltab['id'].'"> </button></td>
       </tr>';
 }
 echo $vrcnthtm;
}
///// 6.













//////////////////////////////////////////
//////////////////////////////////////////
  //////// list for tables of orders start
///////////////////////////////////////////
///////////////////////////////////////////

///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['paidueslctvaljs']))
{
 $paidueslctvl = mysqli_real_escape_string($db,$_POST['paidueslctvaljs']);
 $paidueidjs = mysqli_real_escape_string($db,$_POST['paidueidjs']);
  
  $paidueslctval = "UPDATE `c_orders` SET payments_paid='$paidueslctvl' WHERE id = '$paidueidjs'";
 $paiduevalq = mysqli_query($db,$paidueslctval);
 if($paiduevalq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['actnfcitmvaljs']))
{
 $actnfcitmval = mysqli_real_escape_string($db,$_POST['actnfcitmvaljs']);
 $actionidjs = mysqli_real_escape_string($db,$_POST['actionidjs']);
  
  $actnfcitmvals = "UPDATE `c_orders` SET shipping_statues='$actnfcitmval' WHERE id = '$actionidjs'";
 $actnfcitmvalq = mysqli_query($db,$actnfcitmvals);
 if($actnfcitmvalq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['taxtojs']))
{
 $taxtojs = mysqli_real_escape_string($db,$_POST['taxtojs']);
 $taxidjs = mysqli_real_escape_string($db,$_POST['taxidjs']);
  
  $taxtoj = "UPDATE `shipping_tax` SET vtax='$taxtojs' WHERE id = '$taxidjs'";
 $taxtojq = mysqli_query($db,$taxtoj);
 if($taxtojq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
//////////////////////////////////
/////////
if(isset($_POST['delpostidjs']))
{
 $delpostidjs = mysqli_real_escape_string($db,$_POST['delpostidjs']);
$delpostiddel = "DELETE FROM c_orders WHERE id='$delpostidjs'";
 $delpostiddelq= mysqli_query($db,$delpostiddel);
 if($delpostiddelq){
   echo '1';} else { echo '0'; }
}
//////////////////////////////////
//////////////////////////////////
/////////
if(isset($_POST['notifiytojs']))
{
 $notifiytojs = mysqli_real_escape_string($db,$_POST['notifiytojs']);
 $notifiymsgj = mysqli_real_escape_string($db,$_POST['notifiymsgj']);
 $notifiymsgsql = "INSERT INTO `notifiy` (bell_from,bell_to,msgs) VALUES ('$title','$notifiytojs','$notifiymsgj')";
 $notifiymsgq= mysqli_query($db,$notifiymsgsql);
 if($notifiymsgq){
   echo '1';} else { echo '0'; }
}
//////////////////////////////////
















































?>