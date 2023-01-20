


<?php

include 'config.php';
session_start();
 error_reporting(0);
 
 /*
 if(!isset($_SESSION['vsescartlst']))
 { header('location:index.php'); }
 if(!isset($_SESSION['vsescrtqntty']))
 { header('location:index.php'); }
 */

if(isset($_POST['shipingbtn']))
{
  $phoneval = mysqli_real_escape_string($db,$_POST['phoneval']);
  $mailval = mysqli_real_escape_string($db,$_POST['mailval']);
  $copncod = mysqli_real_escape_string($db,$_POST['copncode']);
  $copncode = trim(strtolower($copncod));
  
  $shipadrs = mysqli_real_escape_string($db,$_POST['shipaddrs']);
  $shipaddrs = trim(strtolower($shipadrs));
  
  $fname = mysqli_real_escape_string($db,$_POST['fname']);
  $cityval = mysqli_real_escape_string($db,$_POST['cityval']);
  $addressval = mysqli_real_escape_string($db,$_POST['addressval']);
  $postlcode = mysqli_real_escape_string($db,$_POST['postlcode']);
  $cmsg = mysqli_real_escape_string($db,$_POST['cmsg']);
  $csize = mysqli_real_escape_string($db,$_POST['csize']);
 //////
 foreach($_SESSION['vsescartlst'] as $vinloop => $vinlop)
  { 
     $vtitle = $vinlop['vtitle'];
     $svitmimg = $vinlop['vitmimg'];
     $svitmdesc = $vinlop['vitmdesc'];
     $vitmprice = $vinlop['vitmprice'];
     $vitmsiz = $vinlop['vitmsiz'];
  }
 foreach($_SESSION['vsescrtqntty'] as $vinloopq => $vinlopqnty)
  { 
     $vitmcount = $vinlopqnty['vitmcount'];
     $vitmsums = $vinlopqnty['vitmsums'];
  }
 /////
  $timbns = time();
  setcookie('bytrid',$timbns,time() + 86400,'/');
  setcookie('bymail',$mailval,time() + 186400,'/');
  
$vochrcod = "SELECT * FROM `vochercode`";
  $vochrcodq = mysqli_query($db,$vochrcod);
$vochrcodf= mysqli_fetch_assoc($vochrcodq);
 if($vochrcodf['vcode'] == $copncode)
 { 
   if($vochrcodf['vexpired'] > $timbns)
   { $lessrs = $vochrcodf['vpercentage'];
   }else{  $lessrs = 0;  }
 }else{
   $lessrs = 0;
 }
 
 //////////
 
$vcountry = "SELECT * FROM `shipping_tax`";
  $vcountryq = mysqli_query($db,$vcountry);
$vcountryf= mysqli_fetch_assoc($vcountryq);
 
  if($vcountryf['vcountry'] == $shipaddrs)
  { $ttltaxrs = $vcountryf['vtax'];
  }else{
    $ttltaxrs = $vcountryf['othertax'];
  }
/////////////////
 echo $adcopnbns = $vitmsums / 100 * $lessrs;
    $withcpnbns   = $vitmsums - $adcopnbns;
    $vttlallrs = $withcpnbns + $ttltaxrs;

    $ipadrs = $_SERVER['REMOTE_ADDR'];



 $vcodejsql = "INSERT INTO `waiting_orders` (orderid,cphone, cemail,cname,item_name,item_img,item_size,item_price,item_quantity,total_price,cmsg,country,city,postal_code,address,ip_address) VALUES ('$timbns','$phoneval'
 ,'$mailval','$fname','$vtitle','$svitmimg','$csize','$vitmprice','$vitmcount','$vttlallrs','$cmsg','$shipaddrs'
 ,'$cityval','$postlcode','$addressval','$ipadrs')";
 $vcodejq = mysqli_query($db,$vcodejsql) or die('not sql'.mysqli_error($db));
   if($vcodejq)
   {
$vpaypag = "SELECT vpay_page FROM `store_stngs`";
$vpaypagq = mysqli_query($db,$vpaypag);
$vpaypagf= mysqli_fetch_assoc($vpaypagq);
  if($vpaypagf['vpay_page'] == 'bytrid')
  {  header('location:paybytr.php'); }else
  {  header('location:pay.php'); }
   }else{ echo 'try second time'; }

 }







/*

phoneval
mailval

copncode

shipaddrs
fname
lname
cityval
addressval
postlcode
cmsg
csize

shipingbtn

*/


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assetscdn/favicon.png" type="image/png">
    <title> Fill Information </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    <style>
      #vsummary{
        display:flex;flex-direction:row;width:60%;border: none;border-bottom:1px solid silver;border-top:1px solid silver;background:rgb(251, 250, 250);
      }
      #inptwidthdiv{
        width:60%;
      }
      #exampleFormControlInput1:hover{
        border:2px solid black;
      }
#vallcart{
  width:40%;
}
#vcartimg{
  display:flex;flex-direction:row;width:100%;
}
      /*****************/
      @media screen and (min-width:600px) {
        #vallcart{
         width:40%; float:right;
        }
      }

      /*****************/
      @media screen and (max-width:600px) {
        #vsummary{
          width:100%;
        }
        #inptwidthdiv{
        width:90%; margin-left:5%;
      }
      #vallcart{
      width:100%;
      }
      }
    </style>



<?

 foreach($_SESSION['vsescartlst'] as $vinloop => $vinlop)
  { 
     $vtitle = $vinlop['vtitle'];
     $svitmimg = $vinlop['vitmimg'];
     $svitmdesc = $vinlop['vitmdesc'];
     $vitmprice = $vinlop['vitmprice'];
     $vitmsiz = $vinlop['vitmsiz'];
     $vctgry = $vinlop['sesctgry'];
  }

/////////
 foreach($_SESSION['vsescrtqntty'] as $vinloopq => $vinlopqnty)
  { 
     $vitmcount = $vinlopqnty['vitmcount'];
     $vitmsums = $vinlopqnty['vitmsums'];
  }


?>

    <h1 style="color:orange;"> Mahar Store </h1>
    <div id="vsummary">
        <div style="width:65%; padding:11px;">
           <b class="fa fa-cart-plus vhidsnrybtn" style="letter-spacing:3px;"> Order Summary <i class="fa fa-angle-up anglesv"> </i> <i class="fa fa-angle-down anglesv" style="display:none;"> </i></b>
        </div>
        <div style="width:34%;padding:11px;font-size:1.4rem;">
            <b> Rs. <? echo $vitmsums; ?></b>
        </div>
    </div>






































<!-- start for pc img cart -->
<div id="vallcart">

<div id="vcartimg">
  <div style="width:25%;">
    <div class="position-relative" style="width:85%; margin:2%;">
      <img src="assetscdn/adminitems/<? echo $svitmimg; ?>" style="width:99%;border-radius:5px; box-shadow:1px 1px 10px gray;">
      <span class="position-absolute top-0 start-10 translate-middle badge rounded-pill" style="background:rgba(0, 0, 0, 0.721); color:orange;">
        <? echo $vitmcount; ?>+
     </span>
    </div>
   </div>
   <div style="width:50%;">
    <p style="color:gray;"> <? echo $svitmdesc; ?></p>
    <u style="color:rgb(141, 131, 131);">Available Size:</u> <b style="color:black;"><? echo $vitmsiz; ?></b>

    <input type="number" class="form-control form-label shadow-none getcsize" oninput="sendsizval()" id="exampleFormControlInput1" placeholder="Size" style="width:30%;" value="7">

   </div>
   <div style="width:25%;text-align: center;">
    <b style="color:black;font-size:1.6rem;"> Rs. <? echo $vitmprice; ?> </b> 
    <img src="https://chart.apis.google.com/chart?cht=qr&chs=90x90&chl=<? $_SERVER['HTTP_HOST'].'/vproducts.php?ctgry='.$vctgry; ?>">
   </div>
</div>

<div style="width:90%;border-top:1px solid silver;padding:2px;  display: flex;
justify-content: space-between;">
 <p style="color:gray;"> Sub Total: </p><b style="color:black;"> Rs. <? echo $vitmsums; ?> </b>
</div>
<div style="width:90%;border-bottom:1px solid silver;padding:2px;  display: flex;
justify-content: space-between;">
 <p style="color:gray;"> Shiping Charges : </p><p style="color:gray;"> next Step </p>
</div>
<div style="width:90%;padding:2px;  display: flex;
justify-content: space-between;">
<p style="color:gray; font-size:1.4rem;"> Total : </p><b style="color:black; font-size:2rem;"> Rs. <? echo $vitmsums; ?> </b>
</div>

</div>
<!-- end for pc img cart -->












    <div id="inptwidthdiv">
      <br>
      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); padding:6px;" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a style="color:black;text-decoration:none;" href="/"> Information </a></li>
          <li class="breadcrumb-item active" aria-current="page"> Payments </li>
          <li class="breadcrumb-item active" aria-current="page"> Shipping </li>
        </ol>
      </nav>

     <form method="post"> 
      <div class="" style="max-width:90%;width:90%;margin:5%;">
        <label for="exampleFormControlInput1" class="form-label shadow-none" style="color:black; font-style: bold;font-size:1.2rem;"> Contact Information </label>
        <input type="number" name="phoneval" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="Phone Number">
        <input type="email" name="mailval" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="Email address" required>
        <div style="display:flex;flex-direction:row;">
          <input type="checkbox" style="margin-top:1px;color:black !important; background:black;"> <p style="color:gray;margin-left:15px;" required>Email me With News And Others </p>
         </div>
      </div>

      <div class="" style="max-width:90%;width:90%;margin:5%;">
        <label for="exampleFormControlInput1" class="form-label shadow-none" style="color:black; font-style: bold;font-size:1.2rem;"> Coupon Code </label>
        <input type="text" name="copncode" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder=" Coupon Code">
      </div>

      <div class="" style="max-width:90%;width:90%;margin:5%;">
        <label for="exampleFormControlInput1" class="form-label shadow-none" style="color:black; font-style: bold;font-size:1.2rem;"> Shiping Adress </label>
        <br>
       

        





<!-- countyry code list -->
        <select name="shipaddrs" style="width:100%;border:1px solid silver;border-radius:5px;padding:8px;" required>

          <option value="Pakistan"> Country </option>
          <option value="Pakistan">Pakistan</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Åland Islands">Åland Islands</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antarctica">Antarctica</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Bouvet Island">Bouvet Island</option>
          <option value="Brazil">Brazil</option>
          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
          <option value="Brunei Darussalam">Brunei Darussalam</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Central African Republic">Central African Republic</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Christmas Island">Christmas Island</option>
          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
          <option value="Colombia">Colombia</option>
          <option value="Comoros">Comoros</option>
          <option value="Congo">Congo</option>
          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cote D'ivoire">Cote D'ivoire</option>
          <option value="Croatia">Croatia</option>
          <option value="Cuba">Cuba</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Equatorial Guinea">Equatorial Guinea</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="French Southern Territories">French Southern Territories</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guernsey">Guernsey</option>
          <option value="Guinea">Guinea</option>
          <option value="Guinea-bissau">Guinea-bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Isle of Man">Isle of Man</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jersey">Jersey</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>
          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
          <option value="Korea, Republic of">Korea, Republic of</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macao">Macao</option>
          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mayotte">Mayotte</option>
          <option value="Mexico">Mexico</option>
          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
          <option value="Moldova, Republic of">Moldova, Republic of</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montenegro">Montenegro</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Myanmar">Myanmar</option>
          <option value="Namibia">Namibia</option>
          <option value="Nauru">Nauru</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="Netherlands Antilles">Netherlands Antilles</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Niue">Niue</option>
          <option value="Norfolk Island">Norfolk Island</option>
          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Palau">Palau</option>
          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Pitcairn">Pitcairn</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Reunion">Reunion</option>
          <option value="Romania">Romania</option>
          <option value="Russian Federation">Russian Federation</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Saint Helena">Saint Helena</option>
          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="Saint Lucia">Saint Lucia</option>
          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
          <option value="Samoa">Samoa</option>
          <option value="San Marino">San Marino</option>
          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Serbia">Serbia</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="Somalia">Somalia</option>
          <option value="South Africa">South Africa</option>
          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
          <option value="Spain">Spain</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
          <option value="Thailand">Thailand</option>
          <option value="Timor-leste">Timor-leste</option>
          <option value="Togo">Togo</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Viet Nam">Viet Nam</option>
          <option value="Virgin Islands, British">Virgin Islands, British</option>
          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
          <option value="Wallis and Futuna">Wallis and Futuna</option>
          <option value="Western Sahara">Western Sahara</option>
          <option value="Yemen">Yemen</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>

        </select><br><br>
<!-- country code list -->










        <input type="text" name="fname" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="First Name" required="">
        <input type="text" name="lname" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="Last Name (optional)">
        <input type="text" name="cityval" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="City">
        <input type="text" name="addressval" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="Adddress">
        <input type="text" name="postlcode" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="Postal Code" required="">
        <div style="display:flex;flex-direction:row;">
          <input type="checkbox" style="margin-top:1px;color:black !important; background:black;"> <p style="color:gray;margin-left:15px;">Save This Information For Next </p>
         </div>
         <textarea name="cmsg" class="form-control form-label shadow-none"id="exampleFormControlInput1" placeholder="Give Message (optional)"></textarea>
               
          <input type="hidden" name="csize" class="itscsize">
      
         <button type="submit" name="shipingbtn" style="background:black;border-radius:5px;color:rgb(255, 255, 255);width:100%;padding:10px"> Continue Shiping </button>
      </div>
    </form>




<b class="errormsg" style="border-radius:10px;box-shadow:1px 1px 10px silver;padding:10px; background:rgba(0,0,0,0.575);color:pink;position:fixed;top:100px;z-index:100;">
 Choose Size 
</b>































































































<!-- list of inputs end down -->
    </div>
<br>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="assetscdn/js/jqoffline.js"></script>
    <script>
   
   $(document).on('click','#vsummary', function(){
      $('#vallcart').slideToggle();
      $('.anglesv').slideToggle();

   });
  function sendsizval(){
    var getcsize = $('.getcsize').val();
   $('.itscsize').val(getcsize);
   $('.errormsg').hide(10);
  }

   








    </script>
  </body>
</html>