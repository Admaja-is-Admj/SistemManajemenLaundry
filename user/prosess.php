<?php
	include "../koneksi.php";
  $p=isset($_GET['act'])?$_GET['act']:null;
  switch($p){
    default:
    break;
    case "hapus":
      mysqli_query($conn,"DELETE FROM supplier WHERE id='$_GET[id]'");
      header('location:../index.php?p=olahs');
	  break;
    case "update":
      mysqli_query($conn,"UPDATE supplier SET nama='$_POST[nama]',alamat='$_POST[alamat]',telp='$_POST[telp]' WHERE id='$_POST[id]'");						 
      header('location:../index.php?p=olahs');  
	}
?>
      
      