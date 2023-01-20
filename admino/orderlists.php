
<?
include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}
unset($_SESSION['alertgreen']);
unset($_SESSION['alertred']);


$countrcnt = mysqli_query($db,"SELECT count(shipping_statues) as contrcnt FROM c_orders WHERE shipping_statues = 'Recent'");
$contrcntf=mysqli_fetch_assoc($countrcnt);
$contrcnt = $contrcntf['contrcnt'];

$contrtrn = mysqli_query($db,"SELECT count(shipping_statues) as conrtrn FROM c_orders WHERE shipping_statues = 'Return'");
$contrtrnf=mysqli_fetch_assoc($contrtrn);
$conrtrn = $contrtrnf['conrtrn'];

$contprogrs = mysqli_query($db,"SELECT count(shipping_statues) as contprogrs FROM c_orders WHERE shipping_statues = 'InProgress'");
$contprogrsf=mysqli_fetch_assoc($contprogrs);
$contprogrs = $contprogrsf['contprogrs'];

$contdlivrd = mysqli_query($db,"SELECT count(shipping_statues) as contdlivrd FROM c_orders WHERE shipping_statues = 'Delivered'");
$contdlivrdf=mysqli_fetch_assoc($contdlivrd);
 $contdlivrd = $contdlivrdf['contdlivrd'];
//////////////

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


<style>
.vchartdiv{
    width:50%; max-width:50%;
}
.sttctxtdiv{
    width:30%; margin-left:20%;
}
@media screen and (max-width:600px) {
    .sttctxtdiv{
   display:none;
}
}
#sttch{
    color:rgb(44, 44, 160);
    border-bottom:1px solid navy;
}
#sttclist{
    color:rgb(66, 0, 153);
    letter-spacing:2px;
}
#sttclist li{
    padding: 5px;
}
</style>


<div style="display:flex;flex-direction:row;">

    <div class="vchartdiv">
        <center>
          <!-- single canvas node to render the chart -->
          <canvas
          id="myChart"
          width="350"
          height="350"
          aria-label="chart"
          role="img"
        ></canvas>
        </center>
       </div>   
       <div class="sttctxtdiv">
        <center>
            <h2 id="sttch"> Static Products </h2>
            <ul id="sttclist">
            <li> All Recent Orders </li>
            <li> All Pending Orders </li>
            <li> All Return Orders </li>
            <li> All Delivered Orders </li>
           </ul>
        </center>
       </div>
</div>
























































<style>
  #pdfdiv{
 background:whitesmoke;border-radius:8px;box-shadow:1px 1px 100x gray;display:flex;flex-direction:row;
  }
  @media screen and (min-width:600px)
  {
    #pdfdiv{
      width: 40%;margin-left:30%;
    }
  }
  @media screen and (max-width:600px)
  {
    #pdfdiv{
      width: 90%;margin-left:5%;
    }
  }
</style>





<!-------- start of pdf button -------->

<form method="post" id="pdfdiv">
  <div style="width:27%;padding:5px;margin-left:0.2rem;">
    <input type="number" name="fromlst" style="width:98%;margin:3%;background:whitesmoke;border-radius:12px;font-size:1.2rem;color:indigo;text-align:center;outline:none;border:3px solid white; box-shadow:inset 1px 0px 3px  #00000074;" placeholder="From" required="">
  </div>
  <div style="width:27%;padding:5px;margin-left:1rem;">
    <input name="tolst" type="number" style="width:98%;margin:3%;background:whitesmoke;border-radius:12px;font-size:1.2rem;color:indigo;text-align:center;outline:none;border:3px solid white; box-shadow:inset 1px 0px 3px  #00000074;" placeholder="To" required="">
  </div>

  <div style="width:30%;">
    <button type="submit" name="genpdfbtn" style="color:orange;border:none;border-left:5px solid orange;border-right:4px solid orange; border-radius:5px; box-shadow:1px 1px 8px gray;background:whitesmoke; font-size:1rem;padding:5px;"> generate</button>
  </div>
  <button type="button" id="generate" style="color:red;background:whitesmoke;font-size:1.4rem;border:2px solid pink; border-radius:6px;text-shadow:1px 1px 1px black;outline:none;"> PDF </button>
</form>
<br>
<!---------- end of pdf button -------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.2.3/jspdf.plugin.autotable.min.js"></script>

 
<table id="tablepdf" style="display:none;">
    <thead>
    <tr>
        <th>Customer</th>
        <th> Products </th>
        <th> Payments </th>
        <th> Tr_id </th>
        <th> Status </th>
        <th> Address </th>
        <th> Customer Message </th>
    </tr>
    </thead>
    <tbody>
      
<?  
if(isset($_POST['genpdfbtn'])){
  $fromlst = mysqli_real_escape_string($db,$_POST['fromlst']);
  $tolst = mysqli_real_escape_string($db,$_POST['tolst']);
 $genpdfbtn = "SELECT * FROM `c_orders`   ORDER BY id DESC";
 $genpdfbtnq = mysqli_query($db,$genpdfbtn);
 while($genpdfv= mysqli_fetch_assoc($genpdfbtnq)){ 
   
   if($genpdfv['id'] > $fromlst && $genpdfv['id'] < $tolst){
 ?>
    <tr>
<td align="right"><? echo $genpdfv['cname'].'<br>'.$genpdfv['cemail'].'<br>'. $genpdfv['cphone']; ?></td>

<td><? echo $genpdfv['item_name'].'<br>'.'<u> Size:'. $genpdfv['item_size'] .'</u><br><u>Quantity:'. $genpdfv['item_quantity'].'</u><br><u>Price:'.$genpdfv['item_price'].'</u>'; ?></td>
  
  <td>
    <? echo $genpdfv['payments_paid'].'<br><u> Total:R.s '. $genpdfv['total_price'].'</u>'; ?>
  </td>   
 
  <td>
    <? echo $genpdfv['tr_id']; ?>
  </td>   
  
  <td>
  <? echo $genpdfv['shipping_statues']; ?>
  </td>   
       
<td><? echo 'country:'.$genpdfv['country'].'<br>'.'<u> city:'. $genpdfv['city'] .'</u><br><u>Postal:'. $genpdfv['postal_code'].'</u><br><u>time:'. substr($genpdfv['order_time'],0,11).'</u>'; ?></td>

  <td>
  <? echo $genpdfv['cmsg']; ?>
  </td>   
    </tr>
<? } } } ?>
    </tbody>
</table>
<script>
    var elem = document.getElementById("generate");
elem.onclick = function () {
var doc = new jsPDF();
doc.autoTable({
    html: '#tablepdf',
    didDrawCell: function (data) {
        if (data.column.dataKey === 5 && data.cell.section === 'body') {
            doc.autoTable({
          /*      head: [["One", "Two", "Three", "Four"]],
                body: [
                    ["1", "2", "3", "4"],
                    ["1", "2", "3", "4"],
                    ["1", "2", "3", "4"],
                    ["1", "2", "3", "4"]
                ],    */
                startY: data.cell.y + 2,
                margin: {left: data.cell.x + data.cell.padding('left')},
                tableWidth: 'wrap',
                theme: 'grid',
                styles: {
                    fontSize: 2,
                    cellPadding: 1,
                }
            });
        }
    },
    columnStyles: {
        7: {cellWidth: 30}
    },
    bodyStyles: {
        minCellHeight: 30
    }
});
doc.save('table.pdf');
};
</script>






























































<style>
  .navadscolor{
    color:navy;background: rgb(227,190,254); letter-spacing:1px; font-style: bold;
  }
  .navbitcoin{
    animation: navbitcoin 4s infinite;
  }
  @keyframes navbitcoin
  {
    10%{
     opacity: 0.2; margin-left: 1em;
    }
    80%{
     opacity: 1; margin-left: 0em;
    }
  }
  
    /* for table golden star and silver */
        
        
   table.edTable { width: 100%; font: 17px calibri; } table, table.edTable th, table.edTable td { border: solid px #9b58b5; border-collapse: collapse; padding: 1px; text-align: center; } table.edTable td { background-color: #5c0e80; color: #ffffff; font-size: 14px; } table.edTable th { background-color : #b02875; color: #ffffff; } tr:hover td { background-color:navy; color: #dddddd; }
   
        
  /*  own */
  .silTable{
    width: 100%;
  
    
  }
  .sthead{
    background:white;
    border:2px solid gray;
    border-radius: 10%;
    box-shadow: 2px 3px 14px 2px black;
  }
  .sthead th{
    color:rgb(255, 136, 0);
    font-size: 1em;
    padding-left:2px;
    border-right:0.1px solid rgb(231, 225, 225);
  }
  .gthead{
    background:rgb(203,149,6);
    border:2px solid gray;
    border-radius: 10%;
    box-shadow: 2px 3px 14px 2px black;
  }
  .gthead th{
    color:indigo;
    font-size: 1em;
  }
  .strowdata td{
    font-size: 0.8em;
    
  }
  .strowdata:hover { letter-spacing:1px; }
  .strowdata:hover td i{ color:#05cecd; }
  .strowdata td i{
    width: 1em;
    color:indigo;
  }
  /* end of golden star table */
  #listtable{
      width: 100%;
      overflow-x: auto; 
      overflow-y: auto; 
      height: 40em;
   }      


   
.tblsvbtn4:hover{
  color:white;
  background: #3b24c2;
  box-shadow: 1px 1px 10px black;
}
.tblsvbtn4{
  width:21%;
  margin-left:3%;
  background:whitesmoke;
  box-shadow:1px 1px 11px silver;
  border-radius:8px;
  border-top: 4px solid orange;
  padding:10px;
}
.tblcolorv{
  color:rgb(192, 104, 255);
}

.tbldiv4actv{
  color:white;
  background: #3b24c2;
  box-shadow: 1px 1px 10px black;
  border-bottom: 4px solid orange;
  box-shadow: 1px 1px 10px navy;
}


.vbelltodiv{
  display:none;width:50%;margin-left:15%;border-radius:20px;border:none;border-bottom:4px solid orange;box-shadow: 1px 1px 100px black;background:rgba(245,245,245,0.7);position:fixed;top:200px;z-index:1100;
}

@media screen and (min-width:2000px) {
  .tblsvbtn4{
  width:10%;
  margin-left:5%; }
  .vbelltodiv{
    width:40%;margin-left:30%; }
}

@media screen and (max-width:600px) {
  .tblcolorv{
    display:none;
  }
  .vbelltodiv{
    width:94%;margin-left:3%; }
}





.prdctimghvrv:hover{
  width:15rem !important;
  position: absolute;
  z-index:100;
  box-shadow: 1px 1px 300px black;

}

</style>







            <div style="display:flex;flex-direction:row;">
              <div class="tblsvbtn4 tabrcnt">
               <h5> Recent <i class="fa fa-table tblcolorv"> </i></h5>
               <hr>
              </div>
              <div class="tblsvbtn4 tabrtrn">
               <h5> return <i class="fa fa-table tblcolorv"> </i></h5>
               <hr>
              </div>
              <div class="tblsvbtn4 tabprog">
               <h5> In Prog.. <i class="fa fa-table tblcolorv"> </i></h5>
               <hr>
              </div>
              <div class="tblsvbtn4 tabdlvrd">
               <h5> Delivered <i class="fa fa-table tblcolorv"> </i></h5>
               <hr>
              </div>
            </div>


<br>
<br>
<br>
<br>









   
<div class="vbelltodiv" style="">
  <center><h3 style="color:#ff6600;text-shadow:1px 1px 1px black;" class="fa fa-bell"> Send Notification To Users </h3></center>
 <button class="fa fa-close float-end mb-2 vbelltoclsbtn" style="color:red; border:none;font-size: 1.2rem; border-left:10px solid white;background:none;">
 </button>
<div style="margin-left:2rem;"> To : <b style="color:lime; font-size:1rem; text-shadow:1px 1px 2px black; margin-left:0.5rem; letter-spacing:3px;" class="fa fa-user vusrbynodata"> 1234 </b> </div>
<input type="hidden" class="vusrbynodinpt" value=""> 
<textarea class="sendbeloftblsinpt" style="text-align:center; width:90%; margin-left:5%; color:rgb(255, 123, 0);height:10rem;outline:none; border:none;border-left:10px solid orange;border-right:10px solid orange; font-size:1.1rem; letter-spacing: 2px;" placeholder="Write Here"></textarea>
 <center>
 <button class="sendbeloftblsbtn" style="color:indigo;background:whitesmoke;box-shadow:1px 1px 6px silver; letter-spacing:4px;text-shadow:1px 1px 2px silver;margin-top:1rem;border: none; border-bottom:2px solid rgb(255, 115, 0); padding:4px;">
   Send 
 </button>
 </center>
 <br>
  </div>


















<!-- start here for Silver stars users -->
<div id="usrslistdiv" style="display:n;">
  

    <center><h3 class="" style="color:indigo;"> List Of All <b style="color:rgb(255, 174, 0); text-shadow:1px 1px 1px black;"> Orders </b> </u></h3>
   
  </center>
    <div style="width:35%; margin-right:5px;">
     <input type="search" style="border:none;border-bottom:4px solid orange; width:80%;outline:none; font-size:1.2rem;letter-spacing:2px;" class="serchusrinpt"> <button style="color:orange; font-size:1.2rem;text-shadow:1px 1px 2px black;background:none;border:none;" class="btn fa fa-search serchusrbtn"> </button>
    </div>

   <center>
  <div id="listtable">
     <!-- start here for Silver stars users -->
   <table class="silTable" id="sTab" style="width:180%;">
  <tbody class="vbandusrs">
    <tr class="sthead">
      <th>Order_id</th>
      <th> Name </th>
      <th> Email </th>
      <th> Phone No</th>
      <th> Inform </th>
      <th> Product_ </th>
      <th> Quantity </th>
      <th> Price </th>
      <th> Payments </th>
      <th> Transaction_Id </th>
      <th> [if.Pay.by.TR.id]</th>
      <th> Status </th>
      <th> Action </th>
      <th> Message </th>
      <th> Country </th>
      <th> City </th>
      <th> Adress_ </th>
      <th> Postal Code </th>
      <th> Order Time </th>
      <th>Ip Address</th>
      <th> Remove </th>
    </tr>
    </tbody>
    
    <tbody class="tablesvserch"> </tbody>
    <tbody class="tablesvall" id="topdftbl"> </tbody>
    <tbody class="tablesvrcnt"> </tbody>
    <tbody class="tablesvrtrn"> </tbody>
    <tbody class="tablesvprog"> </tbody>
    <tbody class="tablesvdlvrd"> </tbody>


       
       
       
       
       
       















  
  
</table> 
</div>
</div>



























<!----------this is a main name div last for end body -->
        </div>
    </div>
<!----------end this is a main name div last for end body -->

    


































































































































    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/jqoffline.js"></script>
    <script src="assets/js/chart.js"></script>
    <script>

 //////////////////////
  $(document).on('click','.vbelltobtn', function(){
  var beltxtto = $(this).data('beltxtto');
     
    $('.vusrbynodata').html(beltxtto);
    $('.vusrbynodinpt').val(beltxtto);
    $('.vbelltodiv').slideToggle();
  });
  $(document).on('click','.vbelltoclsbtn', function(){
    $('.vbelltodiv').hide(10);
  });
 //////////////////////

/////////////////////////////////
$(document).on('click','.tblsvbtn4',function(){
$(this).siblings().removeClass('tbldiv4actv');
$(this).addClass('tbldiv4actv');
});
//////////////////////////////////////////
//////////////////////////////////////////
    //////////// v lists of orders data 
//////////////////////////////////////////
//////////////////////////////////////////
  /*  ------ 1 Recent orders ------ */
//////////////////////////////////////////
function vallitmlstbl(){
    $.post(
      "datajaxo.php",
    {vallitmlstbljs:'akisjjdw'},
       function(vallitmlstblf){
  $('.tablesvall').html(vallitmlstblf);
      }); // end post
}
/////////////////////////////////////////
//////////////////////////////////////////
function vrcntablbtnf(){
    $.post(
      "datajaxo.php",
    {vrcntablbtnj:'akiwakfjenf'},
       function(vrcntablf){
     $('.tablesvrcnt').html(vrcntablf);
      }); // end post
}
/////////////////////////////////////////
//////////////////////////////////////////
function vrtrntablbtnf(){
    $.post(
      "datajaxo.php",
    {vrtrntablbtnj:'akiwufjenf'},
       function(vrtrntablbtn){
     $('.tablesvrtrn').html(vrtrntablbtn);
      }); // end post
}
/////////////////////////////////////////
//////////////////////////////////////////
function vinprogtablbtnf(){
    $.post(
      "datajaxo.php",
    {vinprogtablbtnf:'iz8sksfjenf'},
       function(vinprogtablbtn){
  $('.tablesvprog').html(vinprogtablbtn);
      }); // end post
}
/////////////////////////////////////////
//////////////////////////////////////////
function vdelivrdtablbtnf(){
    $.post(
      "datajaxo.php",
    {vdelivrdtablbtnj:'kwixijri'},
       function(vdelivrdtablbtn){
 $('.tablesvdlvrd').html(vdelivrdtablbtn);
      }); // end post
}
/////////////////////////////////////////
//////////////////////////////////////////
$(document).on('click','.serchusrbtn',function(){
  var srchvl = $('.serchusrinpt').val();
    $.post(
      "datajaxo.php",
    {vsrchtblstvlj:srchvl},
       function(vsrchtblstvlf){
 $('.tablesvserch').html(vsrchtblstvlf);
      }); // end post
});
/////////////////////////////////////////




/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
////// select buttons oprations //////
////// 1.
$(document).on("change",".paidueid",function(){
  var paidueid = $('option:selected',this).data('wheridp');
  var paidueslctval = $('option:selected',this).val();

      $.post(
      "datajaxo.php",
      {paidueslctvaljs:paidueslctval,paidueidjs:paidueid},
      function(pduef){
       if(pduef == 1){
        $(".grnalrt").fadeIn();
        $(".grnalrt").html('√  successfully updated'); 
        
var vsestabs = localStorage.getItem('sestab');
if(vsestabs == 'tabrcnt')
{  vrcntablbtnf();
}else if(vsestabs == 'tabrtrn'){
vrtrntablbtnf();
}else if(vsestabs == 'tabprog'){
vinprogtablbtnf();
}else if(vsestabs == 'tabdlvrd'){
vdelivrdtablbtnf();
}else{ vallitmlstbl(); }
        }else if(pduef == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      } hidpopup();   }); // end post
  });
/////////////
////// 2.

$(document).on("change",".actionid",function(){
  var actionid = $('option:selected',this).data('wherida');
  var actnfcitmval = $('option:selected',this).val();
      $.post(
      "datajaxo.php",
      {actnfcitmvaljs:actnfcitmval,actionidjs:actionid},
      function(citmsactnf){
       if(citmsactnf == 1){
        $(".grnalrt").fadeIn();
          $(".grnalrt").html('√  successfully updated'); 
var vsestabs = localStorage.getItem('sestab');
if(vsestabs == 'tabrcnt')
{  vrcntablbtnf();
}else if(vsestabs == 'tabrtrn'){
vrtrntablbtnf();
}else if(vsestabs == 'tabprog'){
vinprogtablbtnf();
}else if(vsestabs == 'tabdlvrd'){
vdelivrdtablbtnf();
}else{ vallitmlstbl(); }
        }else if(citmsactnf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      } hidpopup();   }); // end post
  });
////////////////
///////////////////////////////

$(document).on('click','.delitmidbtn',function(){
var delpostid = $(this).data("delitmid");
 alert(delpostid);
 $.post(
      "datajaxo.php",
      {delpostidjs:delpostid},
       function(delpostidf){
       if(delpostidf == 1){
        $(".grnalrt").fadeIn();
          $(".grnalrt").html('√  Deleted'); 
var vsestabs = localStorage.getItem('sestab');
if(vsestabs == 'tabrcnt')
{  vrcntablbtnf();
}else if(vsestabs == 'tabrtrn'){
vrtrntablbtnf();
}else if(vsestabs == 'tabprog'){
vinprogtablbtnf();
}else if(vsestabs == 'tabdlvrd'){
vdelivrdtablbtnf();
}else{ vallitmlstbl(); }

        }else if(delpostidf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      } hidpopup();   }); // end post
})
 ///////////////////////////////
///////////////////////////////



$(document).on('click','.sendbeloftblsbtn',function(){
var notifiyto = $('.vusrbynodinpt').val();
var notifiymsg = $('.sendbeloftblsinpt').val();

if(notifiyto =="" || notifiymsg =="")
{
 $('.redalrt').fadeIn();
 $(".redalrt").html('× Write Something');
}else{
 $.post(
      "datajaxo.php",
      {notifiytojs:notifiyto,notifiymsgj:notifiymsg},
       function(notifiytof){
       if(notifiytof == 1){
        $(".grnalrt").fadeIn();
          $(".grnalrt").html('√  Notification Send'); 
        $('.sendbeloftblsinpt').val("");
        }else if(notifiytof == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      } hidpopup();   }); // end post
} });
 ///////////////////////////////




















//////////////////////////////////////////
//////////////////////////////////////////
  ////////// end v lists of orders data 
//////////////////////////////////////////
//////////////////////////////////////////


/*
    tablesvserch
    tablesvall
    tablesvrcnt
    tablesvrtrn
    tablesvprog
    tablesvdlvrd
    
    tabrcnt
    tabrtrn
    tabprog
    tabdlvrd
vrcntablbtnf();
vrtrntablbtnf();
vinprogtablbtnf();
vdelivrdtablbtnf();

*/
$(document).on('click','.tabrcnt',function(){
  $('.tablesvrcnt').show();
  $('.tablesvall').hide();
  $('.tablesvrtrn').hide();
  $('.tablesvprog').hide();
  $('.tablesvdlvrd').hide();
   vrcntablbtnf();
localStorage.setItem('sestab','tabrcnt');
});

$(document).on('click','.tabrtrn',function(){
  $('.tablesvrcnt').hide();
  $('.tablesvall').hide();
  $('.tablesvrtrn').show();
  $('.tablesvprog').hide();
  $('.tablesvdlvrd').hide();
   vrtrntablbtnf();
localStorage.setItem('sestab','tabrtrn');
});
$(document).on('click','.tabprog',function(){
  $('.tablesvrcnt').hide();
  $('.tablesvall').hide();
  $('.tablesvrtrn').hide();
  $('.tablesvprog').show();
  $('.tablesvdlvrd').hide();
  vinprogtablbtnf();
localStorage.setItem('sestab','tabprog');
});
$(document).on('click','.tabdlvrd',function(){
  $('.tablesvrcnt').hide();
  $('.tablesvall').hide();
  $('.tablesvrtrn').hide();
  $('.tablesvprog').hide();
  $('.tablesvdlvrd').show();
  vdelivrdtablbtnf();
localStorage.setItem('sestab','tabdlvrd');
});







//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//// chart 
var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {

  type: "bar",
  data: {
    // Data Labels
    labels: ["Total pending", "Total return", "Total in progress" , " Total Delivered"],

    datasets: [
      // Data Set 1
      {
        //  Chart Label
        label: "performance",

        // Actual Data
        data: [<? echo $contrcnt; ?> , <? echo $conrtrn; ?>, <? echo $contprogrs; ?> , <? echo $contdlivrd; ?>],

        // Background Color
        backgroundColor: [
            "rgba(255, 230, 0, 0.16)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(0, 255, 98, 0.219)",
        ],

        // Border Color
        borderColor: [
            " rgb(255, 217, 0)",
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgb(0, 192, 74",
           ],

        // Border Width
        borderWidth: 1,
      },

    ],
  },

  options: {
 
    responsive: false,

    layout: {
      padding: {
        left: 10,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },

    tooltips: {
      enabled: true,
      backgroundColor: "black", // 
      titleFontFamily: "Comic Sans MS",
      titleFontSize: 15, // Set Tooltip Font Size
      titleFontStyle: "bold italic",
      titleFontColor: "yellow",
      titleAlign: "center",
      titleSpacing: 2,
      titleMarginBottom: 25,
      bodyFontFamily: "Comic Sans MS",
      bodyFontSize: 15,
      bodyFontStyle: "italic",
      bodyFontColor: "silver",
      bodyAlign: "center",
      bodySpacing: 3,
    },

    // Custom Chart Title
    title: {
      display: true,
      text: "statics Of Store",
      position: "bottom",
      fontSize: 15,
      fontFamily: "Comic Sans MS",
      fontColor: "indigo",
      fontStyle: "bold italic",
      padding: 4,
      lineHeight: 3,
    },

    // Legends Configuration
    legend: {
      display: true,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "navy",
        fontSize: 16,
        boxWidth: 20,
      },
    },

    animation: {
      duration: 7000,
      easing: "easeInOutBounce",
    },
  },
});
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
////// windows loads
  window.onload = vallitmlstbl();

    </script>
</body>

</html>