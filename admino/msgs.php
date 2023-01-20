


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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
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
                     <img src="assets/imgs/<? echo $profile; ?>">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
          


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

                     <h2 style="color:orange;text-shadow:1px 1px 1px black;text-align: center;"> Coustomer Messages </h2>
                     <p style="color:gray;text-align: center; width:70%;margin-left:13%;"> Coustomer Messages From ContactUs Page If Want To Reply Then From Click By mail text to Reply From Login devices Emails Or Reply By admin page Then Clicks On send Buttons </p>

<br>          
<a href="javascript:generatePDF()" style="float:right; letter-spacing:5px;" class="fa fa-download"> PDF </a>
<br>
<div id="msgsvdiv">
    <br>
  <div id="vmsgsfromjs">  </div>
<br><br>
</div>
<br>
<br>







































    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
   <script src="assets/js/jqoffline.js"></script>
   <script>
   
   
   
   
  function generatePDF() {
       var doc = new jsPDF();
        doc.fromHTML(document.getElementById("vmsgsfromjs"),15,15,{
          'width': 170
        },
        function(a) {
          doc.save("coustomermsgs.pdf");
        });
      }
   
   
   
 ///////////////////////////////
function vmsgsf(){
    $.post(
      "datajaxo.php",
    {vmsgsjs:'bfhkssjd'},
       function(vmsgsjsf){
          $('#vmsgsfromjs').html(vmsgsjsf);
       })
}
/////////////////////////
   
   
///////////////////////////////
 
$(document).on('click','.fa-trash',function(){
var vmsgsjsdel = $(this).data("msgsidel");

 $.post(
      "datajaxo.php",
      {vmsgsdelj:vmsgsjsdel},
       function(vmsgsdeljf){
       if(vmsgsdeljf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Removed');
         vmsgsf();
     }else if(vmsgsdeljf == 0){
       $('.redalrt').fadeIn();
       $(".redalrt").html('× Something Went Wrong');
      }
hidpopup();
         
       }); // 

})
 ///////////////////////////////
window.onload = vmsgsf();
   </script> 
    
    
</body>

</html>