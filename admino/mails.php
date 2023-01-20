<?
include '../config.php';
session_start();
error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}
unset($_SESSION['alertgreen']);
unset($_SESSION['alertred']);


$v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
$v_stngsq =mysqli_query($db,$v_stngs);
$v_stngsf = mysqli_fetch_array($v_stngsq);
$title = $v_stngsf['ntitle'];
$profile = $v_stngsf['profile'];
$stngmail= $v_stngsf['email'];




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
       <?
  if(!isset($_GET['siglemailid']))
  { include 'header.php'; ?>

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
                    <img src="assets/imgs/<? echo $profile; ?>">
                </div>
            </div>
 <? } ?>




            <!-- ======================= Mails To single ================== -->



            <div style="width: 80%;border:none;border-left:10px solid orange;box-shadow:1px 1px 20px silver;margin-left:10%; margin-top:2rem;over-flow:hidden;">
                <center>
                  <h3 style="color:indigo;margin-top:20px;"> For Send Mail To single Customer </h3>
                  <p style="width:75%;color:gray;"> get Email from order_list | or CAan Directly send Messages from order_list by Your Login devices Gmails </p><br><br>
                      <b style="color: orange; letter-spacing:3px; border-bottom: 2px solid indigo;margin-top:20px;"> <b style="color:indigo;"> From : <i class="fa fa-envelope" style="color:rgb(194, 110, 253); text-shadow:1px 1px 1px silver;"> </i></b> <? echo $stngmail; ?> </b>
                      <br>
                      <br>
                </center>
 <input id="mailto" style="border:none;border-left:6px solid indigo; color:indigo;outline:none;font-size:1.1rem; margin-left:5%; text-align: center; background:rgba(239, 221, 252, 0.456); over-flow:hidden;" placeholder="To: Enter Email" value="<? if(isset($_GET['siglemailid'])){ echo $_GET['siglemailid']; } ?>">
                  <center>
                      <textarea class="sendbeloftblsinpt" id="msgmail" style="margin-top:3rem; text-align:center; width:90%; margin-left:5%; color:indigo;height:10rem;outline:none; border:none;border-left:2px solid indigo;border-right:2px solid indigo; font-size:1.1rem; letter-spacing: 2px;" placeholder="Write Here"></textarea> <br>
              
                          <button class="sendbeloftblsbtn sndmail1btn" style="color:indigo;background:whitesmoke;box-shadow:1px 1px 6px silver; letter-spacing:4px;text-shadow:1px 1px 2px silver;margin-top:1rem;border: none; border-bottom:2px solid indigo; padding:4px;">
                            Send  <i class="fa fa-paper-plane" style="color:rgb(194, 110, 253);"> </i>
                          </button>
              
                 </center>
              </div>
             










            <!-- ======================= Mails To All ================== -->

<div style="width: 80%;border:none;border-left:10px solid orange;box-shadow:1px 1px 20px silver;margin-left:10%; margin-top:2rem;">
  <center>
    <h3 style="color:red;margin-top:20px;"> For Send Mail To All </h3>
    <p> all those Customers Thats Orders </p><br><br>
        <b style="color: orange; letter-spacing:3px; border-bottom: 2px solid red;margin-top:20px;"> <b style="color:red;"> From : <i class="fa fa-envelope" style="color:rgb(228, 92, 92);"> </i></b> <? echo $stngmail; ?> </b>
        <textarea id="msgmailtoall" class="sendbeloftblsinpt" style="margin-top:3rem; text-align:center; width:90%; margin-left:5%; color:rgb(255, 123, 0);height:10rem;outline:none; border:none;border-left:2px solid red;border-right:2px solid red; font-size:1.1rem; letter-spacing: 2px;" placeholder="Write Here"></textarea> <br>

            <button class="sendbeloftblsbtn sndmailallbtn" style="color:indigo;background:whitesmoke;box-shadow:1px 1px 6px silver; letter-spacing:4px;text-shadow:1px 1px 2px silver;margin-top:1rem;border: none; border-bottom:2px solid red; padding:4px;">
              Send <i class="fa fa-paper-plane" style="color:rgb(228, 92, 92);"> </i>
            </button>

  </center>
</div>




































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

/////////////single person mail ///////////////
 $(document).on('click','.sndmail1btn',function(){
   var mailto = $('#mailto').val();
  // var sbjctmail = $('#sbjctmail').val();
   var msgmail = $('#msgmail').val();

   alert(mailto)
   alert(msgmail)
      $.post(
      "datajaxo.php",
      {mailtoj:mailto,msgmailj:msgmail},
       function(sndmail1btnf){
       if(sndmail1btnf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√ mail send successfully to this ' + mailto);
     }else if(sndmail1btnf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Mail not send try again');
      } hidpopup(); }); // end post
  })
///////////////////////////////
///////////////
 $(document).on('click','.sndmailallbtn',function(){
   // var sbjctmail = $('#sbjctmail1').val();
   var msgmail = $('#msgmailtoall').val();
      $.post(
      "datajaxo.php",
      {msgmailall:msgmail},
       function(sndmailallf){
       if(sndmailallf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√ mail sends to all');
     }else if(sndmailallf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Mail not send try again');
      } hidpopup(); }); // end post
  })
///////////////////////////////









</script>
    
    
</body>

</html>