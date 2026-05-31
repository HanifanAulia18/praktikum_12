<?php

include "koneksi.php";

$nama_lengkap = $_POST['nama_lengkap'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$confirm    = $_POST['confirm_password'];
$role       = $_POST['role'];

if ($password != $confirm) {
    echo "
    <script>
        alert('Password tidak sama!');
        window.location='register.php';
    </script>
    ";
    exit;
}

$query = mysqli_query($koneksi,
"INSERT INTO user (nama_lengkap, username, password, role)
VALUES ('$nama_lengkap','$username','$password','pengguna')");

if ($query) {
    echo "
    <script>
        alert('Register berhasil!');
        window.location='login.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Register gagal!');
        window.location='register.php';
    </script>
    ";
}
?>