<?php 
session_start();
require_once ('koneksi.php');
$user = $_POST['Username'];
$pass     = $_POST['Password'];
$cekuser = mysqli_query($conn,"SELECT * FROM pengguna WHERE Username = '$user'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);
if ( $jumlah == 0 ) {
	header('location:login.php?userfail');
} else {
    if ( $pass <> $hasil['Password'] ) {
		header('location:login.php?passwordfail');
    } else {
        $_SESSION['Username'] = $user;
        header('location:index.php');
    }
}
?>