<?php
$conn =  mysqli_connect("localhost","root","","database_laundry");
if (!$conn) {
    die('Koneksi Error: '.mysqli_connect_errno().'-'.
    mysqli_connect_error());
}
?>