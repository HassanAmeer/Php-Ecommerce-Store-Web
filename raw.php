 <?             
foreach($_SESSION['vsescrtqntty'] as $vqntty => $vqntrs)
  { $vcrtvaljs = $vqntrs['vitmsums'] ; }
 ?>             
  
  

  <script src="assetscdn/js/jqoffline.js"></script>
  <script>
  var crtinpttl = <? echo $vcrtvaljs ?>;
    $('#vcartvaladinpt').val(crtinpttl);
  </script>
  
  
  
 /* $_SESSION['vsescrtqntty'][0] = array('vitmcount'=>$pmbtncartvaljs,'vitmsums'=>$settlrscrt); */
 
 
 
 
 
  
  
  