

<?php
include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}
unset($_SESSION['alertgreen']);
unset($_SESSION['alertred']);



if(isset($_POST['addbtn']))
{
  $adcontry = mysqli_real_escape_string($db,$_POST['adcountry']);
  $adtaxval = mysqli_real_escape_string($db,$_POST['adtaxval']);
  $adcountry = trim(strtolower($adcontry));
  
 $adtaxval = "INSERT INTO `shipping_tax` (vcountry, vtax) VALUES ('$adcountry','$adtaxval')";
 $adtaxvalq = mysqli_query($db,$adtaxval) or die('not sql'.mysqli_error($db)) ;
     if($adtaxvalq)
     { $_SESSION['alertgreen'] = '√ Country  added '.$adcountry;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
}






?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="shortcut icon" href="../assetscdn/favicon.png" type="image/png">
    <title> Shiping Tax !</title>
  </head>
  <body>


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







    <h1 style="color:orange;text-align:center"> Shipping Tax </h1>
     <p style="color:gray;width:80%;margin-left:10%;text-align: center;"> When Customer Order Then Apply Feeses And Some Shipping Charges + Tax with Balance According To The Country </p>  
    
    <br>
    <style>
      #card{
        width:80%;margin-left:10%;display:flex;flex-direction:row;box-shadow:1px 1px 10px gray;
        box-shadow:inset 1px 1px 6px silver;text-align: center; flex-wrap: wrap;
        border-radius:4px;
      }
      .allinputs{
        outline: none; text-align: center;
        box-shadow: inset:1px 1px 5px gray;
      }
      @media screen and (max-width:600px){
        #card{
          width: 90%;margin-left:5%; text-shadow: 1px 1px 1px black;
        }
      }
    </style>
<!-------        -------->
    <div id="card">
      






    <form method="post" class="row g-2" style="margin-top:-4rem; box-shadow:1px 1px 40px silver;width:60%;margin-left:20%;background:rgb(251, 244, 255); border-radius: 10px 0 10px 0;">
      <u style="color:indigo;"> Add New Country With Complete Name</u>
      <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden"></label>
        <input type="text" name="adcountry" class="form-control" id="inputPassword2" placeholder="Country">
      </div>
      <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden"></label>
        <input type="number" class="form-control" name="adtaxval" id="inputPassword2" placeholder="Charges Taxes">
      </div>
      <div class="col-auto">
        <button type="submit" name="addbtn" class="btn btn-primary mb-3"> Add New </button>
      </div>
    </form>




<?
$shipping_tax = mysqli_query($db,"SELECT * FROM shipping_tax");
while($vtaxf =mysqli_fetch_assoc($shipping_tax)){
?>
      <div style="width:48%; margin:1%; border-left:1px solid orange;">
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1" style="color:indigo;"><? echo  substr($vtaxf['vcountry'],0,10); ?> </span>
          <input type="text" value="<? echo $vtaxf['vtax']; ?> " class="form-control allinputs" data-id="<? echo $vtaxf['id']; ?>" placeholder=" Tax ">
        </div>
       </div>
<? } ?>      
 

      
      
      
    </div>
 <!--------   --------> 
    
















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
<script src="assets/js/jqoffline.js"></script>
    <script>
function hidpopup(){
  $('#alertgreen').hide(5000);
  $('#alertred').hide(5000);
} ;
//////////
    
   $(document).on('click','#alertgreen',function(){
     $('#alertgreen').hide(10);
   });
   $(document).on('click','#alertred',function(){
     $('#alertred').hide(10);
   });
 /////////////////
 $(document).on('input','.allinputs',function(){
   var taxto = $(this).val();
   var taxid = $(this).data('id');
         
 $.post(
      "datajaxo.php",
      {taxtojs:taxto,taxidjs:taxid},
       function(taxidf){
       if(taxidf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√ Updated');
       
     }else if(taxidf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Something Went Wrong');
      } hidpopup(); }); // 
  });
//////////////////









    </script>
    
  </body>
</html>







    
