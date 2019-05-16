<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 
 $namamhs=$_POST['namamhs'];
 $nimmhs=$_POST['nimmhs'];
 $progdi=$_POST['progdi'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `uts` (`namamhs`,`nimmhs`,`progdi`,`alamat`) VALUES ('$namamhs','$nimmhs','$progdi','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>