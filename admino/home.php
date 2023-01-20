
<?php
include '../config.php';
session_start();
 error_reporting(0);

if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}
unset($_SESSION['alertgreen']);
unset($_SESSION['alertred']);


$totlordrs = mysqli_query($db,"SELECT count(id) as totlordrs FROM c_orders");
$totlordrsf=mysqli_fetch_assoc($totlordrs);
$totlordrs = $totlordrsf['totlordrs'];

$totldlivrds = mysqli_query($db,"SELECT count(shipping_statues) as totldlivrd FROM c_orders WHERE shipping_statues = 'Delivered'");
$totldlivrdsf=mysqli_fetch_assoc($totldlivrds);
$totldlivrd = $totldlivrdsf['totldlivrd'];

$totlerning = mysqli_query($db,"SELECT sum(total_price) as totlerning FROM c_orders WHERE shipping_statues = 'Delivered'");
$totlerningf=mysqli_fetch_assoc($totlerning);
$totlerning = $totlerningf['totlerning'];














$v_stngs = "SELECT * FROM `store_stngs` WHERE id = 1";
$v_stngsq =mysqli_query($db,$v_stngs);
$v_stngsf = mysqli_fetch_array($v_stngsq);
$t_visitor = $v_stngsf['t_visitor'];
$title = $v_stngsf['ntitle'];
$profile = $v_stngsf['profile'];


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
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><? echo $t_visitor; ?></div>
                        <div class="cardName">Total Visitors</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?echo $totlordrs; ?></div>
                        <div class="cardName">Orders</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>







                <div class="card">
                    <div>
                        <div class="numbers"><? echo $totldlivrd; ?></div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">Rs. <? echo $totlerning; ?></div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
<div class="details">
<div class="recentOrders">
    <div class="cardHeader">
        <h2>Recent Orders</h2>
        <a href="orderlists.php" class="btn">View All</a>
    </div>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Payment</td>
                <td>Status</td>
            </tr>
        </thead>
     <tbody>
<?                      
 $vrcntablbtn = "SELECT * FROM `c_orders`   ORDER BY id DESC LIMIT 8";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){ 
 ?>
  <tr>
      <td><? echo $vrcntbltab['item_name']; ?></td>
      <td><? echo $vrcntbltab['total_price']; ?></td>
      <td><? echo $vrcntbltab['payments_paid']; ?></td>
      <td><span class="status 
<? if($vrcntbltab['shipping_statues'] == 'Delivered'){ echo 'delivered'; }else if($vrcntbltab['shipping_statues'] == 'InProgress'){ echo 'inProgress'; }else if($vrcntbltab['shipping_statues'] == 'Return'){ echo 'return'; }else if ($vrcntbltab['shipping_statues'] == 'Recent'){ echo 'pending'; } ?>">
        
   <? echo $vrcntbltab['shipping_statues']; ?></span></td>
  </tr>
<? } ?>

     </tbody>
  </table>
</div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
<?                      
 $vrcntablbtn = "SELECT * FROM `c_orders`   ORDER BY id DESC LIMIT 8";
 $vrcntablbtnq = mysqli_query($db,$vrcntablbtn);
 while($vrcntbltab= mysqli_fetch_assoc($vrcntablbtnq)){ 
 ?>
<tr>
<td width="60px">
<div class="imgBx"><img src="assets/imgs/profimg.png" alt=""></div>
</td>
<td>
<h4><? echo $vrcntbltab['cname']; ?> <br> <span><? echo $vrcntbltab['country']; ?></span></h4>
</td>
</tr>
<? } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>