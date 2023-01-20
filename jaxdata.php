
<?php
include 'config.php';
session_start();
 error_reporting(0);




//////////////////////////////////////////////////////////////////////////////
if(isset($_POST['mailinptjs'])){
     $maillog =  mysqli_real_escape_string($db,$_POST['mailinptjs']);

    $chklogses = setcookie('bymail', $maillog , time() + 84600 , '/');
     if($chklogses){
      echo 1;} else { echo 0; }
  }
///////////////////////////////////////////////////////////////////////////////
if(isset($_POST['chkloginedj'])){
  if($_COOKIE['bymail']){
    echo substr($_COOKIE['bymail'],0,11).'...';
  }else{
    echo '<b style="color:red;"> PLease Login </b>
 
    ';
  }
}
//////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////



if(isset($_POST['serchusrinptjs']))
{
  $vthisusrtbl = $_POST['serchusrinptjs'];
 if(!$vthisusrtbl ==""){
  $vsrchusrtbl = "SELECT * FROM userslog WHERE usrphone='$vthisusrtbl'";
  $vsrchusrtblq = mysqli_query($db,$vsrchusrtbl);
  
 $vsrchusrtblf= mysqli_fetch_assoc($vsrchusrtblq);
 if($vsrchusrtblf['usrphone'] == $vthisusrtbl){
 echo '<tr style="background:#ffe99688;box-shadow:1px 1px 10px black;">
 	<td class="hvr">'.$vsrchusrtblf['uid'].'</td>
	<td class="fa fa-phone text-primary"> '.$vsrchusrtblf['usrphone'] .'</td>
 	<td class="'.$vsrchusrtblf['bantxt'].'"> <button class="slctbanjs btn btn-danger" data-usrbanval="'.$vsrchusrtblf['user_ban'].'" data-usrtblid="'.$vsrchusrtblf['uid'].'">  ban </button></td>
 	
 	<td class="">
<a href="log.php/?adminlogin='.$vsrchusrtblf['usrphone'].'" target="_blank" class=" btn btn-success"> Login </a></td>
  
 	<td> <button data-usrbyno="'.$vsrchusrtblf['usrphone'].'" class="vbelltobtn btn btn-warning fa fa-bell"> Send </button> </td>
 	
	 <td> Active <i class="hvr '.$vsrchusrtblf['basic_acc_font'].'"></i> </td>
 <td> Active <i class="hvr '.$vsrchusrtblf['prom_acc_font'].'"></i> </td>
	
	<td> '.substr($vsrchusrtblf['sum'],0,8).' <i class="hvr fad fa-wallet"></i> </td>
	
	<td class="text-danger hvr"> '.$vsrchusrtblf['sumout'].' <i class="hvr fad fa-wallet"></i> </td>
	<td class="text-danger hvr"> '.substr($vsrchusrtblf['totalsumout'],0,7).' <i class="hvr fad fa-wallet"></i> </td>
	<td>'.$vsrchusrtblf['refbonus'].' <i class="text-success fad fa-wallet"></i></td>
	<td><i class="fa fa-share"></i> '.$vsrchusrtblf['refby'].'</td>
		<td class="text-danger"><i class="text-success fa fa-users"> </i>'.$vsrchusrtblf['totalref'].'</td>
	<td>'.$vsrchusrtblf['ip'].' <i class="text-success fa fa-globe"></i></td>
	</tr>'; }else{
	  echo '<b style="background:pink; width:100%; font-size:1.2rem; letter-spacing:4px;position:fixed;"> Not Found </b></br>';
	}
} }
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
////////// add To Cart   //////////////////
////////// add To Cart   //////////////////


if(isset($_POST['vidlstdivjs']))
{
  $getidcartval = mysqli_real_escape_string($db,$_POST['vidlstdivjs']);
  
 $setitmbycart = "SELECT * FROM `items_by_admin` WHERE id = '$getidcartval'";
  $setitmbycartq = mysqli_query($db,$setitmbycart);
  $cartidses= mysqli_fetch_assoc($setitmbycartq);
  
  $vtitle = $cartidses['vtitle'];
  $vitmimg = $cartidses['img'];
  $vitmdesc = $cartidses['vdesc'];
  $vitmprice = $cartidses['vprice'];
  $vitmsums = $cartidses['vprice'];
  $vitmsiz = $cartidses['vsize'];
  $tosctgry = $cartidses['vcategory'];
  $vitmcount = 1;
  
    $_SESSION['vsescrtqntty'][0] = array('vitmcount'=>$vitmcount,'vitmsums'=>$vitmsums);
  
 $sesk = $_SESSION['vsescartlst'][0] = array('vtitle'=>$vtitle,'vitmimg'=>$vitmimg,'vitmdesc'=>$vitmdesc,'vitmprice'=>$vitmprice,'vitmsiz'=>$vitmsiz,'sesctgry'=>$tosctgry);
  
  if($sesk){ echo 1; }else{ echo 0; }
} 
///////////////////////////////////////////
///////////////////////////////////////////
// unset($_SESSION['vsescartlst']);

if(isset($_POST['forvcartlstjs']))
{
  foreach($_SESSION['vsescartlst'] as $vinloop => $vinlop)
  { 
    echo'<div style="width:30%;">
<img src="assetscdn/adminitems/'. $vinlop['vitmimg'].'" style="width:100%;">
</div>
<div style="width:68%;margin-left:2%;">
  <p class="carttextp">'. $vinlop['vitmdesc'].'</p>
  <b style="color:silver;"> Shoes Size : '. $vinlop['vitmsiz'].' </b>
  <br><br>
  <!-- buttons add -->
  <div style="display:flex;flex-direction:row;"> 
    <div style="width:10%;border:none;background:none;font-size:1.1rem; border-left:1px solid silver;border-top:1px solid silver;border-bottom:1px solid silver;outline:none;">
      <button id="minbtncartval" style="border:none;background:none;color:silver;font-size:1.1rem;outline:none;"> - </button>
     </div>
   <div style="width:20%;">
    <input type="text" style="border:none;background: none; color:white;width:100%;max-width:100%;font-size:1.1rem;outline:none;text-align: center;border-bottom:1px solid silver;border-top:1px solid silver;outline:none;" id="vcartvaladinpt" value="1" min="1" pattern="[0-9]*" readonly>
   </div>
   <div style="width:10%;border:none;background:none;font-size:1.1rem;border-top:1px solid silver;border-bottom: 1px solid silver;border-right: 1px solid silver;outline:none;">
    <button id="maxbtncartval" style="border:none;background:none;color:silver;font-size:1.1rem;outline:none !important;"> + </button>
   </div>
   <div style="width:50%;text-align: center;">
    <b style="color:wite;font-size:1.1rem;"> Rs.'.$vinlop['vitmprice'].' </b>
   </div>
   </div>
<!-- buttons add -->
  </div>';
    
    
    
  }
} 
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vttlrsqnttyjs']))
{ foreach($_SESSION['vsescrtqntty'] as $vinloop => $vinlop)
  {  echo $vinlop['vitmsums'] ; }
}
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['pmbtncartvaljs']))
{ 
$pmbtncartvaljs = mysqli_real_escape_string($db,$_POST['pmbtncartvaljs']);

  foreach($_SESSION['vsescartlst'] as $vinloop => $vinlop)
  {  $vttlcrtval = $vinlop['vitmprice'] ; }
  $settlrscrt = $vttlcrtval * $pmbtncartvaljs;
   echo $settlrscrt;
 $_SESSION['vsescrtqntty'][0] = array('vitmcount'=>$pmbtncartvaljs,'vitmsums'=>$settlrscrt);
  
}
///////////////////////////////////////////
///////////////////////////////////////////

























 ?>





















