









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











<!-- start of scrool horizantol items -->
 <style>
.scroldiv{
    width:100%;
    height: auto;
    display: flex;
    flex-direction:row;
    flex-wrap: wrap;

}

.cardscrolp{
    font-size:1rem;
}
.cardscrolrsbtn{
    background:orange;color:white;letter-spacing:2px;text-shadow:1px 1px 1px black;
    border:none;
}
.cartsrcolbtn:hover{
    font-size:1.5rem;text-decoration:none; color:white;
}
.cartsrcolbtn{
    font-size:1.3rem;text-decoration:none; color:orange;text-shadow:1px 1px 1px black;margin-left:1rem;outline:none;
    background:none;border:none;
}
.smvallbtn{
    display:none;
}

/*************************/
    
@media screen and (min-width:700px)   
{
.cardswidscrol{
    width:23%;max-width:23%; min-width:23%; border-radius:15px;margin:1%; padding:5px;overflow: hidden;
}
.cardscrolimgs{
  width: 100%;
  height:15.5rem;max-height:15.5rem;min-height:15.5rem;
}
.forcardimghovr{
  width: 100%;
  height:15rem;max-height:15rem;min-height:15rem; border-radius:5px;overflow:hidden;
}
}
/*************************/
    
@media screen and (max-width:700px)   
{
.scroldiv{
    margin: 1%;
 }

.cardswidscrol{
    width:23%;max-width:23%; min-width:23%; border-radius:10px; margin:1%;overflow: hidden;
}
.cardscrolp{
    font-size:0.7rem;
}
.cardscrolrsbtn{
    background:orange;color:white;letter-spacing:1px;text-shadow:1px 1px 1px black;
    font-size:0.7rem;
}
.cartsrcolbtn{
    font-size:1.3rem;text-decoration:none; color:orange;text-shadow:1px 1px 1px black;margin-left:0.3rem;outline: none;
}
.smvallbtn{
    display:block;
}
.cardscrolimgs{
  width: 100%;
  height:6.5rem;max-height:7rem;min-height:7rem;
}
.forcardimghovr{
  width: 100%;
  height:6rem;max-height:6rem;min-height:6rem; border-radius:5px;overflow: hidden;
}
}

/*****************************/
.cardscrolimgs:hover{
  transform: scale(1.3); 
}
 </style>

<!-- 1 -->
<div class="scroldiv">

<? 
if(isset($_POST['serchitembtn']))
{
  $srchinpt = mysqli_real_escape_string($db,$_POST['searchitminpt']);

   $srchinptsql = "SELECT * FROM `items_by_admin` WHERE vdesc LIKE '$srchinpt' OR vtitle LIKE '$srchinpt' OR vcategory LIKE '$srchinpt'";
  $srchinptq = mysqli_query($db,$srchinptsql);
 while($srchinptf= mysqli_fetch_assoc($srchinptq)){
?>
    <div class="bg-dark cardswidscrol" data-aos="fade-left">
  <div class="forcardimghovr">
  <img src="assetscdn/adminitems/<? echo $srchinptf['img']; ?>" class="cardscrolimgs vinpopsitms" data-vtitle="<? echo $srchinptf['vtitle']; ?>" data-vdesc="<? echo $srchinptf['vdesc']; ?>" data-vimgsrc="assetscdn/adminitems/<? echo $srchinptf['img']; ?>" data-vprice="<? echo $srchinptf['vprice']; ?>" data-vsize="<? echo $srchinptf['vsize']; ?>" data-vid="<? echo $srchinptf['id']; ?>">
  </div>
  <div>
    <p class=" text-light cardscrolp"><? echo substr($srchinptf['vdesc'],0,30); ?></p>
   <center>
      <div style="display:flex;flex-direction: row;justify-content:space-around;"> 
          <button class="cardscrolrsbtn"> Rs.<? echo $srchinptf['vprice']; ?> </button>
         <button class="fa fa-cart-plus cartsrcolbtn cartflstbtn" data-vidlstdiv="<? echo $srchinptf['id']; ?>"> </button>
      </div>
   </center>
  </div>
      </div>
<? } 
echo '<center><h3 style="color:gold;text-align:center;"> Result Of <b style="color:white; border-left:1px solid silver;"> '.$srchinpt .'</b> <span class="fa fa-arrow-up text-light"><span></h3></center><br>';
}
?>     
</div>
<br>
<br>
<!-- 1 -->




<div class="scroldiv">
<? 
if(isset($_GET['ctgry']))
{ header('location: index.php'); }
$getcategory = $_GET['ctgry'];
   $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = '$getcategory' ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
 while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
?>
  <div class="bg-dark cardswidscrol" data-aos="fade-down-right">
  <div class="forcardimghovr">
  <img src="assetscdn/adminitems/<? echo $vitmbyf['img']; ?>" class="cardscrolimgs vinpopsitms" data-vtitle="<? echo $vitmbyf['vtitle']; ?>" data-vdesc="<? echo $vitmbyf['vdesc']; ?>" data-vimgsrc="assetscdn/adminitems/<? echo $vitmbyf['img']; ?>" data-vprice="<? echo $vitmbyf['vprice']; ?>" data-vsize="<? echo $vitmbyf['vsize']; ?>" data-vid="<? echo $vitmbyf['id']; ?>">
  </div>
  <div>
    <p class=" text-light cardscrolp"><? echo substr($vitmbyf['vdesc'],0,30); ?></p>
   <center>
      <div style="display:flex;flex-direction: row;justify-content:space-around;"> 
          <button class="cardscrolrsbtn"> Rs.<? echo $vitmbyf['vprice']; ?> </button>
         <button class="fa fa-cart-plus cartsrcolbtn cartflstbtn" data-vidlstdiv="<? echo $vitmbyf['id']; ?>"> </button>
      </div>
   </center>
  </div>
      </div>
<? }  ?>
</div>
























































<!-- start v in pops -->
<style>
  #vinpop{
    width:40%; margin-left:30%;
    border-radius:10px;
    box-shadow:2px 2px 40px black;
    position:fixed;top:100px;
    z-index:200;
    border:none;
    background:rgba(245, 245, 245, 0.285);
    backdrop-filter:blur(10px);
    display:none;
  } 
  #popcheckoutbtn:hover{
    background:rgb(255, 123, 0);
  }
  #popcheckoutbtn{
    color:white;background:orange;width:100%;border-radius:5px;text-shadow:1px 1px 1px black;outline:none; border:none;font-size:1.5rem;letter-spacing:4px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }

  @media screen and (min-width:2000px) {
    #vinpop{
    width:40%; margin-left:30%; }
  }
  @media screen and (max-width:600px) {
    #vinpop{
    width:84%; margin-left:8%; }
  }
</style>


<!------------------- start v in popup products ------------------>

<div id="vinpop">
  <button style="color:red;border:none;border-left:4px solid orange;font-size: 1.5rem;text-shadow: 1px 1px 1px black; padding:5px;outline:none;background:none;" class="popupclosbtn"> x </button>
   <div style="width:80%;margin-left:10%;">
    <img class="vimgsrcdiv" src="assetscdn/s/files/1/0562/2523/5011/products/H6c771b73cc364391bc764367c4b3efb7m_360x.jpg" style="width:90%;margin:4%;box-shadow:1px 1px 20px black;border-radius:10px;">

   </div>
   <div style="display:flex;flex-direction: column;">
      <h3 style="color:orange;text-shadow:1px 1px 1px black;font-style:bold;font-family:Cambria, Cochin, Georgia, Times,'Times New Roman', serif; 
      letter-spacing:4px; text-align: center; font-weight:800;" class="vtitlediv"> Title </h3>
      <p style="color:white;background:rgba(11, 11, 11, 0.852); border-left:4px solid orange;text-shadow:1px 1px 1px black;" class="vdescdiv">
        try again
      </p>
       <div style="display:flex;flex-direction:row; width:100%;">
          <div style="width:50%;border-right:1px solid gray;">
            <center>
            <p style="color:gold;text-shadow:1px 1px 1px black;"> Size: <b style="color:yellowgreen;" class="vsizediv"> try again </b> </p>
            </center>
          </div>
          <div style="width:50%;">
            <center>
              <p style="color:gold;text-shadow:1px 1px 1px black;"> R.S: <b style="color:yellowgreen;" class="vpricediv" > try again </b> </p>
            </center>
          </div>
       </div>
       <input type="hidden" class="vidinptpop">
       <button id="popcheckoutbtn" class="cartfpopbtn fa fa-cart"> Checkout </button>
   </div>
</div>
<!-- end v in pops -->












<? include 'footer.php'; ?>


 <script src="assetscdn/js/jqoffline.js"></script>
  <script>
    
    $(document).on('click','.popupclosbtn',function(){
    $('#vinpop').hide(10);
    });
    //////////////1
    $(document).on('click','.vinpopsitms',function(){
      var vtitleto = $(this).data('vtitle');
      var vdescto = $(this).data('vdesc');
      var vimgsrcto = $(this).data('vimgsrc');
        var vpriceto = $(this).data('vprice');
        var vsizeto = $(this).data('vsize');
        var vidto = $(this).data('vid');
        
     $('.vtitlediv').html(vtitleto);
     $('.vdescdiv').html(vdescto);
     $('.vpricediv').html(vpriceto);
     $('.vsizediv').html(vsizeto); 
     $('.vidinptpop').val(vidto); 
     $('.vimgsrcdiv').attr('src',vimgsrcto);
     $('#vinpop').show();
    });
/////////////////////////////////////////
          ////////////// cart add
/////////////////////////////////////////
$(document).on('click','.cartfpopbtn',function(){
      var viddiv = $('.vidinptpop').val();
      $.post(
      "jaxdata.php",
    {vidlstdivjs:viddiv},
       function(viddivf){
        if(viddivf == 1){
       $("#chkpopv").fadeIn();
        loadcartdiv();
        vttlrsqnttyf();
       }else if(viddivf == 0){
          $('#chkpopv').fadeIn();
          $('#chkpopv').html(' <b style="color:orange;text-shadow:1px 1px 1px black;" class="fa fa-warning"> </b>');
      } chkpophid();  }); // end post

});
/////////////////////////////////////////
        /////// from list add cart btns 
//////////////////////////////////////////
$(document).on('click','.cartflstbtn',function(){
var vidlstdiv = $(this).data('vidlstdiv');
      $.post(
      "jaxdata.php",
    {vidlstdivjs:vidlstdiv},
       function(vidlstdivf){
       if(vidlstdivf == 1){
       $("#chkpopv").fadeIn();
         loadcartdiv();
         vttlrsqnttyf();
       }else if(vidlstdivf == 0){
          $('#chkpopv').fadeIn();
          $('#chkpopv').html(' <b style="color:orange;text-shadow:1px 1px 1px black;" class="fa fa-warning"> </b>');
      }    chkpophid();
      }); // end post

});

/////////////////////////////////////////
/////////////////////////////////////////
function chkpophid(){
  $('#chkpopv').hide(1700); }
/////////////////////////////////////////
/////////////////////////////////////////
    /////// from list add cart btns 
//////////////////////////////////////////
function loadcartdiv(){
    $.post(
      "jaxdata.php",
    {forvcartlstjs:'iejdjeisi'},
       function(forvcartlstf){
     $('.vsesitmdiv').html(forvcartlstf);
      }); // end post
}
/////////////////////////////////////////
/////////////////////////////////////////
    /////// from list add cart btns 
//////////////////////////////////////////
function vttlrsqnttyf(){
    $.post(
      "jaxdata.php",
    {vttlrsqnttyjs:'akiwufjenf'},
       function(vttlrsqntyf){
     $('.vttlcartval').html(vttlrsqntyf);
      }); // end post
}
/////////////////////////////////////////
    /////// from list add cart btns 
//////////////////////////////////////////
////////////////////////////////////////
$(document).on('click','#minbtncartval',function(){
  
var chkmival = $('#vcartvaladinpt').val();
  if(chkmival > 1){
 var vchkvalfcart = $('#vcartvaladinpt').val() - 1;
$('#vcartvaladinpt').val(vchkvalfcart);

   $.post(
      "jaxdata.php",
    {pmbtncartvaljs:vchkvalfcart},
       function(pmbtncartvalf){
$('.vttlcartval').html(pmbtncartvalf);
    });
  }
});
$(document).on('click','#maxbtncartval',function(){
   var vchkvalfcart = +$('#vcartvaladinpt').val() +1;
  $('#vcartvaladinpt').val(vchkvalfcart);

   $.post(
      "jaxdata.php",
    {pmbtncartvaljs:vchkvalfcart},
       function(pmbtncartvalf){
   $('.vttlcartval').html(pmbtncartvalf);
    });
});
















  </script>
  </body></html>