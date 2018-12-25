<?php
include "../koneksi.php";
$p=isset($_GET['act'])?$_GET['act']:null;
switch($p){
  default:
  break;
  case "hapus":
    mysqli_query($conn,"DELETE FROM pengguna WHERE id='$_GET[id]'");
    header('location:../index.php?p=olahk');
  break;
  case "update":
    mysqli_query($conn,"UPDATE pengguna SET nama='$_POST[nama]',alamat='$_POST[alamat]',telp='$_POST[telp]',gender='$_POST[gender]' WHERE id='$_POST[id]'");						 
    header('location:../index.php?p=olahk');  
}
?>
      