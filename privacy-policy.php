



















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
$email = $v_stngsf['email'];
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
    a{
      color:orange !important;
    }
  </style>    
 <div style="width:80%;margin-left:10%;margin-top:20%;color:white;">
  <div>
    <h1>Privacy policy</h1>
  </div>

  <div class="<? echo $title; ?>-policy__body">
    <div class="rte">
        <p>This Privacy Policy describes how baigimpex-cd24.my<? echo $title; ?>.com (the “Site” or “we”) collects, uses, and discloses your Personal Information when you visit or make a purchase from the Site.</p>
<h1>Contact</h1>
<p>After reviewing this policy, if you have additional questions, want more information about our privacy practices, or would like to make a complaint, please contact us by e-mail at baigimpex3@gmail.com or by mail using the details provided below:</p>
<p>Pakistan</p>
<h1>Collecting Personal Information</h1>
<p>When you visit the Site, we collect certain information about your device, your interaction with the Site, and information necessary to process your purchases. We may also collect additional information if you contact us for customer support. In this Privacy Policy, we refer to any information about an identifiable individual (including the information below) as “Personal Information”. See the list below for more information about what Personal Information we collect and why.</p>
<ul>
<li><u>Device information</u></li>
<ul>
<li>
<strong>Purpose of collection:</strong> to load the Site accurately for you, and to perform analytics on Site usage to optimize our Site.</li>
<li>
<strong>Source of collection:</strong> Collected automatically when you access our Site using cookies, log files, web beacons, tags, or pixels <i>[ADD OR SUBTRACT ANY OTHER TRACKING TECHNOLOGIES USED]</i>.</li>
<li>
<strong>Disclosure for a business purpose:</strong> shared with our processor <? echo $title; ?> <i>[ADD ANY OTHER VENDORS WITH WHOM YOU SHARE THIS INFORMATION]</i>.</li>
<li>
<strong>Personal Information collected:</strong> version of web browser, IP address, time zone, cookie information, what sites or products you view, search terms, and how you interact with the Site <i>[ADD OR SUBTRACT ANY OTHER PERSONAL INFORMATION COLLECTED]</i>.</li>
</ul>
<li><u>Order information</u></li>
<ul>
<li>
<strong>Purpose of collection:</strong> to provide products or services to you to fulfill our contract, to process your payment information, arrange for shipping, and provide you with invoices and/or order confirmations, communicate with you, screen our orders for potential risk or fraud, and when in line with the preferences you have shared with us, provide you with information or advertising relating to our products or services.</li>
<li>
<strong>Source of collection:</strong> collected from you.</li>
<li>
<strong>Disclosure for a business purpose:</strong> shared with our processor <? echo $title; ?> <i>[ADD ANY OTHER VENDORS WITH WHOM YOU SHARE THIS INFORMATION. FOR EXAMPLE, SALES CHANNELS, PAYMENT GATEWAYS, SHIPPING AND FULFILLMENT APPS]</i>.</li>
<li>
<strong>Personal Information collected:</strong> name, billing address, shipping address, payment information (including credit card numbers <i>[INSERT ANY OTHER PAYMENT TYPES ACCEPTED]</i>), email address, and phone number.</li>
</ul>
<li><u>Customer support information</u></li>
<ul>
<li><strong>Purpose of collection:</strong></li>
<li><strong>Source of collection:</strong></li>
<li><strong>Disclosure for a business purpose:</strong></li>
<li>
<strong>Personal Information collected:</strong> <i>[INSERT ANY OTHER INFORMATION YOU COLLECT: OFFLINE DATA, PURCHASED MARKETING DATA/LISTS]</i>
</li>
<li>
<strong>Purpose of collection:</strong> to provide customer support.</li>
<li>
<strong>Source of collection:</strong> collected from you</li>
<li>
<strong>Disclosure for a business purpose:</strong> <i>[ADD ANY VENDORS USED TO PROVIDE CUSTOMER SUPPORT]</i>
</li>
<li>
<strong>Personal Information collected:</strong> <i>[ADD ANY MODIFICATIONS TO THE INFORMATION LISTED ABOVE OR ADDITIONAL INFORMATION AS NEED.]</i>
</li>
</ul>
</ul>
<p><i>[INSERT FOLLOWING SECTION IF AGE RESTRICTION IS REQUIRED]</i></p>
<h2>Minors</h2>
<p>The Site is not intended for individuals under the age of <i>[INSERT AGE]</i>. We do not intentionally collect Personal Information from children. If you are the parent or guardian and believe your child has provided us with Personal Information, please contact us at the address above to request deletion.</p>
<h1>Sharing Personal Information</h1>
<p>We share your Personal Information with service providers to help us provide our services and fulfill our contracts with you, as described above. For example:</p>
<ul>
<li>We use to power our online store. You can read more about how uses your Personal Information here: <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>.</li>
<li>We may share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise protect our rights.</li>
<li><i>[INSERT INFORMATION ABOUT OTHER SERVICE PROVIDERS]</i></li>
</ul>
<p><i>[INCLUDE FOLLOWING SECTION IF USING REMARKETING OR TARGETED ADVERTISING]</i></p>
<h1>Behavioural Advertising</h1>
<p>As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications we believe may be of interest to you. For example:</p>
<ul>
<li>
<i>[INSERT IF APPLICABLE]</i> We use Google Analytics to help us understand how our customers use the Site. You can read more about how Google uses your Personal Information here:<a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>. You can also opt-out of Google Analytics here: <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>.</li>
<li>
<i>[INSERT IF YOU USE A THIRD PARTY MARKETING APP THAT COLLECTS INFORMATION ABOUT BUYER ACTIVITY ON YOUR SITE]</i> We share information about your use of the Site, your purchases, and your interaction with our ads on other websites with our advertising partners. We collect and share some of this information directly with our advertising partners, and in some cases through the use of cookies or other similar technologies (which you may consent to, depending on your location).</li>
<li>
<i>[INSERT IF USING <? echo $title; ?> AUDIENCES]</i> We use <? echo $title; ?> Audiences to help us show ads on other websites with our advertising partners to buyers who made purchases with other <? echo $title; ?> merchants and who may also be interested in what we have to offer. We also share information about your use of the Site, your purchases, and the email address associated with your purchases with <? echo $title; ?> Audiences, through which other <? echo $title; ?> merchants may make offers you may be interested in.</li>
<li><i>[INSERT OTHER ADVERTISING SERVICES USED]</i></li>
</ul>
<p>For more information about how targeted advertising works, you can visit the Network Advertising Initiative’s (“NAI”) educational page at <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>.</p>
<p>You can opt out of targeted advertising by:</p>
<p><i>[INCLUDE OPT-OUT LINKS FROM WHICHEVER SERVICES BEING USED. COMMON LINKS INCLUDE:</i></p>
<i> </i><i>
<li>FACEBOOK - <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>
</li>
<li>GOOGLE - <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>
</li>
</i>
<ul>
<li><i>BING - <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>]</i></li>
</ul>
<p>Additionally, you can opt out of some of these services by visiting the Digital Advertising Alliance’s opt-out portal at: <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>.</p>
<h1>Using Personal Information</h1>
<p>We use your personal Information to provide our services to you, which includes: offering products for sale, processing payments, shipping and fulfillment of your order, and keeping you up to date on new products, services, and offers.</p>
<p><i>[INCLUDE THE FOLLOWING SECTION IF YOUR STORE IS LOCATED IN OR IF YOU HAVE CUSTOMERS IN EUROPE]</i></p>
<h2>Lawful basis</h2>
<p>Pursuant to the General Data Protection Regulation (“GDPR”), if you are a resident of the European Economic Area (“EEA”), we process your personal information under the following lawful bases:</p>
<p><i>[INCLUDE ALL THAT APPLY TO YOUR BUSINESS]</i></p>
<ul>
<li>Your consent;</li>
<li>The performance of the contract between you and the Site;</li>
<li>Compliance with our legal obligations;</li>
<li>To protect your vital interests;</li>
<li>To perform a task carried out in the public interest;</li>
<li>For our legitimate interests, which do not override your fundamental rights and freedoms.</li>
</ul>
<h2>Retention</h2>
<p>When you place an order through the Site, we will retain your Personal Information for our records unless and until you ask us to erase this information. For more information on your right of erasure, please see the ‘Your rights’ section below.</p>
<h2>Automatic decision-making</h2>
<p>If you are a resident of the EEA, you have the right to object to processing based solely on automated decision-making (which includes profiling), when that decision-making has a legal effect on you or otherwise significantly affects you.</p>
<p>We <i>[DO/DO NOT]</i> engage in fully automated decision-making that has a legal or otherwise significant effect using customer data.</p>
<p>Our processor <? echo $title; ?> uses limited automated decision-making to prevent fraud that does not have a legal or otherwise significant effect on you.</p>
<p>Services that include elements of automated decision-making include:</p>
<ul>
<li>Temporary blacklist of IP addresses associated with repeated failed transactions. This blacklist persists for a small number of hours.</li>
<li>Temporary blacklist of credit cards associated with blacklisted IP addresses. This blacklist persists for a small number of days.</li>
</ul>
<h1>Selling Personal Information</h1>
<p><i>[INCLUDE THIS SECTION IF YOUR BUSINESS IS SUBJECT TO THE CALIFORNIA CONSUMER PRIVACY ACT AND SELLS PERSONAL INFORMATION AS DEFINED BY THE CALIFORNIA CONSUMER PRIVACY ACT]</i></p>
<p>Our Site sells Personal Information, as defined by the California Consumer Privacy Act of 2018 (“CCPA”).</p>
<p><i>[Insert:</i></p>
<ul>
<li><i>categories of information sold;</i></li>
<li><i>IF USING <? echo $title; ?> AUDIENCES: information about your use of the Site, your purchases, and the email address associated with your purchase</i></li>
<li><i>instructions on how to opt-out of sale;</i></li>
<li><i>whether your business sells information of minors (under 16) and whether you obtain affirmative authorization;</i></li>
<li><i>if you provide a financial incentive to sell information, provide information about what that incentive is.]</i></li>
</ul>
<p>&nbsp;</p>
<h1>Your rights</h1>
<p><i>[INCLUDE FOLLOWING SECTION IF YOUR STORE IS LOCATED IN OR IF YOU HAVE CUSTOMERS IN EUROPE]</i></p>
<h2>GDPR</h2>
<p>If you are a resident of the EEA, you have the right to access the Personal Information we hold about you, to port it to a new service, and to ask that your Personal Information be corrected, updated, or erased. If you would like to exercise these rights, please contact us through the contact information above. <i>[OR INSERT ALTERNATIVE INSTRUCTIONS FOR SENDING ACCESS, ERASURE, CORRECTION, AND PORTABILITY REQUESTS]</i></p>
<p>Your Personal Information will be initially processed in Ireland and then will be transferred outside of Europe for storage and further processing, including to Canada and the United States. For more information on how data transfers comply with the GDPR, see <? echo $title; ?>’s GDPR Whitepaper:<a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>.</p>
<p><i>[INCLUDE FOLLOWING SECTION IF YOUR BUSINESS IS SUBJECT TO THE CALIFORNIA CONSUMER PRIVACY ACT]</i></p>
<h2>CCPA</h2>
<p>If you are a resident of California, you have the right to access the Personal Information we hold about you (also known as the ‘Right to Know’), to port it to a new service, and to ask that your Personal Information be corrected, updated, or erased. If you would like to exercise these rights, please contact us through the contact information above. <i>[OR INSERT ALTERNATIVE INSTRUCTIONS FOR SENDING ACCESS, ERASURE, CORRECTION, AND PORTABILITY REQUESTS]</i></p>
<p>If you would like to designate an authorized agent to submit these requests on your behalf, please contact us at the address above.</p>
<h1>Cookies</h1>
<p>A cookie is a small amount of information that’s downloaded to your computer or device when you visit our Site. We use a number of different cookies, including functional, performance, advertising, and social media or content cookies. Cookies make your browsing experience better by allowing the website to remember your actions and preferences (such as login and region selection). This means you don’t have to re-enter this information each time you return to the site or browse from one page to another. Cookies also provide information on how people use the website, for instance whether it’s their first time visiting or if they are a frequent visitor.</p>
<p>We use the following cookies to optimize your experience on our Site and to provide our services.</p>
<p><i>[Be sure to check this list against <? echo $title; ?>’s current list of cookies on the merchant storefront: <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a> ]</i></p>
<h2>Cookies Necessary for the Functioning of the Store</h2>

<style>
  th{
    color:orange !important;
  }
  td{color:silver !important;
  }
</style>



<div class="table-wrapper text-light">
<table>
<thead>
<tr>
<th><strong>Name</strong></th>
<th><strong>Function</strong></th>
<th><strong>Duration</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>_ab</td>
<td>Used in connection with access to admin.</td>
<td>2y</td>
</tr>
<tr>
<td>_secure_session_id</td>
<td>Used in connection with navigation through a storefront.</td>
<td>24h</td>
</tr>
<tr>
<td>_<? echo $title; ?>_country</td>
<td>Used in connection with checkout.</td>
<td>session</td>
</tr>
<tr>
<td>_<? echo $title; ?>_m</td>
<td>Used for managing customer privacy settings.</td>
<td>1y</td>
</tr>
<tr>
<td>_<? echo $title; ?>_tm</td>
<td>Used for managing customer privacy settings.</td>
<td>30min</td>
</tr>
<tr>
<td>_<? echo $title; ?>_tw</td>
<td>Used for managing customer privacy settings.</td>
<td>2w</td>
</tr>
<tr>
<td>_storefront_u</td>
<td>Used to facilitate updating customer account information.</td>
<td>1min</td>
</tr>
<tr>
<td>_tracking_consent</td>
<td>Tracking preferences.</td>
<td>1y</td>
</tr>
<tr>
<td>c</td>
<td>Used in connection with checkout.</td>
<td>1y</td>
</tr>
<tr>
<td>cart</td>
<td>Used in connection with shopping cart.</td>
<td>2w</td>
</tr>
<tr>
<td>cart_currency</td>
<td>Used in connection with shopping cart.</td>
<td>2w</td>
</tr>
<tr>
<td>cart_sig</td>
<td>Used in connection with checkout.</td>
<td>2w</td>
</tr>
<tr>
<td>cart_ts</td>
<td>Used in connection with checkout.</td>
<td>2w</td>
</tr>
<tr>
<td>cart_ver</td>
<td>Used in connection with shopping cart.</td>
<td>2w</td>
</tr>
<tr>
<td>checkout</td>
<td>Used in connection with checkout.</td>
<td>4w</td>
</tr>
<tr>
<td>checkout_token</td>
<td>Used in connection with checkout.</td>
<td>1y</td>
</tr>
<tr>
<td>dynamic_checkout_shown_on_cart</td>
<td>Used in connection with checkout.</td>
<td>30min</td>
</tr>
<tr>
<td>hide_<? echo $title; ?>_pay_for_checkout</td>
<td>Used in connection with checkout.</td>
<td>session</td>
</tr>
<tr>
<td>keep_alive</td>
<td>Used in connection with buyer localization.</td>
<td>2w</td>
</tr>
<tr>
<td>master_device_id</td>
<td>Used in connection with merchant login.</td>
<td>2y</td>
</tr>
<tr>
<td>previous_step</td>
<td>Used in connection with checkout.</td>
<td>1y</td>
</tr>
<tr>
<td>remember_me</td>
<td>Used in connection with checkout.</td>
<td>1y</td>
</tr>
<tr>
<td>secure_customer_sig</td>
<td>Used in connection with customer login.</td>
<td>20y</td>
</tr>
<tr>
<td><? echo $title; ?>_pay</td>
<td>Used in connection with checkout.</td>
<td>1y</td>
</tr>
<tr>
<td><? echo $title; ?>_pay_redirect</td>
<td>Used in connection with checkout.</td>
<td>30 minutes, 3w or 1y depending on value</td>
</tr>
<tr>
<td>storefront_digest</td>
<td>Used in connection with customer login.</td>
<td>2y</td>
</tr>
<tr>
<td>tracked_start_checkout</td>
<td>Used in connection with checkout.</td>
<td>1y</td>
</tr>
<tr>
<td>checkout_one_experiment</td>
<td>Used in connection with checkout.</td>
<td>session</td>
</tr>
</tbody>
</table></div>
<h2>Reporting and Analytics</h2>
<div class="table-wrapper"><table>
<thead>
<tr>
<th><strong>Name</strong></th>
<th><strong>Function</strong></th>
<th><strong>Duration</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>_landing_page</td>
<td>Track landing pages.</td>
<td>2w</td>
</tr>
<tr>
<td>_orig_referrer</td>
<td>Track landing pages.</td>
<td>2w</td>
</tr>
<tr>
<td>_s</td>
<td><? echo $title; ?> analytics.</td>
<td>30min</td>
</tr>
<tr>
<td>_<? echo $title; ?>_d</td>
<td><? echo $title; ?> analytics.</td>
<td>session</td>
</tr>
<tr>
<td>_<? echo $title; ?>_s</td>
<td><? echo $title; ?> analytics.</td>
<td>30min</td>
</tr>
<tr>
<td>_<? echo $title; ?>_sa_p</td>
<td><? echo $title; ?> analytics relating to marketing &amp; referrals.</td>
<td>30min</td>
</tr>
<tr>
<td>_<? echo $title; ?>_sa_t</td>
<td><? echo $title; ?> analytics relating to marketing &amp; referrals.</td>
<td>30min</td>
</tr>
<tr>
<td>_<? echo $title; ?>_y</td>
<td><? echo $title; ?> analytics.</td>
<td>1y</td>
</tr>
<tr>
<td>_y</td>
<td><? echo $title; ?> analytics.</td>
<td>1y</td>
</tr>
<tr>
<td>_<? echo $title; ?>_evids</td>
<td><? echo $title; ?> analytics.</td>
<td>session</td>
</tr>
<tr>
<td>_<? echo $title; ?>_ga</td>
<td><? echo $title; ?> and Google Analytics.</td>
<td>session</td>
</tr>
</tbody>
</table></div>
<p><i>[INSERT OTHER COOKIES OR TRACKING TECHNOLOGIES THAT YOU USE]</i></p>
<p>The length of time that a cookie remains on your computer or mobile device depends on whether it is a “persistent” or “session” cookie. Session cookies last until you stop browsing and persistent cookies last until they expire or are deleted. Most of the cookies we use are persistent and will expire between 30 minutes and two years from the date they are downloaded to your device.</p>
<p>You can control and manage cookies in various ways. Please keep in mind that removing or blocking cookies can negatively impact your user experience and parts of our website may no longer be fully accessible.</p>
<p>Most browsers automatically accept cookies, but you can choose whether or not to accept cookies through your browser controls, often found in your browser’s “Tools” or “Preferences” menu. For more information on how to modify your browser settings or how to block, manage or filter cookies can be found in your browser’s help file or through such sites as: <a href="<? echo $_SERVER['HTTP_HOST']; ?>" target="_blank">https:<? echo $_SERVER['HTTP_HOST']; ?></a>.</p>
<p>Additionally, please note that blocking cookies may not completely prevent how we share information with third parties such as our advertising partners. To exercise your rights or opt-out of certain uses of your information by these parties, please follow the instructions in the “Behavioural Advertising” section above.</p>
<h2>Do Not Track</h2>
<p>Please note that because there is no consistent industry understanding of how to respond to “Do Not Track” signals, we do not alter our data collection and usage practices when we detect such a signal from your browser.</p>
<h1>Changes</h1>
<p>We may update this Privacy Policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal, or regulatory reasons.</p>
<h1>Complaints</h1>
<p>As noted above, if you would like to make a complaint, please contact us by e-mail or by mail using the details provided under “Contact” above.</p>
<p>If you are not satisfied with our response to your complaint, you have the right to lodge your complaint with the relevant data protection authority. You can contact your local data protection authority, or our supervisory authority here: <i>[Add contact information or website for the data protection authority in your jurisdiction. For example: <a href="contact-us.php" target="_blank"> contact-us page Click him </a></i></p>
<p>Last updated: <i>[Date]</i></p>
    </div>
  </div>
</div>
 </div>












<div style="margin-top:30%;">
<? include 'footer.php'; ?>
</div>

 <script src="assetscdn/js/jqoffline.js"></script>
  <script>





  </script>
  </body></html>
  
  
  
  