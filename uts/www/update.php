<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];    
 $namamhs=$_POST['namamhs'];
 $nimmhs=$_POST['nimmhs'];
 $progdi=$_POST['progdi'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"UPDATE `uts` SET `namamhs`='$namamhs',`nimmhs`='$nimmhs',`progdi`='$progdi',`alamat`='$alamat' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>