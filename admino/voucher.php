<?php

include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}
unset($_SESSION['alertgreen']);
unset($_SESSION['alertred']);







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../assetscdn/favicon.png" type="image/png">
    <title> Admin Controls </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
      <? include 'header.php'; ?>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>



            <style>
                #genvcodbtn:hover{
                    background:indigo;
                    letter-spacing:2px;
                    box-shadow:1px 1px 10px gray;
                }
                #genvcodbtn{
                    width:100%;border:none;outline:none;background:black;color:orange;border-left:4px solid orange; border-right:4px solid orange;border-radius:15px;font-size:1.2rem;
                }
              #inputsvcods{
                display:flex;flex-direction:column;width:85%;
              }

                @media screen and (max-width:600px) {
                    #smhideimg{
                        display:none;
                    }
                    #inputsvcods{
                width:96%; margin-left:2%;
              }
                }
            </style>











<h1 style="color:rgb(29, 29, 136); margin-left:1rem;border-left:5px solid navy; padding:10px;"> Generate Voucher </h1>


<p style="color:gray;margin-left:2rem; letter-spacing:2px;" class="fa fa-eye"> 1. write voucher code (Name or others text) 2. specify How Many Days Remaining Work </p>












<div style="display:flex;flex-direction:row; background:whitesmoke;padding:1rem;box-shadow:1px 1px 20px gray;border-radius:10px; width:90%;margin-left:5%;">
   <div style="width:15%;" id="smhideimg">
      <img src="assets/imgs/vcode.gif" style="width:90%;padding:5px;">
   </div>

   <div id="inputsvcods">
   
  <div style="margin-top:2rem;width:100%; display:flex;flex-direction: row;">
      <div style=" width:70%;">
        <input type="text" id="vcodej" style="width:100%;color:orange;background:none;border:none; outline: none; border-bottom:2px solid orange;font-size: 1.2rem;text-shadow: 1px 1px 1px black;" placeholder="Generate a Voucher Code">
      </div>
      <div style="width:30%;">
        <input type="number" id="expirdaysj" placeholder="Days" style="width:100%;color:rgb(182, 58, 58);background:none;border: none;border-bottom:5px solid rgb(182, 58, 58);font-size:1.2rem;outline:none;text-shadow: 1px 1px 1px black;">
      </div>
     </div>
     
 <div style="margin-top:2rem;width:100%; display:flex;flex-direction: row;">
 <div style="width:60%;">
        <input type="number" id="discountsj" placeholder="discounts % " style="width:100%;color:#20047f;background:none;border: none;border-bottom:5px solid #20047f;font-size:1.2rem;outline:none;text-shadow: 1px 1px 1px black;">
      </div>
  <div style="width:40%;">
        <button id="genvcodbtn"> Generate </button>
      </div>
      
  </div>
 </div>

</div>




<!------------------------------------------------------------------------------------>






<style>
    #msgsvdiv{
     width:90%;margin:5%;
    background:whitesmoke;
    box-shadow:1px 1px 20px gray;
    
    }
    @media screen and (min-width:2000px) {
        #msgsvdiv{
     width:60%;margin:15%;
    }
    }
    @media screen and (max-width:600px) {
        #msgsvdiv{
     width:96%;margin:2%;
    }
    }
    </style>







<h1 style="color:rgb(29, 29, 136); margin-left:1rem;border-right:5px solid navy; padding:5px;text-align:right;"> Working Voucher </h1>

<div id="vworkngvcod">
</div>













<!-------------------------------------------------------------------------------->
<h1 style="color:red; margin-left:1rem;border-right:5px solid red; padding:10px;text-align:right;"> Expires Voucher </h1>


                 
<div id="msgsvdiv">
    <br>
    
  <div id="vxpirevcod">
    
  </div>  


<br><br>
</div>








<br>
<br>
<br>
<br>
<br>





    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="assets/js/jqoffline.js"></script>
  <script>
    
//////////////////////////////
 $(document).on('click','#genvcodbtn',function(){
  var vcodej = $('#vcodej').val();
  var expirdaysj = $('#expirdaysj').val();
  var discountsj = $('#discountsj').val();
  if(vcodej == ''){
    $('.redalrt').fadeIn();
    $(".redalrt").html('× Please Enter Any Names');
 }else if(expirdaysj == ''){
    $('.redalrt').fadeIn();
    $(".redalrt").html('× Please Enter A expiry days');
 }else if(discountsj == ''){
    $('.redalrt').fadeIn();
    $(".redalrt").html('× Please Enter A Discount Percentage');
  }else{
      $.post(
      "datajaxo.php",
    {vcodejs:vcodej,expirdaysjs:expirdaysj,discountsjs:discountsj},
       function(vcodejf){
       if(vcodejf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√ Voucher Generated ');
       }else if(vcodejf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      } vwrkingvocher(); vxpirevcodef();
      hidpopup();  }); // end post
 } });
////////////////// end page1
 ///////////////////////////////
function vwrkingvocher(){
    $.post(
      "datajaxo.php",
    {vwrkngvcodejs:'wjjwjwickwj'},
       function(vcodejf){
          $('#vworkngvcod').html(vcodejf);
       })
}
/////////////////////////
 ///////////////////////////////
function vxpirevcodef(){
    $.post(
      "datajaxo.php",
    {vxpirevcodejs:'ajiqjxjswk'},
       function(vcodejf){
          $('#vxpirevcod').html(vcodejf);
       })
}
/////////////////////////

///////////////////////////////
 
$(document).on('click','.fa-trash',function(){
var delvcodid = $(this).data("delvcodeid");

 $.post(
      "datajaxo.php",
      {delvcodidjs:delvcodid},
       function(delvcodidf){
       if(delvcodidf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Removed');
         vwrkingvocher();
         vxpirevcodef();
     }else if(delvcodidf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Something Went Wrong');
      } hidpopup(); }); // 

})
 ///////////////////////////////











////)))///////////
window.onload = vwrkingvocher();
window.onload = vxpirevcodef();


</script>





