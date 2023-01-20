
<?php

include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}
unset($_SESSION['alertgreen']);
unset($_SESSION['alertred']);








if(isset($_POST['upldprofbtn']) )
{
$imgup = $_FILES['upldprofimg']['name'];
$imguptmp = $_FILES['upldprofimg']['tmp_name'];
  
 $mbcheck1 = $_FILES['upldprofimg']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { $_SESSION['alrtred'] = 'image is greater then 10 MB '; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "assets/imgs/".$imgup;
   move_uploaded_file($imguptmp, $folderimg);
   
    // To insert data uploaded
$eitemsql = "UPDATE `store_stngs` SET `profile`= '$imgup' WHERE id = 1";
    
 $otherqry = mysqli_query($db,$eitemsql) or die('not sql'.mysqli_error($db)) ;
     if($otherqry)
     { $_SESSION['alertgreen'] = 'Product uploaded √ '.$title;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
 // end of inserting other data 
   } // end else
  else{ $_SESSION['alrtred'] = 'This is not Images in jpg! jpeg! png! gif! svg!'; }
   // end of file  extension with all other data to uploads
}
////////////////
if(isset($_POST['hedbgbtn']) )
{
$imgup = $_FILES['hedbgimg']['name'];
$imguptmp = $_FILES['hedbgimg']['tmp_name'];
  
 $mbcheck1 = $_FILES['hedbgimg']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { $_SESSION['alrtred'] = 'image is greater then 10 MB '; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "../assetscdn/banners/".$imgup;
   move_uploaded_file($imguptmp, $folderimg);
   
    // To insert data uploaded
$eitemsql = "UPDATE `store_stngs` SET `headbgimg`= '$imgup' WHERE id = 1";
    
 $otherqry = mysqli_query($db,$eitemsql) or die('not sql'.mysqli_error($db)) ;
     if($otherqry)
     { $_SESSION['alertgreen'] = 'Product uploaded √ '.$title;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
 // end of inserting other data 
   } // end else
  else{ $_SESSION['alrtred'] = 'This is not Images in jpg! jpeg! png! gif! svg!'; }
   // end of file  extension with all other data to uploads
}
////////////////
////////////////
if(isset($_POST['baner1btn']) )
{
$imgup = $_FILES['baner1img']['name'];
$imguptmp = $_FILES['baner1img']['tmp_name'];
  
 $mbcheck1 = $_FILES['baner1img']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { $_SESSION['alrtred'] = 'image is greater then 10 MB '; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "../assetscdn/banners/".$imgup;
   move_uploaded_file($imguptmp, $folderimg);
   
    // To insert data uploaded
$eitemsql = "UPDATE `store_stngs` SET `baner1`= '$imgup' WHERE id = 1";
    
 $otherqry = mysqli_query($db,$eitemsql) or die('not sql'.mysqli_error($db)) ;
     if($otherqry)
     { $_SESSION['alertgreen'] = 'Product uploaded √ '.$title;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
 // end of inserting other data 
   } // end else
  else{ $_SESSION['alrtred'] = 'This is not Images in jpg! jpeg! png! gif! svg!'; }
   // end of file  extension with all other data to uploads
}
////////////////
////////////////
if(isset($_POST['shoesbgbtn']) )
{
$imgup = $_FILES['shoesbgimg']['name'];
$imguptmp = $_FILES['shoesbgimg']['tmp_name'];
  
 $mbcheck1 = $_FILES['shoesbgimg']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { $_SESSION['alrtred'] = 'image is greater then 10 MB '; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "../assetscdn/banners/".$imgup;
   move_uploaded_file($imguptmp, $folderimg);
   
    // To insert data uploaded
$eitemsql = "UPDATE `store_stngs` SET `shoesbg`= '$imgup' WHERE id = 1";
    
 $otherqry = mysqli_query($db,$eitemsql) or die('not sql'.mysqli_error($db)) ;
     if($otherqry)
     { $_SESSION['alertgreen'] = 'Product uploaded √ '.$title;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
 // end of inserting other data 
   } // end else
  else{ $_SESSION['alrtred'] = 'This is not Images in jpg! jpeg! png! gif! svg!'; }
   // end of file  extension with all other data to uploads
}
////////////////
////////////////
if(isset($_POST['logobtn']) )
{
$imgup = $_FILES['logoimg']['name'];
$imguptmp = $_FILES['logoimg']['tmp_name'];
  
 $mbcheck1 = $_FILES['logoimg']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { $_SESSION['alrtred'] = 'image is greater then 10 MB '; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "../assetscdn/banners/".$imgup;
   move_uploaded_file($imguptmp, $folderimg);
   
    // To insert data uploaded
$eitemsql = "UPDATE `store_stngs` SET `logo`= '$imgup' WHERE id = 1";
    
 $otherqry = mysqli_query($db,$eitemsql) or die('not sql'.mysqli_error($db)) ;
     if($otherqry)
     { $_SESSION['alertgreen'] = 'Product uploaded √ '.$title;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
 // end of inserting other data 
   } // end else
  else{ $_SESSION['alrtred'] = 'This is not Images in jpg! jpeg! png! gif! svg!'; }
   // end of file  extension with all other data to uploads
}
////////////////










/*
hedbgimg
hedbgbtn
  
baner1img
baner1btn

shoesbgimg
shoesbgbtn
logoimg
logobtn
*/







$v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
$v_stngsq =mysqli_query($db,$v_stngs);
$v_stngsf = mysqli_fetch_array($v_stngsq);
$title = $v_stngsf['title'];
///////////////

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
  <link rel="stylesheet" href="style.css">
    
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
  <img src="assets/imgs/<?  echo $v_stngsf['profile']; ?>">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
          


<style>
    .adminsec{
        width:70%;
        margin-left:15%;
        box-shadow:1px 1px 30px silver;
        border-radius:20px;
        border-bottom:2px solid orange;
        display:flex; flex-direction:row;
    }
#setprofbtn:hover{
    letter-spacing:5px;
    box-shadow:1px 1px 10px black;
    background:indigo;
}
#setprofbtn{
    color:orange;background:black;border-radius:20px; font-size:1.5rem; text-shadow:1px 1px 1px black;letter-spacing:2px;border: none;border-left:4px solid orange;border-right: 4px solid orange;padding:2px;outline:none;
}

#setprofbtn:hover .fa-shield-halved{
    color:rgb(157, 21, 255);text-shadow:1px 1px 1px black;outline:none;
}
.fa-shield-halved{
    color:rgb(71, 64, 64);text-shadow:-1px 1px 2px aqua;
}
#payslctpages{
    display:flex;flex-direction:row;width:40%;margin-left:30%;margin-top: 1rem;padding:1rem;
}
.bnrsstngs{
        width:98%;margin-left:2%;
        display:flex;flex-direction:row;
        flex-wrap: wrap;
    }
.bnrsstngsin{
    display:flex;flex-direction:row;width:13rem; background:whitesmoke;box-shadow:1px 1px 20px gray;border-radius: 10px;margin:0.5rem;
    }
.setbnrsbtn:hover{
    color:silver;letter-spacing:3px;
}
.setbnrsbtn{
    color:rgb(205, 136, 255);border:none;border-left:4px solid indigo;border-right:4px solid indigo; box-shadow:1px 1px 10px gray;letter-spacing:2px;text-shadow:1px 1px 1px black;border-radius:10px;padding:5px;margin-top: 0.7rem;outline:none;
}

#headerstxt{
        width:80%;margin-left:10%;
        border:none;border-left:10px solid orange;
        box-shadow:1px 1px 10px gray;
    }
    #sethedbtn:hover{
        border-radius:2px; letter-spacing:4px;
        font-size:1.6rem;
        transition-duration:1s;
        background: navy;
    }
    #sethedbtn{
    border:none;background:black;color:orange;border-left:4px solid orange;border-right: 4px solid orange;border-radius:10px 0 10px 0; letter-spacing:1px;font-size: 1.3rem; box-shadow:1px 1px 10px silver;outline:none;

    }
    #hedrimghvr:hover{
        width: 100%;
    }
    #hedrimghvr{
        width:75%; box-shadow:1px 1px 10px silver;border:2px solid silver;
    }
    #setmaildiv{
        width:75%;margin-left:10%;margin-right:10%;margin-bottom:10%; box-shadow:1px 1px 20px gray;border: none;border-left:5px solid rgb(194, 73, 73);display: flex;flex-direction: row; padding:10px;background: whitesmoke;
    }
    #belldiv{
        width:75%;margin-left:10%;box-shadow:1px 1px 20px gray;border: none;border-left:5px solid rgb(194, 73, 73);padding:10px;background: whitesmoke;
    }




    @media screen and (min-width:2000px) {
        .adminsec{
        width:60%;
        margin-left:20%;
    }
    #payslctpages{
        width:30%;margin-left:40%;
    }
    .bnrsstngs{
        width:70%;margin-left:15%; 
    }
    .bnrsstngsin{
       width:20rem; margin-left:2rem;
    }
    #setmaildiv{
        width:60%;margin:20%;
    }
    #belldiv{
        width:60%;margin:20%;
    }
    #headerstxt{
        width:40%;margin-left:30%;
    }
    }




    @media screen and (max-width:600px) {
        .adminsec{
        width:96%;
        margin-left:2%;
    }
    #payslctpages{
      width:90%;margin-left:5%;
    }
    .bnrsstngs{
        width:96%;margin-left:2%;
        display:flex;flex-direction:column;
    }
    .bnrsstngsin{
       width:90%; margin-left:5%;
    }
    #setmaildiv{
        width:98%;margin:1%;
    }
    #belldiv{
        width:98%;margin:1%;
    }
    #headerstxt{
        width:98%;margin-left:1%;
    }
    }

</style>
<!------------------------------------------------------------------------------------------------->

<div class="adminsec">
   <div style="width:48%;">
   <center>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="profilimg" style="color:orange;text-shadow:1px 1px 1px black;"> Old <i class="fa fa-image"></i> </label>
        <img src="assets/imgs/<? echo  $v_stngsf['profile']; ?>" style="width:80%; margin:5%;border-radius:15px;box-shadow:1px 1px 10px gray;"><br>
        <label for="profilimg" style="color:gray;"> New <i class="fa fa-image"></i> </label>
        <input type="file" name="upldprofimg" style="color:orange;border:none;border-left:4px solid orange;text-shadow:1px 1px 1px black;width:70%;background:rgba(255, 157, 45, 0.144);" required=""><br><br>
        <button type="submit" name="upldprofbtn" id="setprofbtn"> Change </button><br>
    </form>
   </center>
   </div>
   <div style="width:2%;max-width:2%;margin-top:2%;position:static;z-index:10; box-shadow:inset 1px 1px 10px silver; color:white;padding:7px; border-bottom:10px solid white;">

   </div>
   <div style="width:50%;">
     <center>
        <h3 style="color:rgb(197, 61, 61);"> Set Security </h3>
        <br>
        <br>
        <br>
        <br>
        
        
        <label for="profilimg" style="color:orange;text-shadow:1px 1px 1px black;"> Admin Name : <i class="fa fa-user-tie"></i> </label><br>
          <input type="text" id="admnname" style="color:orange;background: rgba(255, 176, 130, 0.144);border:none;border-right:30px solid orange;font-size:1.6rem;border-radius:0 10px 10px 0; text-align: center; text-shadow:1px 1px 1px black;width:70%;outline:none;" placeholder=" Admin" value="<? echo  $v_stngsf['name']; ?>">
        <br>
        <br>
        <br>
        <br>
        <label for="profilimg" style="color:orange;text-shadow:1px 1px 1px black;"> Admin Password <i class="fa fa-key"></i> </label><br>
          <input type="password" id="admnpass" style="color:orange;background: rgba(255, 176, 130, 0.144);border:none;border-right:30px solid orange;font-size:1.6rem;border-radius:0 10px 10px 0; text-align: center; text-shadow:1px 1px 1px black;width:70%;outline:none;" placeholder=" ***** " required="">
          <br>
          <br>
          <br>
          <button type="submit" class="fsetsecbtn admnpassbtn" id="setprofbtn"> Update <i class="fa fa-shield-halved"> </i></button>
     </center>
   </div>
</div>





            <!-- ======================= Others settings ================== -->






<h2 style="color:rgb(29, 29, 136); margin-left:1rem;border-left:5px solid navy; padding:10px;"> Others Settings  </h2>


<p style="color:gray;margin-left:2rem; letter-spacing:2px;" class="fa fa-gear"> for Store Customization</p>
<br><br><br>

<style>
  .whenpaypagslctj{
    border:2px solid orange; box-shadow: 1px 1px 30px black; 
  }
</style>



<center>
    <u style="color:indianred;text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid indianred;"> 1. Select Payment Accepted Page </u>
</center>
<form id="payslctpages">
    <div class="whenpaypagslct1" style="width:48%;border-radius:10px;background: whitesmoke;box-shadow:1px 1px 20px gray;"> 
     <img src="assets/imgs/bydirectlyp.png" style="width:90%;margin:5%;border-radius:10px;"><br>
    <div style="display:flex;flex-direction:row;">
        <input type="radio" name="slctpage" style="color:orange;text-shadow:1px 1px 1px black;background-color:rgb(37, 37, 124);font-size:2rem;margin-left:1rem;" id="radiobtn1j" value="bydirect"> <b style="color:indigo;padding:2px;font-size:0.7rem"> Pay By Directly Getaway <u style="color:gray;"> show Page </u></b>
    </div>
    </div>
    <div class="whenpaypagslct2" style="width:48%;border-radius:10px;background: whitesmoke;box-shadow:1px 1px 20px gray; margin-left:1rem;"> 
     <img src="assets/imgs/bytrid.png" style="width:90%;margin:5%;border-radius:10px;"><br>
    <div style="display:flex;flex-direction:row;">
        <input type="radio" name="slctpage" style="color:orange;text-shadow:1px 1px 1px black;background-color:rgb(37, 37, 124);font-size:2rem;margin-left:1rem;" id="radiobtn2j" value="bytrid"> <b style="color:indigo;padding:2px;font-size:0.7rem"> Pay By Transaction Id <u style="color:gray;"> show Page </u></b>
    </div>
    </div>
</form>







      <!-- ======================= setting banners ================== -->


<center>
    <u style="color:indianred;text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid indianred;"> 2. Home Page banners </u>
    <p style="color:gray;">such as when sale , balck Friday, Events etc To change Banners According To The Requirements     <b style="color:rgb(117, 0, 0);"> Used Banner 1 </b> </p>
    <p style="color:rgb(124, 78, 78);"> for <b style="color:navy;"> logo </b> and <b style="color:navy;"> Shoes </b> images When Changed Then <u> Without Background (Eraser).</u> Used </p>
</center>
<br><br>

<div class="bnrsstngs">
  <div class="bnrsstngsin">
     <div style="width:50%;"><img src="../assetscdn/banners/<? echo  $v_stngsf['headbgimg']; ?>" style="width:90%;margin:5%;"></div>
     <div style="width:50%;">
       <center>
        <h4 style="color:orange; text-shadow: 1px 1px 1px indigo;"> Head <b style="color:rgb(202, 129, 255);text-shadow: 1px 1px 1px orange;"> Top </b> <i class="fa fa-image" style="color:orange;text-shadow:1px 1px 1px black;"> </i></h4><br>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="hedbgimg" id="" style="border:none;border-right:4px solid orange;border-left:4px solid orange;color:orange;text-shadow:1px 1px 1px black;width:80%;" required="">
            <br>
            <button type="submit" name="hedbgbtn" class="setbnrsbtn"> change <i class="fa fa-banner" style="color:rgb(33, 33, 122);"> </i></button>

        </form>
       </center>
     </div>
  </div>

  
  <div class="bnrsstngsin">
     <div style="width:50%;"><img src="../assetscdn/banners/<? echo  $v_stngsf['baner1']; ?>" style="width:90%;margin:5%;"></div>
     <div style="width:50%;">
       <center>
        <h3 style="color:orange; text-shadow: 1px 1px 1px indigo;"> Banner <b style="color:rgb(202, 129, 255);text-shadow: 1px 1px 1px orange;"> 1 </b> <i class="fa fa-image" style="color:orange;text-shadow:1px 1px 1px black;"> </i></h3><br>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="baner1img" id="" style="border:none;border-right:4px solid orange;border-left:4px solid orange;color:orange;text-shadow:1px 1px 1px black;width:80%;" required="">
            <br>
            <button type="submit" name="baner1btn" class="setbnrsbtn"> change <i class="fa fa-banner" style="color:rgb(33, 33, 122);"> </i></button>

        </form>
       </center>
     </div>
  </div>
  <div class="bnrsstngsin">
     <div style="width:50%;"><img src="../assetscdn/banners/<? echo  $v_stngsf['shoesbg']; ?>" style="width:90%;margin:5%;"></div>
     <div style="width:50%;">
       <center>
        <h5 style="color:orange; text-shadow: 1px 1px 1px indigo;"> Shoes <b style="color:rgb(202, 129, 255);text-shadow: 1px 1px 1px orange;"> no_bg </b> <i class="fa fa-image" style="color:orange;text-shadow:1px 1px 1px black;"> </i></h5><br>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="shoesbgimg" id="" style="border:none;border-right:4px solid orange;border-left:4px solid orange;color:orange;text-shadow:1px 1px 1px black;width:80%;" required="">
            <br>
            <button type="submit" name="shoesbgbtn" class="setbnrsbtn"> change <i class="fa fa-banner" style="color:rgb(33, 33, 122);"> </i></button>

        </form>
       </center>
     </div>
  </div>

  
  <div class="bnrsstngsin">
     <div style="width:50%;"><img src="../assetscdn/banners/<? echo  $v_stngsf['logo']; ?>" style="width:90%;margin:5%;"></div>
     <div style="width:50%;">
       <center>
        <h5 style="color:orange; text-shadow: 1px 1px 1px indigo;"> logo <b style="color:rgb(202, 129, 255);text-shadow: 1px 1px 1px orange;"> no_bg </b> <i class="fa fa-image" style="color:orange;text-shadow:1px 1px 1px black;"> </i></h5><br>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="logoimg" id="" style="border:none;border-right:4px solid orange;border-left:4px solid orange;color:orange;text-shadow:1px 1px 1px black;width:80%;" required="">
            <br>
            <button type="submit" name="logobtn" class="setbnrsbtn"> change <i class="fa fa-banner" style="color:rgb(33, 33, 122);"> </i></button>

        </form>
       </center>
     </div>
  </div>

</div>


<br>
<br>
<br>
<br>





      <!-- ======================= setting banners ================== -->


    <center>
        <u style="color:indianred;text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid indianred;"> 3. HomePage Text </u>
    </center>
<br><br>
      

      <div id="headerstxt">
        <h3 style="color:orange;text-shadow: 1px 1px 1px black;border-bottom:2px solid orange;text-align: center;"> Settings Header </h3><br>
        <div style="width:20%; float:right;">
            <img src="assets/imgs/headerimg.png" id="hedrimghvr">
         </div>
         <div style="width:80%;">
            <b class="fa fa-edit" style="color:indigo;text-shadow:1px 1px 1px black;"> </b>
            <input type="text" id="setitle" value="<? echo $v_stngsf['ntitle']; ?>" class="sitenameinpt" style="width:70%;margin:5%;border-radius:10px;border: none; font-size:1.4rem;background:rgba(255, 218, 255, 0.637);;outline:none;color:indigo; text-align: center; letter-spacing:4px;border-left:4px solid indigo;" placeholder="Update Title"><br>
            <b class="fa fa-edit" style="color:indigo;text-shadow:1px 1px 1px black;"> </b>
            <input type="text" value="<? echo $v_stngsf['ndesc']; ?>" id="setitle" class="sitdetalinpt" style="width:70%;margin:5%;border-radius:10px;border: none; font-size:1.4rem;background:rgba(255, 218, 255, 0.637);;outline:none;color:indigo; text-align: center; letter-spacing:4px;border-left:4px solid indigo;" placeholder="Update Details"><br>
            <center>
                <button id="sethedbtn" class="sitenamebtn"> Update </button>
            </center>
         </div>
        </div>






<br><br><br>

<center>
    <u style="color:indianred;text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid indianred;"> 4. Update Admin Email </u>
</center>
<br>

<div id="setmaildiv">
 <div style="width:20%;">
 <b style="color:rgb(194, 73, 73);"> Admin Email <i class="fa fa-envelope" style="color:crimson;text-shadow:1px 1px 1px black;"> </i></b>
</div>
<div style="width:65%;">
    <input type="text" id="setitle" class="gmaillink" style="width:90%;border-radius:2px;border: none; font-size:1.3rem;background:rgba(252, 219, 225, 0.712);outline:none;color:rgb(194, 73, 73); text-align: center; letter-spacing:4px; border-bottom:2px solid rgb(194, 73, 73);text-shadow:1px 1px 1px black;letter-spacing:2px;" placeholder="Update Email" value="<? echo $v_stngsf['email']; ?>">
</div>
<div style="width:18%;margin-left:-4%;">
    <button style="color:rgb(194, 73, 73);text-shadow:1px 1px 1px black; width:100%; letter-spacing:1px;background-color:pink;border: none;border-left:4px solid silver; font-size:1.2rem;padding:4px;" class="setlinksbtn"> Update <i class="fa fa-envelope"> </i></button>
</div>
</div>






<br>
<center>
    <u style="color:indianred;text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid indianred;"> 5. Anouncement On HomePage </u>
    <p style="color:gray;"> such As When Offers , Events >, Sales Discounts Etc </p>
</center>
<br>


<div id="belldiv">
<div id="setmaildiv">
 <div style="width:20%;">
 <b style="color:rgb(194, 73, 73);"> Offers , Events.. <i class="fa fa-anounce" style="color:crimson;text-shadow:1px 1px 1px black;"> </i></b>
</div>
<div style="width:65%;">
    <input type="text" id="setitle" class="vbelltxtinpt" style="width:90%;border-radius:2px;border: none; font-size:1.3rem;background:rgba(252, 219, 225, 0.712);outline:none;color:rgb(194, 73, 73); text-align: center; letter-spacing:4px; border-bottom:2px solid rgb(194, 73, 73);text-shadow:1px 1px 1px black;left:2px;" placeholder="Update AAnouncement" value="<? echo $v_stngsf['bell']; ?>">
</div>
<div style="width:18%;margin-left:-4%;">
    <button class="belltxtbtn" style="color:rgb(194, 73, 73);text-shadow:1px 1px 1px black; width:100%; letter-spacing:1px;background-color:pink;border: none;border-left:4px solid silver; font-size:1.2rem;padding:4px;"> Update <i class="fa fa-bell"> </i></button>
</div>
</div>
<b style="color:rgb(238, 120, 140); font-size:1.2;"> Previous Anouncement :</b>
<p style="color:gray;"> <? echo $v_stngsf['bell']; ?></p>
</div>
<br>
<br>
<br>





<br>
<center>
    <u style="color:indianred;text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid indianred;"> 6. Voucher Generator </u>
    <p style="color:gray; width:60%;margin-left:10%;"> When cart items checked outs and for discounts its showing in the banner mid you can on off remaining timer with voucher or can place any events banner </p>
</center>
<br>


<div id="belldiv">
<div id="setmaildiv">
 <div style="width:80%;">
 <b style="color:rgb(194, 73, 73);"> Hide Voucher <i class="fa fa-gift" style="color:crimson;text-shadow:1px 1px 1px black;"> </i></b>
</div>

<div style="width:20%;">
   <select id="wbalidonofv" style="background:#f1bcc5;color:red;font-size:1.5rem;" onchange="allsmoutonoff(this.options[this.selectedIndex].value)">
      <option value="0"> ON </option>
      <option value="1"> OFF </option>
    </select>
</div>
</div>
<center>
 <a href="voucher.php"> Generate New </a>
</center>
</div>
<br>
<br>
<a href="shippingtax.php"> View Shipping Tax </a>
<br>













































<hr style="padding:5px; box-shadow:inset 1px 1px 5px pink, inset 1px 1px 1px indigo;">

<center>
  <u style="color:indianred;text-decoration:wavy;font-size:1.6rem;border-bottom:2px solid indianred;"> 7. Account Number To Get PAYMENT </u>
  <p style="color:gray; width:80%;margin-left:10%;"> its need for only when You Want To get Payments by Transaction Id Page : customer send money on this number with transaction id you confirm via sms and order list then release the products for customer </p>
</center>







<style>
#carddupdtbtn:hover{
  background: orange; color:rgb(255,111,136); letter-spacing: :3px; box-shadow: inset 1px 1px 4px black;
}
#carddupdtbtn{
color:gold;background:none;border:none; outline:none;font-size:1.6rem;border-left:6px solid red; border-right:5px solid red; border-radius:20px;box-shadow:1px 1px 8px black;text-shadow:1px 1px 1px black; padding:3px;
}
#cardbody{
  box-shadow: 1px 1px 10px black;
}
  @media screen and (max-width:600px)
  {
    #cardbody{
     width:96% !important; margin-left:1%;
    }
    #carddupdtbtn{
      margin-left:-1.3rem;
    }
  }

</style>

<br>
<br>

<div class="flex-r">
    <div class="card flex-c" id="cardbody">
        <div class="card-header flex-r">
            <div>Mezan Bank</div>
            <div class="sim-img flex-r">
                <img src="https://img.icons8.com/ultraviolet/40/000000/sim-card-chip.png">
            </div>
        </div>
        <input id="acchldrnmbr" type="text" value="<? echo $v_stngsf['acc_number']; ?>" style="background:none;border:none;outline:none; border-bottom:1px solid rgba(250,160,176,0.551); letter-spacing:1px;" class="card-num flex-r" required="">
        <div class="card-footer flex-r">
            <div class="card-info flex-r">
                <div class="card-name flex-c">
                    <span style="border-left:1px solid silver;padding-left:4px;"> Holder Name</span>
<input id="acchldrnam" style="color:#ffffff;text-shadow:1px 1px 1px black; padding:2px;outline:none;background:none;border:none;border:none;border-bottom:1px solid rgba(250,160,176,0.551);letter-spacing:2px;" value="<? echo $v_stngsf['acc_holder_name']; ?>">
                </div>
                <div class="card-date flex-c">
 <button id="carddupdtbtn">
     Update 
</button>
    </div>
</div>
            

            
            <div class="master-img flex-r">
                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png">
            </div>
        </div>
    </div>
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
  <script>
    
//////////////////////////////
 $(document).on('click','.admnpassbtn',function(){
  var admnname = $('#admnname').val();
  var admnpass = $('#admnpass').val();
  if(admnpass == ''){
    $('.redalrt').fadeIn();
    $(".redalrt").html('× Please Enter A Password');
  }else{
      $.post(
      "datajaxo.php",
    {adminamjs:admnname, adminpassjs:admnpass},
       function(admnsetsf){
       if(admnsetsf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√ successfully Updated ');
       }else if(admnsetsf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      } 
      hidpopup();  }); // end post
 } });
////////////////// end page1
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.belltxtbtn',function()
{
  var vbelltxtinpt = $('.vbelltxtinpt').val();

 $.post(
      "datajaxo.php",
      {vbelltxtinptjs:vbelltxtinpt},
       function(vbelltxtinptf){
       if(vbelltxtinptf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Updated');
     }else if(vbelltxtinptf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Something Went Wrong');
      }  
hidpopup(); 
       }); // 
});
 ///////////////////////////////
/////////////start for links update
//////////////////////////////
 $(document).on('click','.setlinksbtn',function(){
   var gmalink = $('.gmaillink').val();
      $.post(
      "datajaxo.php",
      {gmalinkjs:gmalink},
       function(updatlnks){
       if(updatlnks == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Update ');
        }else if(updatlnks == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      }  
hidpopup(); 
       }); // end post
  })
////////////////// 
$(document).on('click','.sitenamebtn',function()
{
  var sitenameinpt = $('.sitenameinpt').val();
  var sitdetalinpt = $('.sitdetalinpt').val();

 $.post(
      "datajaxo.php",
      {sitenameinptjs:sitenameinpt,sitdetalinptjs:sitdetalinpt},
       function(sitenameinptf){
       if(sitenameinptf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Updated');
     }else if(sitenameinptf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Something Went Wrong');
      }  hidpopup(); 
      }); // 

});
 ///////////////////////////////
////////////////// 
$(document).on('click','#carddupdtbtn',function()
{
  var acchldrnmbr = $('#acchldrnmbr').val();
  var acchldrnam = $('#acchldrnam').val();

 $.post(
      "datajaxo.php",
      {acchldrnmbrjs:acchldrnmbr,acchldrnamjs:acchldrnam},
       function(acchldrnamf){
       if(acchldrnamf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Updated');
     }else if(acchldrnamf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Something Went Wrong');
      }  hidpopup(); 
      }); // 

});




 ///////////////////////////////
$(document).on('click','#radiobtn1j',function(){
  var radiobtn1j = $('#radiobtn1j:checked').val();
$('.whenpaypagslct2').removeClass('whenpaypagslctj');
$('.whenpaypagslct1').addClass('whenpaypagslctj');
  //$('.whenpaypagslct').siblings
   $.post(
      "datajaxo.php",
      {radiobtn1js:radiobtn1j},
       function(radiobtn1jf){
       if(radiobtn1jf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Update ');
        }else if(radiobtn1jf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      }  
hidpopup(); 
       }); // end post
});
$(document).on('click','#radiobtn2j',function(){
  var radiobtn2j = $('#radiobtn2j:checked').val();
$('.whenpaypagslct1').removeClass('whenpaypagslctj');
$('.whenpaypagslct2').addClass('whenpaypagslctj');
   $.post(
      "datajaxo.php",
      {radiobtn2js:radiobtn2j},
       function(radiobtn2jf){
       if(radiobtn2jf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Update ');
        }else if(radiobtn2jf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      }  
hidpopup(); 
       }); // end post
});
/////////////////
 var chkradio = '<? echo $v_stngsf['vpay_page'] ?>';
 if( chkradio == 'bydirect')
{
$('.whenpaypagslct1').addClass('whenpaypagslctj');
}else{
$('.whenpaypagslct2').addClass('whenpaypagslctj');
}
//////////////////////////////////
 ///////// get data 
function vwbalonoff(){
    $.post(
      "datajaxo.php",
      {vwbalonofjs:'djjdje'},
      function(vwbalonof){
      var onofwbal = vwbalonof;

  if(vwbalonof==0){
$("#wbalidonofv option[value='0']").prop('selected',true);}else{
$("#wbalidonofv option[value='1']").prop('selected',true);
}
      }
    ); // end post
}    
//////////////////
//////////////////
 function allsmoutonoff(value)
  {   var valonoff = value;
      $.post(
      "datajaxo.php",
      {valuejs:valonoff},
      function(smoutonof){
       if(smoutonof == 1){
        $(".grnalrt").fadeIn();
          $(".grnalrt").html('√  successfully updated'); 
            vwbalonoff();
        }else if(smoutonof == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      } hidpopup();   }); // end post
  }
/////////////
//////////////////
   window.onload = vwbalonoff();







  </script>
</body>

</html>