<?php
    require_once 'koneksi.php';
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $telp = $_POST['telp'];
    $gender = $_POST['gender'];
    $username =$_POST['Username'];
    $password = $_POST['Password'];

    if (empty($nama)) {
        header('location:register.php?error='.
        base64_encode('Nama tidak boleh kosong'));
    }
    else if (empty($alamat)) {
        header('location:register.php?error='.
        base64_encode('alamat tidak boleh kosong'));
    }
    else if (empty($telp)) {
        header('location:register.php?error='.
        base64_encode('no telepon tidak boleh kosong'));
    }
    else if (empty($gender)) {
        header('location:register.php?error='.
        base64_encode('Harap memilih gender'));
    }
    else if (empty($username)) {
        header('location:register.php?error='.
        base64_encode('Username tidak boleh kosong'));
    }
    else if (empty($password)) {
        header('location:register.php?error='.
        base64_encode('Password tidak boleh kosong'));
    }
    $level = 'Konsumen';
    $sql = "INSERT INTO pengguna (nama, alamat, telp, Username, Password, level)
    VALUES ('$depan','$belakang','$email','$username','$password','$level')";
    $insert = $conn->query($sql);
    if (!$insert) {
        echo "<script>alert('".$conn->error."');
        window.location.href='register.php';</script>";
    }else {
        echo "<script>alert('Insert data berhasil')
        window.location.href='login.php'</script>";
    }
?>