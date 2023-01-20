


<?

include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}

unset($_SESSION['alertgreen']);
unset($_SESSION['alertred']);





/*
title
size 
price
uscriptimg
desc
slctctgry 

*/

if(isset($_POST['Uploadbtn']) )
{
$imgup = $_FILES['uscriptimg']['name'];
$imguptmp = $_FILES['uscriptimg']['tmp_name'];

 $title = mysqli_real_escape_string($db,$_POST['title']);
 $desc = mysqli_real_escape_string($db,$_POST['desc']);
 $price = mysqli_real_escape_string($db,$_POST['price']);
 $size = mysqli_real_escape_string($db,$_POST['size']);
 $slctctgry = mysqli_real_escape_string($db,$_POST['slctctgry']);

    // check for img or not Other Files

// if img is not empty check others validity to update

  
 $mbcheck1 = $_FILES['uscriptimg']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { $_SESSION['alrtred'] = 'image is greater then 10 MB '; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "../assetscdn/adminitems/".$imgup;
   move_uploaded_file($imguptmp, $folderimg);
   
    // To insert data uploaded
    $uploadto = "INSERT INTO `items_by_admin` (img, vtitle, vdesc, vprice, vsize , vcategory) VALUES ('$imgup','$title','$desc','$price','$size','$slctctgry')";
    
 $otherqry = mysqli_query($db,$uploadto) or die('not sql'.mysqli_error($db)) ;
     if($otherqry)
     { $_SESSION['alertgreen'] = 'Product uploaded √ '.$title;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
 // end of inserting other data 
   } // end else
  else{ $_SESSION['alrtred'] = 'This is not Images in jpg! jpeg! png! gif! svg!'; }
   // end of file  extension with all other data to uploads
}






















/*

etitle
edetails
eimglink
esize
eprice
eupdatebtn

*/




if(isset($_POST['eupdatebtn']))
{
$imgup = $_FILES['eimglink']['name'];
$imguptmp =$_FILES['eimglink']['tmp_name'];

 $etitle = mysqli_real_escape_string($db,$_POST['etitle']);
 $edetails = mysqli_real_escape_string($db,$_POST['edetails']);
 $esize = mysqli_real_escape_string($db,$_POST['esize']);
 $eprice = mysqli_real_escape_string($db,$_POST['eprice']);
 $eid = mysqli_real_escape_string($db,$_POST['eid']);
 
 
 
 
 
 
 
 $mbcheck1 = $_FILES['eimglink']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { $_SESSION['alrtred'] = 'image is greater then 10 MB '; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "../assetscdn/adminitems/".$imgup;
 move_uploaded_file($imguptmp, $folderimg);
//////
 if($imgup){
$eitemsql = "UPDATE `items_by_admin` SET `img`= '$imgup', vtitle = '$etitle', vdesc = '$edetails' , vprice = '$eprice', vsize = '$esize' WHERE id='$eid'";
 }else{
$eitemsql = "UPDATE `items_by_admin` SET  vtitle = '$etitle', vdesc = '$edetails' , vprice = '$eprice', vsize = '$esize' WHERE id='$eid'";
}
 $eitemsqlq = mysqli_query($db,$eitemsql) or die('not sql'.mysqli_error($db)) ;
     if($eitemsqlq)
     { $_SESSION['alertgreen'] = 'Product Updated √ '.$etitle;
     }else{ $_SESSION['alrtred'] = 'something Went Wrong';}
 // end of inserting other data 
   } // end else
  else{ $_SESSION['alrtred'] = 'This is not Images in jpg! jpeg! png! gif! svg!'; }
   // end of file  extension with all other data to uploads
}
////////////////////////////////////////
////////////////////////////////////////







































////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////

if(isset($_POST['vshoesbtn']))
{
   $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory LIKE 'mshoes' OR vcategory LIKE 'fshoes' ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
}else if(isset($_POST['vclothbtn'])){
   $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory LIKE 'mcloth' OR vcategory LIKE 'fcloth' ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
}else if(isset($_POST['vwatchesbtn'])){
   $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'watch' ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn); 
}else if(isset($_POST['velctricbtn'])){
   $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'electric' ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
}else if(isset($_POST['vsportsbtn'])){
   $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'sports' ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
}else if(isset($_POST['vjewlerybtn'])){
   $vitmbybtn = "SELECT * FROM `items_by_admin` WHERE vcategory = 'jewlery' ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
}else{
   $vitmbybtn = "SELECT * FROM `items_by_admin` ORDER BY id DESC";
  $vitmbybtnq = mysqli_query($db,$vitmbybtn);
}
////////////

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
  <img src="assets/imgs/<?  echo $v_stngsf['profile']; ?>">
                </div>
            </div>
<br>
<br>

            
            
            
            <!-- ======================= upload data ================== -->


<style>
    #uplodeditmsdiv{
        background:whitesmoke;box-shadow:1px 1px 20px silver;width:80%;margin-left:10%;border-radius:15px;;
    }
    @media screen and (min-width:2000px) {
        #uplodeditmsdiv{
       width:50%;margin-left:25%;border-radius:25px;
    }
    }
    #editpopupdiv{
        background:whitesmoke;box-shadow:1px 1px 20px silver;width:60%;margin-left:8%;border-radius:15px;
        box-shadow:2px 2px 200px black;
    }
    @media screen and (min-width:2000px) {
        #editpopupdiv{
       width:50%;margin-left:25%;border-radius:25px;
    }
    }
    @media screen and (max-width:600px) {
        #editpopupdiv{
       width:94%; margin-left:3%;
       margin-top:-5rem;
    }
    }





    .vitmsbtn:hover{
        width:19%;
        box-shadow:1px 1px 20px black;
        background:rgb(27, 27, 136);
        color:white;
        border-radius:5px;
        border-left:5px solid orange;
    }
    .vitmsbtn{
        width:17%;margin:2%;
        box-shadow:1px 1px 20px silver;
        border-radius:15px;
        border-left:4px solid indigo;
        padding:10px;
    }
    .boxitemsallv{
        width:19%; margin:1%; box-shadow:1px 1px 20px silver; background:whitesmoke;border-radius: 7px;
    }
    @media screen and (max-width:500px) {
        .boxitemsallv{
       width:31%;
    }
    .vitmsbtn{
        width:21%;margin:1%;
        padding:4px;
    }
    }
    .edithvrbtn{
       display: none; width:100%; background: rgba(0, 0, 0, 0.795); border-radius:5px 5px 0 0; position: relative;z-index:100;margin-top:-1.4rem;
    }
    .boxitemsallv:hover .edithvrbtn{
        display:block;
    }
    
    .getrimgv:hover{
        justify-content: center;
        width:9rem; max-height: 9rem;
        position:absolute;
        z-index:310;
        box-shadow:1px 1px 30px black;
        border-radius:15px;
    }
    .getrimgv{
        width:4rem; max-height: 4rem;
        border-radius:50%;
        box-shadow:1px 1px 10px silver;
        margin-bottom:-2.5rem;
        margin-left:1rem;
    }
    .breackv{
        display:none;
    }
  #uploditmrs{
    color:green; background: rgba(157, 190, 119, 0.315); font-size:2rem;border:none;border-left:10px solid green;margin-top:1rem; text-align:center; outline:none;width:78%;
  }

    @media screen and (max-width:500px) {
        .getrimgv:hover{
        margin-left:-5rem;
    }
    .vitmsbtn{
        width:31%;margin:1%;
        padding:4px;
    }
    .vitmsbtn:hover{
        width:31%;
       margin:1%;
    }
    .breackv{
        display:block;
    }
    #uploditmrs{
      width:60%;
  }
    }
</style>





<div id="uplodeditmsdiv">
<center> <h2 style="color:orange;"> <i class="fa fa-upload" style="color:orange;text-shadow:1px 1px 1px black;"> </i> Upload Products Items </h2></center>
<center>
  <form method="post" enctype="multipart/form-data">
    <label for="getrtitle" style="color:gray;"> 1. Title</label>
   <input type="text" name="title" placeholder="Product Title" style="border:none; border-left:6px solid orange;font-size:1.5rem;text-align:center;color:indigo; outline:none; background:rgb(247, 233, 229); width:78%; box-shadow: 1px 1px 5px silver;margin-top:1rem;" required=""><br>
   <label for="getrtitle" style="color:gray;"> 2. Details</label>
   <textarea name="desc" id="" cols="30" rows="10" style="border:none; border-left:6px solid orange;border-right: 6px solid orange; width:80%;margin-top:1rem;text-align: center;outline: none;font-size:1.2rem;letter-spacing:3px;" placeholder="About Products Item"></textarea><br>
   <label for="getrtitle" style="color:gray;"> 3. Image</label>
   <input type="file" name="uscriptimg" style="border:none; border-left:6px solid orange;font-size:1.5rem;text-align:center;color:indigo; outline:none; background:rgb(247, 233, 229); width:79%; box-shadow: 1px 1px 5px silver;margin-top:1rem;"><br>
   <label for="getrtitle" style="color:gray;"> 4. Price</label>
   <input type="number" name="price" id="uploditmrs" min="0" placeholder="R.S" required=""><br>
   <label for="getrtitle" style="color:gray;"> 5. Size</label>
   <input type="text" name="size" placeholder="Size" style="border:none; border-left:6px solid orange;font-size:1.5rem;text-align:center;color:indigo; outline:none; background:rgb(247, 233, 229); width:25%; box-shadow: 1px 1px 5px silver;margin-top:1rem;">
    <br class="breackv">
    
 

 <label for="slctctgry" style="width:30%;margin-left:5%;color:rgb(255, 102, 0);background:rgba(253, 231, 184, 0.918);"> Category :
    <select name="slctctgry" id="" style="color:green;background: rgb(231, 248, 231);"> 
        <option value="others"> Select </option>
        <option value="fcloth"> female cloth </option>
        <option value="mcloth"> male cloth </option>
        <option value="fshoes"> female Shoes </option>
        <option value="mshoes"> male Shoes </option>
        <option value="watch"> watch </option>
        <option value="electric"> Electronics </option>
        <option value="sports"> sports </option>
        <option value="jewlery"> jewlery </option>
      </select>
 </label>
<br>
<br>
<hr style="width:80%;">
<br>
<button type="submit" name="Uploadbtn" style="color:white;background:rgb(46, 46, 163);border:none;font-size:1.4rem;letter-spacing:3px;border-radius:20px;border-left:4px solid aqua;border-right: 4px solid aqua; padding:5px;box-shadow:1px 1px 10px black;outline:none;"> Upload Item </button>

  </form> 
</center>
</div>
<br>
<br>
<br>
            <!-- ======================= view Data ================== -->
  <hr>
  
  
  
  



<br>
<br>

<h1 style="color:rgb(29, 29, 136); margin-left:1rem;border-left:5px solid navy; padding:10px;"> View All Items  </h1>


<p style="color:gray;margin-left:2rem; letter-spacing:2px;" class="fa fa-eye"> View Uploaded Items Related Category</p>



<div style="width:90%;margin-left:5%;display:flex; flex-direction:row;
flex-wrap:wrap;">
<div class="vitmsbtn">
    <center>
    <h3> View Shoes Items </h3>
    <br>
    <form method="post">
        <button type="submit" name="vshoesbtn" style="color:white;border:none;border-bottom:4px solid silver;background:none; font-size:1rem;" value="vshoes">  View Only</button>
      </form>
     </center>
</div>
<div class="vitmsbtn">
    <center>
    <h3> View cloth Items </h3>
    <br>
    <form method="post">
        <button type="submit" name="vclothbtn" style="color:white;border:none;border-bottom:4px solid silver;background:none; font-size:1rem;" value="vcloth">  View Only</button>
      </form>
     </center>
</div>
<div class="vitmsbtn">
    <center>
    <h3> View jewlery Items </h3>
    <br>
    <form method="post">
        <button type="submit" name="vjewlerybtn" style="color:white;border:none;border-bottom:4px solid silver;background:none; font-size:1rem;" value="vjewlery"> View Only</button>
      </form>
     </center>
</div>
<div class="vitmsbtn">
    <center>
    <h3> View Electric Items </h3>
    <br>
    <form method="post">
        <button type="submit" name="velctricbtn" style="color:white;border:none;border-bottom:4px solid silver;background:none; font-size:1rem;" value="velectric"> View Only</button>
      </form>
     </center>
</div>
<div class="vitmsbtn">
    <center>
    <h3> View Sport Items </h3>
    <br>
    <form method="post">
        <button type="submit" name="vsportsbtn" style="color:white;border:none;border-bottom:4px solid silver;background:none; font-size:1rem;" value="vsports">  View Only</button>
      </form>
     </center>
</div>
<div class="vitmsbtn">
    <center>
    <h3> View Watches Items </h3>
    <br>
    <form method="post">
        <button type="submit" name="vwatchesbtn" style="color:white;border:none;border-bottom:4px solid silver;background:none; font-size:1rem;" value="vwatches "> View Only</button>
      </form>
     </center>
</div>

</div>

                      <!-- ======================= view popup for edit ================== -->

<div id="editpopupdiv" style="display:none; position:fixed;z-index:200;top:100px;">
<center> <h2 style="color:red;"> <i class="fa fa-edit" style="color:rgb(74, 74, 194);"> </i> Edit Products Items </h2></center>

<button class="fa fa-close popupclosbtn" style="color:red; border-right:4px solid rgb(153, 70, 85);background: none;border:none;font-size:1.2rem;margin-left:1rem;text-shadow:1px 1px 1px black;"> </button>


<center>
<form action="" method="post" enctype="multipart/form-data">
<label for="getrtitle" style="color:gray;"> 1. Title</label>
<input type="text" name="etitle" placeholder="Product Title" style="border:none; border-left:6px solid red;font-size:1.5rem;text-align:center;color:indigo; outline:none; background:rgb(247, 233, 229); width:78%; box-shadow: 1px 1px 5px silver;margin-top:1rem;" class="getrtitle"><br>
<label for="getrtitle" style="color:gray;"> 2. Details</label>
<textarea name="edetails" id="" cols="30" rows="10" style="border:none; border-left:6px solid red;border-right: 6px solid red; width:80%;margin-top:1rem;text-align: center;outline: none;font-size:1.2rem;letter-spacing:3px;" placeholder="About Products Item" class="getrdesc"></textarea> <br>
<p style="color:rgb(245, 107, 130);"> <i class="fas fa-warning" style="color:orange;"> </i> If need to change then choose Image other wise NOT</p>
<label for="getrtitle" style="color:gray;"> 3. Image</label>
<input type="file" name="eimglink" class="getrimgsrc" style="border:none; border-left:6px solid red;font-size:1.5rem;text-align:center;color:indigo; outline:none; background:rgb(247, 233, 229); width:79%; box-shadow: 1px 1px 5px silver;margin-top:1rem;"><br>
<label for="getrtitle" style="color:gray;"> 4. size</label>
<input type="text" name="esize" placeholder="Size" style="border:none; border-left:6px solid red;font-size:1.5rem;text-align:center;color:indigo; outline:none; background:rgb(247, 233, 229); width:25%; box-shadow: 1px 1px 5px silver;margin-top:1rem; margin-bottom:1rem;" class="getrsize"><br class="breackv">
<label for="getrtitle" style="color:gray;"> 5. old Image</label>
<img src="" class="getrimgv"><br>
<label for="getrtitle" style="color:gray;"> 6. Price</label>
<input type="number" name="eprice" id="" min="0" placeholder="Amounts in R.S" style="color:green; background: rgba(157, 190, 119, 0.315); font-size:2rem;border:none;border-left:10px solid green;margin-top:1rem; text-align:center; outline:none;width:78%;" class="getrprice">
<input type="hidden" name="eid" class="ctgrynam">


<br>
<br>
<hr style="width:80%;">
<br>
<button name="eupdatebtn" style="color:white;background:rgb(46, 46, 163);border:none;font-size:1.4rem;letter-spacing:3px;border-radius:20px;border-left:4px solid aqua;border-right: 4px solid aqua; padding:5px;box-shadow:1px 1px 10px black;outline:none;"> Update Item <i class="fa fa-edit"> </i></button>

</form> 
</center>
<br>
</div>












                      <!-- ======================= view Data  All ================== -->


<div style="width:98%;margin-left:1%;display:flex; flex-direction:row; flex-wrap:wrap;">


<?     
 while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
?>
    <div class="boxitemsallv">
       <img src="../assetscdn/adminitems/<? echo $vitmbyf['img']; ?>" style="width:90%;margin:4%;border-radius:10px;box-shadow:1px 1px 5px black;">
       <h3 style="color:indigo;border-bottom:1px solid silver;"> <? echo $vitmbyf['vtitle']; ?> </h3>
       <p style="color:gray; font-size:0.8rem;"> <? echo substr($vitmbyf['vdesc'],0,50); ?> </p>
       <div style="display:flex;flex-direction:row;">
        <div style="width:60%;text-align: left; color:orange;"> <i class="fa fa-history" style="color:silver;"> </i> <? echo substr($vitmbyf['time'],0,11); ?> </div>
        <div style="width:40%; text-align: right;color:green;"> RS. <? echo $vitmbyf['vprice']; ?>  </div>
       </div>

       <div class="edithvrbtn"> 
           <button style="width:30%;margin-left:5%; text-align: left; color:rgb(94, 148, 248); font-size:1.5rem;padding:5px; background:none;border:none;outline:none;" class="fa fa-edit" data-rtitle="<? echo $vitmbyf['vtitle']; ?>" data-rdesc
           ="<? echo $vitmbyf['vdesc']; ?>" data-rimgsrc="../assetscdn/adminitems/<? echo $vitmbyf['img']; ?>" data-rprice="<? echo $vitmbyf['vprice']; ?>" data-rsize="<? echo $vitmbyf['vsize']; ?>" data-ctgrynamj="<? echo $vitmbyf['id']; ?>">  </button>
           <a href="del.php?delid=<? echo $vitmbyf['id']; ?>" style="width:30%;margin-left:20%; text-align: right; color:rgb(250, 111, 111); font-size:1.5rem; float:end;padding:5px;outline:none;" class="fa fa-trash">  </a>
       </div>
    </div>


<? } ?>
</div>





























    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/jqoffline.js"></script>
    <script>
        /*
        popupclosbtn
editpopupdiv
    fa-edit

    rtitle
    rdesc
    rimgsrc
    rprice
    rsize

    getrtitle
    getrdesc
    getrimgsrc
    getrprice
    getrsize

      var fil = $('.getrimgsrc > input[type="file"]');
  fil.val(rimgsrcto);


    */

    $(document).on('click','.popupclosbtn',function(){
    $('#editpopupdiv').hide(10);
    });
    //////////////
    $(document).on('click','.fa-edit',function(){
        var rtitleto = $(this).data('rtitle');
        var rdescto = $(this).data('rdesc');
        var rimgsrcto = $(this).data('rimgsrc');
        var rpriceto = $(this).data('rprice');
        var rsizeto = $(this).data('rsize');
        var rctgrynto = $(this).data('ctgrynamj');

        
     $('.getrtitle').val(rtitleto);
     $('.getrdesc').val(rdescto);
     $('.getrprice').val(rpriceto);
     $('.getrsize').val(rsizeto); 
     $('.ctgrynam').val(rctgrynto); 
     $('.getrimgv').attr('src',rimgsrcto);

     $('#editpopupdiv').show();
    });
 
/////////////////////////
/* alertgreen
alertred
*/





    </script>








</body>

</html>