<?
include '../config.php';
session_start();
 error_reporting(0);
 
 
if(isset($_GET['delid']))
{
 $delid = mysqli_real_escape_string($db,$_GET['delid']);
  
  $delsql = "DELETE FROM items_by_admin WHERE id = $delid";
$delsqlq = mysqli_query($db,$delsql) or die('not sql'.mysqli_error($db)) ;
     if($delsqlq){
       header('location:items.php');
     }
}






?>