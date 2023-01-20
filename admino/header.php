


<?php
include '../config.php';
session_start();
 // error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}






$v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
$v_stngsq =mysqli_query($db,$v_stngs);
$v_stngsf = mysqli_fetch_array($v_stngsq);
$title = $v_stngsf['ntitle'];

///////////////
?>
  
  
  
  
  
  
    <!-- =============== Navigation ================ -->

        <div class="navigation">
            <ul>
                <li>
                    <a href="home.php">
                        <span class="icon">
  <ion-icon name="storefront-outline"></ion-icon>
           </span>
   <span class="title"><? echo $title; ?></span>
                    </a>
                </li>

                <li>
                    <a href="home.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="orderlists.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> Orders </span>
                    </a>
                </li>


                <li>
                    <a href="items.php">
                        <span class="icon">
<ion-icon name="stats-chart-outline"></ion-icon>
                        </span>
               <span class="title"> Products</span>
                    </a>
                </li>
             
             
             
             
             
             
             
             
                <li>
                    <a href="msgs.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>



                <li>
                    <a href="mails.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title"> Emails </span>
                    </a>
                </li>







                <li>
                    <a href="settings.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>


                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>








          <!-- =======================  popup data ================== -->
            

<style>
  #alertred{
width:50%; margin-left:25%; position:fixed;top:0;z-index:1100;  background:rgba(255,196,196,0.636); color:red; border-radius:0 0 5px 5px; border-left:15px solid red;font-size:1.5rem;box-shadow:1px 1px 10px red;
  }
  #alertgreen{
   width:50%; margin-left:25%; position:fixed;top:0;z-index:1100; background:rgba(176,254,159,0.635); color:green; border-radius:0 0 5px 5px; border-left:15px solid green;font-size:1.5rem;box-shadow:1px 1px 10px green;
  }
  @media screen and (min-width:2000px) {
  #alertgreen{ width:40%;margin-left:30%; }
   #alertred{ width:40%;margin-left:30%; }
  }
  @media screen and (max-width:600px) {
   #alertgreen{ width:100%;margin-left:0%;}
   #alertred{ width:100%;margin-left:0%;}
  }
</style>


<? if(isset($_SESSION['alertgreen'])){ ?>
<div id="alertgreen" role="alert">
   <? echo $_SESSION['alertgreen']; ?>
</div> 
<? } ?>

<? if(isset($_SESSION['alertred'])){ ?>
<div id="alertred" role="alert">
   <? echo $_SESSION['alertred']; ?>
</div>
<? } ?>

<div id="alertgreen" class="grnalrt" role="alert">
</div>
<div id="alertred" class="redalrt" role="alert">
</div>







<script src="assets/js/jqoffline.js"></script>
    <script>
   $(document).on('click','#alertgreen',function(){
     $('#alertgreen').hide(10);
   });
   $(document).on('click','#alertred',function(){
     $('#alertred').hide(10);
   });

function hidpopup(){
  $('#alertgreen').hide(700);
  $('#alertred').hide(700);
} ;

//////////////////////////////////////////


    </script>


