
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
header("Content-Type: application/json");

include 'config.php';
 error_reporting(0);
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

$getresp = array();
$vitmbybtn = "SELECT * FROM `items_by_admin` ORDER BY id DESC";
$vitmbybtnq = mysqli_query($db,$vitmbybtn);
while($vitmbyf= mysqli_fetch_assoc($vitmbybtnq)){
        array_push($getresp,array(
            'id' => $vitmbyf['id'],
            'img' => $vitmbyf['img'],
            'title' => $vitmbyf['vtitle'],
            'desc' => $vitmbyf['vdesc'],
            'price' => $vitmbyf['vprice'],
            'size' => $vitmbyf['vsize'],
            'time' => $vitmbyf['time'],
            'catg' => $vitmbyf['vcategory'],
        
        ));
}

 echo json_encode($getresp);

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

 ?>





















