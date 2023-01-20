












































  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">







<style>
    .fotrul li a:hover{
     color:orange;
     
    }
    .fotrul li{
      list-style:none !important;
    }
    .fotrul li a{
    color:white; letter-spacing:2px;
    font-size:1.3rem; text-decoration:none;
    }
  
    @media screen and (min-width:700px) {
      .smfooter{
      display: none; visibility: hidden;
    }
    .pcfooter{
      display: block;
    }
    }
  
    @media screen and (max-width:700px) {
      .smfooter{
      display: block;
    }
    .pcfooter{
      display: none;
      visibility: hidden;
    }
    }
    footer{
      overflow-x:hidden !important;
      
    }
  </style>
  
  
  
  
  
  
  
  
  
  <!-- footer -->
  
  <?php
  
  include 'config.php';
  session_start();
   error_reporting(0);
  
  
  $v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
  $v_stngsq =mysqli_query($db,$v_stngs);
  $v_stngsf = mysqli_fetch_array($v_stngsq);
  $title = $v_stngsf['ntitle'];
  $logo = $v_stngsf['logo'];
  
  ?>
  
  
  
  
  
  <footer class="pcfooter" style="display: flex;flex-direction:row;width:100%;">
    <div style="width: 18%; margin-left:2rem;">
      <center>
      <a href="/"><img src="assetscdn/banners/<? echo $logo; ?>" style="width:7rem"></a>
      <br>
      <p style="color:orange; font-size:1.2rem; letter-spacing:2px;"> <? echo $title; ?> </p>
     </center>
    </div>
  
  
  
  
  <div style="width:38%">
  <center>
    <b style="color:orange; font-size:1.8rem;"> Footer Menu </b>
    <ul class="fotrul"><li><a href="contact-us.php">Contact Us</a></li><li><a href="privacy-policy.php">Privacy Policy</a></li><li><a href="refund-policy.php">Refund Policy</a></li><li><a href="terms-of-service.php">Terms of Service</a></li><li><a href="contact-information.php">Contact Information</a></li></ul>
  </center>
  </div>
  
  <div style="width:40%;">
    <center>
      <b style="color:orange; font-size:1.8rem;"> SIGN UP AND SAVE </b>
      <p style="color:silver;width:80%;"> Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals. </p>
   <div>
    <input type="text" style="color:orange;border: none; text-decoration:1px 1px 1px black; outline: none; border-bottom:2px solid orange;background:none;width:60%;" placeholder="Enter your email" class="mailinptj">
    <button style="color:orange;background:none;text-shadow:1px 1px 1px black;margin-left:-2.5rem;font-size:1.5rem;border:none;outline:none;" class="fa fa-envelope loginbtnj"> </button>
   </div>
    </center>
    <br>
   
  <div style="margin-left: 20%;">
    <div style="display:flex;flex-direction:row;">
      <div>
      <b style="color:lime;"> HI, </b>
      </div>
       <div><b style="color:orange;letter-spacing:2px;" id="vdivlogmail"> Please Login </b></div>
       <div id="vfororders"> </div>
     </div>
   <a href="allorders.php" style="color:aqua;">View My Orders </a>
   
  </div>
  </div>
  </footer>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <footer class="smfooter" style="background:rgb(19, 19, 19);display:non;">
   <center>
    <a href="/"><img src="assetscdn/banners/<? echo $logo; ?>" style="width:6rem; max-width:6rem;"></a>
   </center>
  
  
  
   <div class="accordion" id="accordionPanelsStayOpenExample">
   
    <div class="accordion-item"  style="background:rgb(19, 19, 19);outline:none;border: none;">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne" style="background:rgb(19, 19, 19);">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" style="color:orange; text-align: center !important;font-size:1.5rem;background:rgb(19, 19, 19);">
          <span style="margin-left:38%;">Footer Menu</span>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne"  style="background:rgb(19, 19, 19);border:none">
        <div class="accordion-body">
         <center>
          <ul class="fotrul"><li><a href="contact-us.php">Contact Us</a></li><li><a href="privacy-policy.php">Privacy Policy</a></li><li><a href="refund-policy.php">Refund Policy</a></li><li><a href="terms-of-service.php">Terms of Service</a></li><li><a href="contact-information.php">Contact Information</a></li></ul>
         </center>
        </div>
      </div>
    </div>
  
  
  
  
  
    <div class="accordion-item" style="border:none;background:rgb(19, 19, 19);">
      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="color:orange; text-align: center !important;font-size:1.5rem;background:rgb(19, 19, 19);">
          <span style="margin-left:40%;"> Log In <i class="fa fa-user-tie"> </i> </span>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo" style="border:none;background:rgb(19, 19, 19);">
        <div class="accordion-body">
   <center>
    <b style="color:orange; font-size:1.8rem;"> SIGN UP AND SAVE </b>
    <p style="color:silver;width:80%;"> Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals. </p>
  <div style="border:none;outline:none;">
  <input type="text" style="color:orange;border: none; text-decoration:1px 1px 1px black; outline: none; border-bottom:2px solid orange;background:none;width:60%;font-size:1.4rem;z-index:2;position:relative;" placeholder="Enter your email" class="mailinptj">
  <button style="color:orange;background:none;text-shadow:1px 1px 1px black;margin-left:-2.5rem;font-size:1.7rem; outline:none !important;border:none !important;z-index:5;position:relative;" class="btn fa fa-envelope loginbtnj"> </button>
  </div>
  <br>
  
  <div style="margin-left: 20%;">
  <div style="display:flex;flex-direction:row;">
    <div>
    <b style="color:lime;"> HI, </b>
    </div>
     <div><b style="color:orange;letter-spacing:2px;" id="vdivlogmail"> Please Login </b></div>
     <div id="vfororders"> </div>
   </div>
  <a href="allorders.php" style="color:aqua;">View My Orders </a>
  
  </div>
  
   </center>
        </div>
      </div>
    </div>
  
  </div>
  
  </footer>
  
  
  
  
  
  <br>
  <div style="box-shadow:1px 1px 20px rgba(128, 128, 128, 0.683);width: 100%; text-align: center;">
    <a href="/" style="color:silver;text-decoration: none;"> All Rights Reserved  © 2022 mahar Shop </a>
  </div>
  <!-- footer -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="assetscdn/js/jqoffline.js"></script>
  <script>
  
  /////////////////////////
  /*
  function popmsgf()
  {  $('#popmsg').hide(10); }
  */
  //////////////////////////
  //////////////////////////
  
  function chkloginedf(){
      $.post(
        "jaxdata.php",
        {chkloginedj:'sahjm'},
        function(chkloginedfj){
        $("#vdivlogmail").html(chkloginedfj);
        }
      ); // end post
  }    
  ///////////////////////////
    //////////////////////////////
   $(document).on('click','.loginbtnj',function(){
    var mailinptj = $('.mailinptj').val();
        $.post(
        "jaxdata.php",
      {mailinptjs:mailinptj},
         function(mailfpost){
         if(mailfpost == 1){
       // $("#successrs").fadeIn();
       //  $("#successrs").html('√ You Login ');
         chkloginedf();
         }else if(mailfpost == 0){
         //   $('#errors').fadeIn();
        //    $("#errors").html('× Something Wrong');
        }  }); // end post
    })
  //////////////
  
  
  
  
  
  
  
  
  
  
  
  //////////////////////////
  window.onload = chkloginedf();
  </script>