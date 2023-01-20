











<?php

include 'config.php';
session_start();
 error_reporting(0);








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



?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta name="theme-color" content="#f59627">
    <link rel="shortcut icon" href="assetscdn/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://assets1.lottiefiles.com/packages/lf20_jtl6gife.json">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assetscdn/js/jqoffline.js"></script>
<script>
window.onload = loaderspinf();
  function loaderspinf(){
    $('.loaderspin').show();
  }
</script>
</head>






<style>
  .loaderspin{
position:fixed; z-index:1100; top:30%;left:30%; background:#000000c3; width:10rem; height:10rem; border-radius:14px; box-shadow:2px 2px 50px #000000ae; display:non;
  }
@media screen and (min-width:700px)
{
  .loaderspin{
    left: 43%;
    border-radius:18px;
  }
    
}
</style>

<div class="loaderspin">
 <center>
  <div class="spinner-border text-warning" role="status" style="text-shadow:2px 2px 2px black;margin-bottom:-5rem;;">
    <span class="visually-hidden">Loading...</span>
  </div>
 </center>
</div>





<div style="border-radius:0 30px 30px 0; background:indigo; box-shadow:1px 1px 10px red, inset 1px 1px 5px black; border:none;float:right; position:fixed; top:300px;z-index:100; color:red !important; font-size:1.8rem; width:3rem;text-alighn:center;text-shadow:1px 1px 1px red;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
<i type="button" class="fa fa-cart-plus position-relative text-light p-1" style="outline:none;">
  <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span></i>
</div>

<style>
  #headertitle{
    color:white;background:orange;font-size:1.5rem; text-align: center;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; letter-spacing:6px;text-shadow:1px 1px 1px black;box-shadow:1px 1px 8px black;width:100% !important;text-shadow: 1px 1px 1px black;
  }
  @media screen and (max-width:700px) {
    #headertitle{
      font-size:1rem;
    }
  }
</style>


<div style="width:100%; background:orange; text-align: center;">
   <div id="headertitle"> Welcome To <? echo $title; ?> </div><br>
</div>



<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->


<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<center>
  <lottie-player src="https:assets1.lottiefiles.com/packages/lf20_jtl6gife.json" background="transparent" speed="2" id="chkpopv" style="display:none; position:fixed;z-index:1300; top:150px;  width: 14rem; height: 14rem;" loop autoplay></lottie-player>
</center>



<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->
<!--------------------------------------->



<!-- for canvas menu -->

<style>
  .smenusiduli li:hover{
    color: orange;
    font-size:1.6rem;
  }
  .smenusiduli li{
    color: white;
    font-size:1.4rem;
    border-bottom:1px solid silver;
  }
</style>


<div class="offcanvas offcanvas-end text-bg-dark" style="background:rgba(0, 0, 0, 0.695) !important;backdrop-filter:blur(10px);" tabindex="-1" id="offcanvasRightmenu" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightmenu"> Menu </h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">


    <form method="post" class="d-flex" role="search">
      <input name="searchitminpt" class="form-control focus-none" type="search" style="background:none;border:none;color:orange;text-align: center;outline:none !important;border-radius:0; border-bottom:2px solid orange;margin-right:0.9rem;" placeholder="Search" aria-label="Search">
      <button name="serchitembtn" class="btn fa fa-magnifying-glass" style="color:orange;outline:none;text-shadow:1px 1px 1px black;font-size:1.4rem;" type="submit"> </button>
    </form>



    <ul class="navbar-nav me-auto mb-2 mb-lg-0 smenusiduli">
                
      <li class="nav-item">
  
        <a href="index.php" class="nav-link">
          Home
        </a></li><li class="nav-item">
  
        <a href="vproducts.php?ctgry=mcloth" class="nav-link">
          Man Cloth
        </a></li><li class="nav-item">
  
        <a href="vproducts.php?ctgry=fcloth" class="nav-link">
          WoMan Cloth
        </a></li><li class="nav-item">
  
        <a href="vproducts.php?ctgry=mshoes" class="nav-link">
         Man Shoes 
        </a></li><li class="nav-item">
  
        <a href="vproducts.php?ctgry=fshoes" class="nav-link">
         Woman Shoes
        </a></li><li class="nav-item">
  
        <a href="vproducts.php?ctgry=jewlery" class="nav-link">
          jewelry
        </a></li><li class="nav-item">
  
        <a href="vproducts.php?ctgry=sports" class="nav-link">
          sports
        </a></li><li class="nav-item">
  
        <a href="vproducts.php?ctgry=electric" class="nav-link">
          Electronics
        </a></li>


  </div>
</div>
<!-- for canvas menu -->


































































<style>
  .carttextp:hover{
    color:orange;
  }
  .carttextp{
    color:whitesmoke;
    font-size:1rem;
  }
  @media screen and (max-width:700px) {
    .carttextp{
    font-size:0.7rem;
  }
  }
</style>


<!-- start canvas for cart -->

<div class="offcanvas offcanvas-end text-bg-dark" style="background:rgba(0, 0, 0, 0.6813) !important; backdrop-filter:blur(10px);" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header" style="border-bottom:1px solid silver;">
    <h5 class="offcanvas-title" id="offcanvasRightLabel"> Cart </h5>
    
    <a href="allorders.php" style="width:auto;text-decoration:wavy;color:orange;letter-spacing:4px;padding:5px; border-bottom:1px solid orange;box-shadow:1px 1px 1px black;">
     View My Orders <i class="fa fa-store"> </i>
    </a>

    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
<!-- top body -->



<div style="display: flex;flex-direction: row;" class="vsesitmdiv">
 <? if(isset($_SESSION['vsescartlst'])){
 ?>
 
<?    
foreach($_SESSION['vsescartlst'] as $vinloop => $vinlop)
  { }
?>
<?             
foreach($_SESSION['vsescrtqntty'] as $vqntty => $vqntrs)
  {  $ttlsums = $vqntrs['vitmsums'] ; 
    $vitmcount = $vqntrs['vitmcount'];
  }
 ?>             
 
 
 
 
 
 
 


<div style="width:30%;">
<img src="assetscdn/adminitems/<? echo $vinlop['vitmimg']; ?>" style="width:100%;">
</div>
<div style="width:68%;margin-left:2%;">
  <p class="carttextp"><? echo $vinlop['vitmdesc']; ?></p>
  <b style="color:silver;"> Shoes Size : <? echo  $vinlop['vitmsiz']; ?> </b>
  <br><br>
  <!-- buttons add -->
  <div style="display:flex;flex-direction:row;"> 
    <div style="width:10%;border:none;background:none;font-size:1.1rem; border-left:1px solid silver;border-top:1px solid silver;border-bottom:1px solid silver;outline:none;">
      <button id="minbtncartval" style="border:none;background:none;color:silver;font-size:1.1rem;outline:none;"> - </button>
     </div>
   <div style="width:20%;">
    <input type="text" style="border:none;background: none; color:white;width:100%;max-width:100%;font-size:1.1rem;outline:none;text-align: center;border-bottom:1px solid silver;border-top:1px solid silver;outline:none;" id="vcartvaladinpt"  value="<? echo  $vitmcount; ?>" min="1" pattern="[0-9]*" readonly>
   </div>
   <div style="width:10%;border:none;background:none;font-size:1.1rem;border-top:1px solid silver;border-bottom: 1px solid silver;border-right: 1px solid silver;outline:none;">
    <button id="maxbtncartval" style="border:none;background:none;color:silver;font-size:1.1rem;outline:none;"> + </button>
   </div>
   <div style="width:50%;text-align: center;">
    <b style="color:wite;font-size:1.1rem;"> Rs.<? echo $vinlop['vitmprice']; ?> </b>
   </div>
   </div>
<!-- buttons add -->
  </div>
<? } else { ?>

<center>
  <br>
  <br>
  <h2 style="color:rgb(216,92,117);"> Your Cart Is Empty </h2>
</center>

<? } ?>
</div>
<!-- bottom body -->

<!-- bottom body -->
<div style="border: none;position:absolute;bottom:0;border-top:4px solid silver;width:100%;">
  <div style="width:100%;">
    <b style="color:white;float:right;margin-right:1.3rem;"> Rs.
    <span class="vttlcartval"> <? echo $ttlsums; ?> </span> </b>
    <p style="color:silver;letter-spacing: 3px;"> subtotal </p>
  </div>
  <br>
<p> Shipping, taxes, and discount codes calculated at checkout </p>
<br>
<a href="checkout.php" class="btn" style="width:100%;text-align: center;outline:none;border: none;background: orange;color: white;text-shadow: 1px 1px 1px black;letter-spacing:3px;text-decoration:none;"> Checkout </a>
<br><br>
</div>

<!-- bottom body -->
    </div>
    <!-- off canvas body  -->
  </div>

</div>
<!-- end canvas for cart -->

























































<style>
  .nav-link:hover{
    color:orange;
  }
  .nav-link{
    color:white;
  }
 @media screen and (max-width:700px) {
  .headcart{
  margin-right:-12rem;
  }
 }
</style>



    
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark" style="position:sticky;z-index:1000;top:0;box-shadow:1px 1px 40px rgba(222, 222, 222, 0.517);">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="assetscdn/banners/<? echo $logo; ?>" style="width:2.5rem; max-width:2.5rem;"></a>
<i class="fa fa-cart-plus text-light headcart position-relative" style="font-size:1.4rem;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> 
  <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
</i>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightmenu" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                  
                  <li class="nav-item">
  
                    <a href="index.php" class="nav-link">
                      Home
                    </a></li><li class="nav-item">
              
                    <a href="vproducts.php?ctgry=mcloth" class="nav-link">
                      Man Cloth
                    </a></li><li class="nav-item">
              
                    <a href="vproducts.php?ctgry=fcloth" class="nav-link">
                      WoMan Cloth
                    </a></li><li class="nav-item">
              
                    <a href="vproducts.php?ctgry=mshoes" class="nav-link">
                     Man Shoes 
                    </a></li><li class="nav-item">
              
                    <a href="vproducts.php?ctgry=fshoes" class="nav-link">
                     Woman Shoes
                    </a></li><li class="nav-item">
              
                    <a href="vproducts.php?ctgry=jewlery" class="nav-link">
                      jewelry
                    </a></li><li class="nav-item">
              
                    <a href="vproducts.php?ctgry=sports" class="nav-link">
                      sports
                    </a></li><li class="nav-item">
              
                    <a href="vproducts.php?ctgry=electric" class="nav-link">
                      Electronics
                    </a></li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Others
                    </a>
                    <ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.276);backdrop-filter:blur(15px); box-shadow:1px 1px 10px black;">
                      <li><a class="dropdown-item" style="color:orange;text-shadow:1px 1px 1px black;" href="#"> Electronics </a></li>
                      <li><a class="dropdown-item" style="color:orange;text-shadow:1px 1px 1px black;" href="#"> jewellery </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" style="color:orange;text-shadow:1px 1px 1px black;" href="#"> rings </a></li>
                    </ul>
                  </li>


                </ul>
                <form method="post" class="d-flex" role="search">
                  <input name="searchitminpt" class="form-control focus-none" type="search" style="background:none;border:none;color:orange;text-align: center;outline:none !important;border-radius:0; border-bottom:2px solid orange;margin-right:0.9rem;" placeholder="Search" aria-label="Search">
                  <button name="serchitembtn" class="btn fa fa-magnifying-glass" style="color:orange;outline:none;text-shadow:1px 1px 1px black;font-size:1.4rem;" type="submit"> </button>
                </form>
              </div>


            </div>
          </nav>

<script>
    $('.loaderspin').fadeOut(3000);
  AOS.init();
</script>
