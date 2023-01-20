









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





    























































<style>
    #headerimg{
        background-image: url('assetscdn/banners/<? echo $headbgimg ; ?>');
        background-repeat: no-repeat;
        background-size:cover; height: 30rem;
        width:100%;

    }



    #bghometxt{
        color: silver;
      }
      .bgtxttbnhome:hover{
       color:orange;
        background:navy;
     } 
    .bgtxttbnhome{
      animation: 20s shopbtn infinite ease-in-out;
      animation-duration: 2s;
      animation-delay: 2s;
      animation-iteration-count: 11;
    }
     
    @keyframes shopbtn{
     40%{
        color:orange;
      }
      60%{
       box-shadow:1px 1px 30px orange;
      }
    }

    /*********************************/
    @media only screen and (min-width:700px) {
      #vtxtonbgheaderimg{
        position:absolute;z-index:5; width: 25%; margin-left:10%;margin-top:12rem;
      }   
      .bgtxttbnhome{
    font-size: 1.6rem; text-decoration:none; border-radius:10px; color: rgb(142, 4, 241); background:rgb(255, 128, 149); border-left:5px solid rgb(142, 4, 241); border-right: 5px solid rgb(142, 4, 241); box-shadow:1px 1px 20px black; text-shadow: 1px 1px 1px black; letter-spacing: 5px;padding-left:5px; padding-right:5px;
     } 
     #marqeetxt{
    font-size:3.5rem;
  }
  #headerimg{
    height: 44rem;

    }

  }
  /**********************************/
    @media only screen and (max-width:700px) {
      #vtxtonbgheaderimg{
        position:absolute;z-index:5; width: 30%; margin-left:10%;margin-top:0.1rem;
      }   
      #bghometxt{
        font-size:12px;
        color: silver;
      }
   .bgtxttbnhome{
    font-size: 1.2rem; text-decoration:none; border-radius:10px; color: rgb(142, 4, 241); background:rgb(255, 128, 149); border-left:5px solid rgb(142, 4, 241); border-right: 5px solid rgb(142, 4, 241); box-shadow:1px 1px 20px black; text-shadow: 1px 1px 1px black; letter-spacing: 2px;padding-left:2px; padding-right:2px;
  } 
  #marqeetxt{
    font-size:1.5rem;
  }
  #headerimg{
    height: 18rem;

    }
  }
  /******************************/    

</style>
<!-- start header img -->
<div id="headerimg">
   <br>
   <br>
   <br>
<div id="vtxtonbgheaderimg"> 
    <h2 style="letter-spacing:3px; font-style: bold; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-shadow: 1px 1px 2px black; color:white;"> <? echo $title;?> </h2> 
    <h3 style="color:rgb(255, 128, 149); font-family: Georgia, 'Times New Roman', Times, serif; font-style: bold;"> Shop </h3>
    <p id="bghometxt">
      <? echo $ndesc; ?>
    </p>   
    
    <a href="#shopnowbtnid" class="bgtxttbnhome"> Shop Now </a>
    
    </div>               
    
</div>

<!--  end header img -->


<!-- start of bell -->

  
  
  
<style>
                    
    #eventtxtvv{
      animation: eventtxtva 3s infinite;
      width: 90%; margin-left:5%; font-size:0.8rem;
    }
    @keyframes eventtxtva{
      10%{
        color: black;
      }
      30%{
        color: rgb(213, 213, 213);
      }
    }
    #bellimg{
        width:7rem;
    }
    /**************************/
    @media only screen and (max-width:700px) {
        #bellimg{
        width:3rem;
    }
    }
    </style>
   <div style="width:90%;margin-left: 5%; display:flex;flex-direction:row;">
      <div style="width:10%;">
         <img src="assetscdn/alert1.png" id="bellimg">
      </div>
      <div style="width:90%;">
        <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()" id="marqeetxt" style="color:silver;"> <? echo $bell; ?> </marquee>
      </div>
      </div>  
      <br>
      <b id="eventtxtvv">______ New Products </b>
<!-- end of bell -->


<style>
    .mixdivsgroup{
        width:30%; margin:1.5%;
        border-radius:20px;

    }
    #maingropdiv{
        display:flex;flex-direction: row;flex-wrap: wrap; width: 100%;
    }
      /************************/
.miximghover{
  width:100%;
 max-width:100%;
 height:11rem;

}
.fgridtitl{
color:white;background:orange;position:absolute;z-index:100;margin-top:-2.8rem;letter-spacing:2px;font-size:1rem;border-radius:5px;box-shadow:1px 1px 4px black; padding:2px;margin-left:-2.7rem;text-shadow:1px 1px 1px black;
}

/**************************/
 @media only screen and (min-width:700px) {
.miximghover{
  height: 20rem;
}
 }
/**************************/
 @media only screen and (min-width:2000px) {
    #maingropdiv{
     width:70%;margin-left:15%;
    }
 }
/**************************/
 @media only screen and (max-width:700px) {
   .mixdivsgroup{
        width:47%;
    }
.miximghover{
  height: 12rem;
}
.fgridtitl{
margin-top:-2rem;letter-spacing:2px;font-size:0.9rem;border-radius:5px;box-shadow:1px 1px 4px black; padding:2px;margin-left:-3rem;
}
}
  

</style>





  









<!-- start mix products top 1 -->
<div id="maingropdiv">


  <? 
  if(isset($_POST['serchitembtn']))
  {
    $srchinpt = mysqli_real_escape_string($db,$_POST['searchitminpt']);
  
     $srchinptsql = "SELECT * FROM `items_by_admin` WHERE vdesc LIKE '$srchinpt' OR vtitle LIKE '$srchinpt' OR vcategory LIKE '$srchinpt' ";
    $srchinptq = mysqli_query($db,$srchinptsql);
   while($srchinptf= mysqli_fetch_assoc($srchinptq)){
  ?>
  

     <br><div class="card bg-dark mixdivsgroup" data-aos="zoom-in-down" data-aos-duration="800">
       <a href="vproducts.php?ctgry=<? echo $srchinptf['vcategory'] ?>" style="text-decoration:none;">
        <img src="assetscdn/adminitems/<? echo $srchinptf['img']; ?>" class="card-img miximghover">
        <div class="card-img-overlay">
        </div>
        <center>
            <b class="fgridtitl"> <? echo substr($srchinptf['vtitle'],0,12); ?></b>
        </center>
       </a>
      </div>

<? } 
  echo '<center><h3 style="color:gold;text-align:center;"> Result Of <b style="color:white; border-left:1px solid silver;"> '.$srchinpt .'</b></h3></center>';
  echo '<br>';
}else{ ?> 

<? 

    $vitmbybtn = "SELECT * FROM `items_by_admin` ORDER BY id DESC LIMIT 6";
    $vitmbybtnq = mysqli_query($db,$vitmbybtn);
    while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
?>
     <div class="card bg-dark mixdivsgroup" data-aos="zoom-in-down" data-aos-duration="800">
       <a href="vproducts.php?ctgry=<? echo $vitmbyf['vcategory'] ?>"  style="text-decoration:none;">
        <img src="assetscdn/adminitems/<? echo $vitmbyf['img'] ?>" class="card-img miximghover">
        <div class="card-img-overlay">
        </div>
        <center>
            <b class="fgridtitl"> <? echo substr($vitmbyf['vtitle'],0,12); ?> </b>
        </center>
       </a>
      </div>
<? } } ?>

</div>
<!-- end mix products top 1 -->












<!-- start banner1 -->
<style>
    .bannersfullv{
      animation: bannersfullv 8s infinite ease-in;
      background-image: url('assetscdn/banners/<? echo $v_stngsf['baner1'] ?>');
      background-position: fixed;
      background-size: cover;
      width: 100%; height: 18rem;
     animation-duration: 15s;
    }
   @keyframes bannersfullv{
      85%{
        box-shadow:inset 1400px 1px 100px #000000c1;
      }
    }
    
    #getvcodbtn{
text-shadow:1px 1px 1px black; letter-spacing:2px;font-size:2rem;border-bottom:2px solid white;
    }
   #vofertime{
width:98%;margin-left:1%;color:gold; text-shadow:1px 1px 1px black;font-size:2.4rem;font-family:poppins; font-style:bold;font-weight:400;position:relative; z-index:10;
   }
   #percntoftxt{
color:pink;text-shadow:1px 1px 1px black; font-size:3rem; text-decoration-line: underline;
  text-decoration-style: wavy; text-decoration-color: white;
   }
  #percntoftxtin{
font-size:1.7rem;color:white; text-decoration:none !important;
  }  
  #vinvcodetime{
background:#0000008e;width:35%;border:none;float:right;  position:relative;
  }  

#vinvcodetime::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  background-repeat: repeat;
  height: 10px;
  background-size: 20px 20px;
  background-image:
   radial-gradient(circle at 10px -5px, transparent 12px, #fff 13px);
}
#vinvcodetime::after{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  background-repeat: repeat;
  height: 15px;
  background-size: 40px 20px;
  background-image:
    radial-gradient(circle at 10px 15px, #fff 12px, transparent 13px);
}
  
  
  
  
  
    
 @media screen and (max-width:600px)   
  {
    .bannersfullv{
      height: 12rem;
    }
  #vofertime{
     font-size:1.2rem;
  }
   #percntoftxt{
     font-size:2rem;
   }
   #percntoftxtin{
     font-size:0.7rem;
   }  
  #vinvcodetime{
    width:42%;
  }
    #getvcodbtn{
      font-size:1.1rem;
      color:white;text-decoration:none;
    }
  }  
    </style>
  
  
  
  
  <?
  
$vcodesql = "SELECT * FROM `vochercode` ORDER BY id DESC LIMIT 1";
$vcodeq =mysqli_query($db,$vcodesql);
$vcodef = mysqli_fetch_array($vcodeq);
$vcode = $vcodef['vcode'];
$vcodeper= $vcodef['vpercentage'];
 $vcodexpird = $vcodef['vexpired'];
  
  ?>
  <br>
  <br>
  <br>
  <br>
<div class="bannersfullv" data-aos="fade-right">
    
 <? if($voucherv0 == 0){ 
   $vchktim = time();
  if($vcodexpird > $vchktim){ 
 ?>
<div id="vinvcodetime"> 
<center>
  <b id="percntoftxt"> <? echo $vcodeper; ?> %  <sub id="percntoftxtin"> Discounts </sub></b>
  <br>
    <b id="vofertime">
      08h : 02m : 40s
    </b>
  <a href="getcoupon.php" id="getvcodbtn"> Coupon Code </a>
</center>
<br>
</div>
<? } } ?>
  </div>
  
<!-- end banner1 -->

<br>
<br>
<br>
<br>





















<h2 style="color:orange;text-align: center;"> Trending Products </h2>






<!-- start of scrool horizantol items -->
 <style>
.scroldiv{
    width:100%;
    height: auto;
    display: flex;
    flex-direction:row;
    scroll-behavior: smooth;
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
    overflow-x: auto;
    overflow-y: hidden;
    flex-wrap: nowrap;
    width:100% !important;
    display: flex; flex-direction: row;
    margin: 1%;
 }

.cardswidscrol{
    width:40%;max-width:40%; min-width:40%; border-radius:10px; margin:2%;overflow: hidden;
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
  height:12rem;max-height:12rem;min-height:12rem;
}
.forcardimghovr{
  width: 100%;
  height:10rem;max-height:10rem;min-height:10rem; border-radius:5px;overflow: hidden;
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
$vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'mcloth' ORDER BY id DESC LIMIT 4";
$vitmbybtnq = mysqli_query($db,$vitmbybtn);
while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
?>
    <div class="bg-dark cardswidscrol" data-aos="fade-left" data-aos-duration="800">
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
    
<? } ?>


      <!-- view ALL BUTTON -->
      <div class="smvallbtn" style="vertical-align: middle; width:10%;margin-right:2%;">
         <a href="vproducts.php?ctgry=mcloth" class="btn btn-outline-light" style="display: inline-block; position:relative;margin: auto;transform: translateY(280%);"> View_All </a>
      </div>
      <!-- end view ALL BUTTON -->

      
</div>
<br>
<br>
<!-- 1 -->












<!-- 2 -->
<div class="scroldiv">

  <? 
  $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'mshoes' ORDER BY id DESC LIMIT 4";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
  while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
  ?>
    <div class="bg-dark cardswidscrol" data-aos="fade-left" data-aos-duration="800">
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
    
<? } ?>


      <!-- view ALL BUTTON -->
      <div class="smvallbtn" style="vertical-align: middle; width:10%;margin-right:2%;">
         <a href="vproducts.php?ctgry=mshoes" class="btn btn-outline-light" style="display: inline-block; position:relative;margin: auto;transform: translateY(280%);"> View_All </a>
      </div>
      <!-- end view ALL BUTTON -->
  
        
  </div>
  <br>
  <br>
<!-- 2 -->


<!-- 3 -->
<div class="scroldiv">

  <? 
  $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'sports' ORDER BY id DESC LIMIT 4";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
  while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
  ?>
     <div class="bg-dark cardswidscrol" data-aos="fade-left" data-aos-duration="800">
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
    
<? } ?>


      <!-- view ALL BUTTON -->
      <div class="smvallbtn" style="vertical-align: middle; width:10%;margin-right:2%;">
         <a href="vproducts.php?ctgry=sports" class="btn btn-outline-light" style="display: inline-block; position:relative;margin: auto;transform: translateY(280%);"> View_All </a>
      </div>
      <!-- end view ALL BUTTON -->
  
        
  </div>
  <br>
  <br>
<!-- 3 -->


<!-- 4 -->
<div class="scroldiv">

  <? 
  $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'electric' ORDER BY id DESC LIMIT 4";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
  while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
  ?>   <div class="bg-dark cardswidscrol" data-aos="fade-left" data-aos-duration="800">
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
    
<? } ?>


      <!-- view ALL BUTTON -->
      <div class="smvallbtn" style="vertical-align: middle; width:10%;margin-right:2%;">
         <a href="vproducts.php?ctgry=electric" class="btn btn-outline-light" style="display: inline-block; position:relative;margin: auto;transform: translateY(280%);"> View_All </a>
      </div>
      <!-- end view ALL BUTTON -->
  
        
  </div>
  <br>
  <br>
<!-- 4 -->
<!-- end of scrool horizantol items 1 -->











<!-- start of shoes slider banner -->






<style>
    @media screen and (min-width:600px) {
      #shoesdiv{
      width:100%;box-shadow:1px 1px 200px silver; backdrop-filter:blur(10px); background:rgba(36, 36, 36, 0.075); height:18rem !important; display:flex; flex-direction:row;
    }
    #shoesdivh{
      margin-top:7rem; font-size: 5rem; text-shadow: 1px 1px 2px gray;
      color: silver;
    }
    }
    @media screen and (max-width:700px) {
      #shoesdiv{
      width:100%;box-shadow:1px 1px 200px silver; backdrop-filter:blur(10px); background:rgba(36, 36, 36, 0.075); height:7rem !important; display:flex; flex-direction:rrow
      overflow-x:hidden;
    }
    #shoesdivh{
      margin-top:0rem; font-size: 1.5rem; text-shadow: 1px 1px 5px gray;color: silver;
    }
    #fpcprogressbar{
    display: none;
  }
    }
  
  
  .shoesinimg1{
    width:80%; transform: scale(1.1);position: relative; z-index:40;
    animation: shoesinimg1 2s infinite alternate-reverse;
  }
  @keyframes shoesinimg1{
    from{
      opacity:1;
      margin-top:-2rem;
  
    }
    to{
      opacity:0.9;
      margin-top:0rem;
    }
  }
  
  </style>
  
  
  
    
  
  
    <div id="shoesdiv">
      <div style="width:30%;">
         <center>
          <h3 id="shoesdivh"> Shoes </h3>
          <b style="color:white; text-shadow: 1px 1px 1px lime;"> Top rated </b>
          <b style="color:silver;"> Male / Females </b>
  
         </center>
      </div>
      <div style="width:70%;">
        <center>
          <img class="shoesinimg1" src="assetscdn/banners/<? echo $shoesbg; ?>" data-aos="flip-left" data-aos-duration="1500">
         
        </center>
      </div>
      
  
    </div>
 <progress id="fpcprogressbar"></progress>
  
   
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<!-- end of shoes slider banner -->










<!-- start of sm slider 1 ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->




  <style>
  .imgslidersm{
    display:flex;flex-direction: column;
  }
  .slidertxtsm{
    width:90%;
    margin-left:5%;
    margin-right:5%;
  }
  .imgslider{
    display:none;
  }
  @media screen and (min-width:600px){
    .imgslidersm{
      display:none; }
    .imgslider{
      display:block;
    }
  }
  @media screen and (max-width:600px){
    .imgslider{
      display:none !important;
    }
  }
</style>

 <? $vmsholast = "SELECT * FROM `items_by_admin` WHERE vcategory = 'mshoes' ORDER BY id DESC LIMIT 1";
  $vmsholastq = mysqli_query($db,$vmsholast);
 $vmsholastf= mysqli_fetch_assoc($vmsholastq);
?>


<!--------- start of images slider box1 -->
<div class="imgslidersm">
  <!--------- start of slider -->  
  <div style="display:flex;flex-direction: row; width:80%; margin-left: 10%;">
        <img class="vfjqslidimg2sm" src=" assetscdn/adminitems/<? echo $vmsholastf['img']; ?>" style="position:relative;width:100%;border-radius:10px;box-shadow:1px 1px 18px rgba(192, 192, 192, 0.719);" data-aos="zoom-in-down" data-aos-duration="800">
  </div>
<br>
<br>
<br>
  <div style="display:flex;flex-direction:row;flex-wrap:wrap; margin:auto; width:100%;">
 <?
   $vmahoes = "SELECT * FROM `items_by_admin` WHERE vcategory = 'mshoes' ORDER BY id DESC LIMIT 20";
  $vmahoesq = mysqli_query($db,$vmahoes);
 while($vmahoesf= mysqli_fetch_assoc($vmahoesq)){
 
 ?>  
      <img class="slidsimglst2sm" src="assetscdn/adminitems/<? echo $vmahoesf['img']; ?>" style="position:relative;height:35px; width:35px; margin-left:5%; border-radius:50%;" data-vdesc="<? echo $vmahoesf['vdesc']; ?>" data-vimgsrc="assetscdn/adminitems/<? echo $vmahoesf['img']; ?>" data-vprice="<? echo $vmahoesf['vprice']; ?>" data-vid="<? echo $vmahoesf['id']; ?>">
      
 <? } ?>     
      
     
 
   </div>
<br>
<br>
<br>

<!--------- end of slider -->
  <!--------- start of slider -->
  <div class="slidertxtsm">
    <div class=""><h1 class="h2 text-light" id="mshodescsm"> <? echo $vmsholastf['vdesc']; ?>
  </h1></div>
  <div><div> <span style="color:#bababa;"> Rs. <span style="color:orange;" id="mshorssm">  <? echo $vmsholastf['vprice']; ?> </span>
  </span></div>
  <div>
   <input type="hidden" id="mshoidsm" value=" <? echo $vmsholastf['id']; ?>">
    <button id="adcartmshosmbtn" style="width:100%;background:orange;outline:none;padding:5px;border:none;border-radius:5px;">
      <span style="color:white; text-shadow: 2px 2px 2px black;" class="fa fa-cart-plus">
      Add To Cart 
    </span>
  </button>

    <a href="vproducts.php?ctgry=mshoes"  class="btn btn-outline-warning" style="box-shadow:0px 2px 20px rgba(235,235,235,0.43); margin-top:10px;width:100%;">
      <span style="color:white !important; text-shadow: 1px 1px 1px silver;">
              Sell All
    </span>
  </a>

</div>
    </div>
  
  </div>
  <!--------- end of slider txt -->

  <br>
  <br>
  <br>
  <br>


  </div>
  <!--------- end of images slider box1 -->






































































<!-- start of sm slider 2 ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<? $vfsholast = "SELECT * FROM `items_by_admin` WHERE vcategory = 'fshoes' ORDER BY id DESC LIMIT 1";
$vfsholastq = mysqli_query($db,$vfsholast);
$vfsholastf= mysqli_fetch_assoc($vfsholastq);
?>


<!--------- start of images slider box2 -->
<div class="imgslidersm">
<!--------- start of slider -->  
<div style="display:flex;flex-direction: row; width:80%; margin-left: 10%;">
      <img class="vfjqslidimg1sm" src="assetscdn/adminitems/<? echo $vfsholastf['img']; ?>" style="position:relative;width:100%;border-radius:10px;box-shadow:1px 1px 30px rgba(190,190,190,0.718);" data-aos="zoom-in-down" data-aos-duration="800">
</div>
<br>
<br>
<br>
<div style="display:flex;flex-direction:row;flex-wrap:wrap; margin:auto; width:100%;">
   
   
<?
 $vfahoes = "SELECT * FROM `items_by_admin` WHERE vcategory = 'fshoes' ORDER BY id DESC LIMIT 20";
$vfahoesq = mysqli_query($db,$vfahoes);
while($vfahoesf= mysqli_fetch_assoc($vfahoesq)){
?>  
<img class="slidsimglst1sm" src="assetscdn/adminitems/<? echo $vfahoesf['img']; ?>" style="position:relative;width:35px;height:35px; margin-left:5%; border-radius:50%;" data-vdesc="<? echo $vfahoesf['vdesc']; ?>" data-vimgsrc="assetscdn/adminitems/<? echo $vfahoesf['img']; ?>" data-vprice="<? echo $vfahoesf['vprice']; ?>" data-vid="<? echo $vfahoesf['id']; ?>">
    
<? } ?>
 </div>
<br>
<br>
<br>

<!--------- end of slider -->

<!--------- start of slider -->
<div class="slidertxtsm">
  <div><h2 id="fshodescsm" class="text-light"><? echo $vfsholastf['vdesc']; ?>
</h2></div>
<div data-product-blocks=""><div><span style="color:rgb(184,184,184);"> Rs. <span style="color:orange;" id="fshorssm"> <? echo $vfsholastf['vprice']; ?> </span>
</span></div>
<div class="payment-buttons">
  <input type="hidden" id="fshoidsm" value="<? echo $vfsholastf['id']; ?>">
 <button id="adcartfshosmbtn" style="color:white; background:orange;width:100%;outline:none;"class="btn">
    <span style="color:white; text-shadow: 2px 2px 2px black;" class="fa fa-cart-plus">
      Add To Cart
  </span>
</button>

  <a href="vproducts.php?ctgry=fshoes" class="btn btn-outline-warning" style="width:100%; box-shadow:0px 2px 20px gray; margin-top:10px;outline:none;">
    <span style="color:white !important; text-shadow: 1px 1px 1px gray;outline:none;">
          See All
  </span>
</a>

</div>
  </div>

</div>
<!--------- end of slider txt -->

<br>
<br>
<br>
<br>


</div>
<!--------- end of images slider box -->

<!-- end of sm slider 1 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!-- start of sm slider 2 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!-- end of sm slider 2 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->














<!-- start of pc slider 1 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!--------- start of images slider box -->
<div class="imgslider" id="bottomdiv" style="display:flex;flex-direction:row;">
    <!--------- start of slider -->  
    <div style="display:flex;flex-direction: row; width:48%; margin-left: 5%;">
      <div class="vnonescrolbar" style="display:flex;flex-direction:column; width:5rem; max-width:5rem; overflow-x:hidden;overflow-y: auto;height: 30rem; margin-right:4%;">
           
   <?
     $vmahoes = "SELECT * FROM `items_by_admin` WHERE vcategory = 'mshoes' ORDER BY id DESC LIMIT 20";
    $vmahoesq = mysqli_query($db,$vmahoes);
   while($vmahoesf= mysqli_fetch_assoc($vmahoesq)){
   
   ?>       
           
            <img class="slidsimglst1" src="assetscdn/adminitems/<? echo  $vmahoesf['img'] ; ?>" style="position:relative;width:3rem; margin-left:5%; margin-top:1rem; border-radius:15%;" data-vdesc="<? echo $vmahoesf['vdesc']; ?>" data-vimgsrc="assetscdn/adminitems/<? echo $vmahoesf['img']; ?>" data-vprice="<? echo $vmahoesf['vprice']; ?>" data-vid="<? echo $vmahoesf['id']; ?>">
    <? } ?>      
   </div>
           
   <? $vmsholast = "SELECT * FROM `items_by_admin` WHERE vcategory = 'mshoes' ORDER BY id DESC LIMIT 1";
    $vmsholastq = mysqli_query($db,$vmsholast);
   $vmsholastf= mysqli_fetch_assoc($vmsholastq);
  ?>
           
      <div>
          <img class="vfjqslidimg1" src="assetscdn/adminitems/<? echo $vmsholastf['img']; ?>" style="position:relative;width:25rem;min-width:25rem;max-width:25rem;border-radius:10px;box-shadow:1px 1px 18px rgba(192, 192, 192, 0.719);" data-aos="zoom-in-down" data-aos-duration="800">
          </div>
  
  
  
          </div>
  <!--------- end of slider -->
    <!--------- start of slider -->
    <div class="slidertxt" style="margin-left:2%;width:48%;">
      <div><h1 id="mshodescpc" class="text-light"><? echo $vmsholastf['vdesc']; ?>
    </h1></div>
    <div data-product-blocks=""><div class="product-block product-block--price"> <span style="color:#c8c8c8;">Rs. <span style="color:orange;" id="mshorspc"> <? echo $vmsholastf['vprice']; ?> </span>
    </span></div>
    <div>
     <input type="hidden" id="mshoidpc" value="<? echo $vmsholastf['id']; ?>">
      <button id="adcartmshopcbtn" style="width:92%; margin-left:4%;background:orange;outline:none;border:none;padding:7px;">
        <span style="color:white; text-shadow: 2px 2px 2px black; background:orange;" class="fa fa-cart-plus">
          Add To Cart
      </span>
    </button>
  
      <a href="vproducts.php?ctgry=mshoes"  class="btn btn-outline-warning" style="box-shadow:0px 2px 20px rgba(0, 255, 255, 0.432); margin-top:10px;color:white;width:92%;margin-left:4%;outline:none;">
        <span style="color:white !important; text-shadow: 1px 1px 1px silver;">
              See All
      </span>
    </a>
  </div>
      </div>
    </div>
    <!--------- end of slider txt -->
    </div>
    <!--------- end of images slider box -->
  
  
  

<!-- end of pc slider 1 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->














<!-- start of pc slider 2 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!--------- start of images slider box -->


<? $vfsholast = "SELECT * FROM `items_by_admin` WHERE vcategory = 'mshoes' ORDER BY id DESC LIMIT 1";
$vfsholastq = mysqli_query($db,$vfsholast);
$vfsholastf= mysqli_fetch_assoc($vfsholastq);
?>
<div class="imgslider" style="display:flex;flex-direction:row;">
<!--------- start of slider -->
<div class="slidertxt" style="width:48%;margin-left:2%;">
  <div><h2 id="fshodescpc" style="color:white;"><? echo $vfsholastf['vdesc']; ?>
</h2></div>
<div><div><span style="color:#b9b9b9;">Rs. <span id="fshorspc" style="color:orange;"> <? echo $vfsholastf['vprice']; ?> </span>
</span></div>
<div class="payment-buttons">
 <input type="hidden" id="fshoidpc" value="<? echo $vfsholastf['id']; ?>">
  <button id="adcartfshopcbtn" style="outline:none; border:none;padding:7px;color:white;background:orange;width:92%;margin-left:4%;">
    <span style="color:white; text-shadow: 2px 2px 2px black;" class="fa fa-cart-plus">
     Add To Cart
  </span>
</button>

  <a href="vproducts.php?ctgry=fshoes" class="btn btn-outline-warning" style="box-shadow:0px 2px 20px rgba(0, 255, 255, 0.432); margin-top:10px;width:92%; margin-left:4%;">
    <span style="color:white !important; text-shadow: 1px 1px 1px silver;">
           see All
  </span>
</a>

</div>
  </div>

</div>
<!--------- end of slider txt -->
<!--------- start of slider -->  
<div style="display:flex;flex-direction: row; width:48%; margin-left: 2%;">
    <div>
      <img class="vfjqslidimg2" src="assetscdn/adminitems/<? echo $vfsholastf['img']; ?>" style="position:relative;width:25rem;min-width:25rem;max-width:25rem;border-radius:10px;box-shadow:1px 1px 18px rgba(192, 192, 192, 0.719);">
      </div>

      <div class="vnonescrolbar" style="display:flex;flex-direction:column; width:5rem; max-width:5rem; overflow-x:hidden;overflow-y: auto;height: 30rem; margin-right:4%;">
   
<?
 $vfahoes = "SELECT * FROM `items_by_admin` WHERE vcategory = 'fshoes' ORDER BY id DESC LIMIT 20";
$vfahoesq = mysqli_query($db,$vfahoes);
while($vfahoesf= mysqli_fetch_assoc($vfahoesq)){
?>  
        <img class="slidsimglst2" src="assetscdn/adminitems/<? echo $vfahoesf['img'] ;?>" style="position:relative;width:3rem; margin-left:5%; margin-top:1rem; border-radius:15%;" data-aos="zoom-in-down" data-aos-duration="800" data-vdesc="<? echo $vfahoesf['vdesc']; ?>" data-vimgsrc="assetscdn/adminitems/<? echo $vfahoesf['img']; ?>" data-vprice="<? echo $vfahoesf['vprice']; ?>" data-vid="<? echo $vfahoesf['id']; ?>">
<? } ?>       
 
      
      
        
       </div>
      </div>
<!--------- end of slider -->

<br>
<br>

</div>
<!--------- end of images slider box -->
<br>
<br>

<!-- end of pc slider 2 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
















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

<div id="shopnowbtnid"> </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="assetscdn/js/jqoffline.js"></script>
 <script>
   // $(document).ready(function(){

   // })
////////1.
$(document).on('click','.slidsimglst1',function(){
 var vdescto = $(this).data('vdesc');
 var vimgsrcto = $(this).data('vimgsrc');
  var vpriceto = $(this).data('vprice');
   var vidto = $(this).data('vid');
   
$('.vfjqslidimg1').attr('src',vimgsrcto);
     $('#mshodescpc').html(vdescto);
     $('#mshorspc').html(vpriceto);
     $('#mshoidpc').val(vidto); 
});
///////////2.
$(document).on('click','.slidsimglst2',function(){
 var vdescto = $(this).data('vdesc');
 var vimgsrcto = $(this).data('vimgsrc');
  var vpriceto = $(this).data('vprice');
   var vidto = $(this).data('vid');
   
$('.vfjqslidimg2').attr('src',vimgsrcto);
     $('#fshodescpc').html(vdescto);
     $('#fshorspc').html(vpriceto);
     $('#fshoidpc').val(vidto); 
});
///////////3.
$(document).on('click','.slidsimglst1sm',function(){
 var vdescto = $(this).data('vdesc');
 var vimgsrcto = $(this).data('vimgsrc');
  var vpriceto = $(this).data('vprice');
   var vidto = $(this).data('vid');
   
  $('.vfjqslidimg1sm').attr('src',vimgsrcto);
     $('#fshodescsm').html(vdescto);
     $('#fshorssm').html(vpriceto);
     $('#fshoidsm').val(vidto); 
  
});
///////////4.
$(document).on('click','.slidsimglst2sm',function(){ 
 var vdescto = $(this).data('vdesc');
 var vimgsrcto = $(this).data('vimgsrc');
  var vpriceto = $(this).data('vprice');
   var vidto = $(this).data('vid');
   
  $('.vfjqslidimg2sm').attr('src',vimgsrcto);
     $('#mshodescsm').html(vdescto);
     $('#mshorssm').html(vpriceto);
     $('#mshoidsm').val(vidto); 
});

////////////////////////////////////////////////////
  /*    vcartvaladinpt
      minbtncartval
      maxbtncartval
      vttlcartval
*/ 
/////////////////////////////////////////////////////
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




/*
var oninptcartval = document.getElementById('vcartvaladinpt');
oninptcartval.oninput=function(){
  var thisvalinpt = this.value;
  if(thisvalinpt < 1){
    $('#oninptcartval').val(0);
  }else{
  var fnlvalcart = thisvalinpt * 2000;
   $('.vttlcartval').html(fnlvalcart);}
} */
/////////////////////////////////////////
     //////////////
/////////////////////////////////////////

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
  /////// from sm male shoes cart add btn 
//////////////////////////////////////////
$(document).on('click','#adcartmshosmbtn',function(){
  var vidlstdiv = $('#mshoidsm').val();
     
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
/////// from sm female shoes cart add btn 
//////////////////////////////////////////
$(document).on('click','#adcartfshosmbtn',function(){
  var vidlstdiv = $('#fshoidsm').val();
     
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
/////// from pc female shoes cart add btn 
//////////////////////////////////////////
$(document).on('click','#adcartfshopcbtn',function(){
  var vidlstdiv = $('#fshoidpc').val();
     
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
/////// from pc male shoes cart add btn 
//////////////////////////////////////////
$(document).on('click','#adcartmshopcbtn',function(){
  var vidlstdiv = $('#mshoidpc').val();
     
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
      } chkpophid(); }); // end post

});
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










/////////////// start of timer with ajax ////
var stime = <?php echo $vcodexpird ?> * 1000;
  var now = <? echo time() ?> * 1000;
  // for intervel
  var x = setInterval(function()
  {
    now = now + 1000;
    var dis = stime - now;
    
    var d = Math.floor(dis/(1000*60*60*24));
    var h = Math.floor((dis%(1000*60*60*24))/(1000*60*60));
    
    var m = Math.floor((dis%(1000*60*60))/(1000*60));
    var s = Math.floor((dis%(1000*60))/1000);
    
document.getElementById("vofertime").innerHTML = d + "<sub> :d </sub>" +  h + "<sub> :h </sub>" + m + "<sub> :m </sub>" + s + "<sub> :s </sub>";
    
  },1000);
  ///// end of timer with ajax



///////////////////////////////////


  
  </script>
  </body>
</html>