<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = $_POST['password'];


$query = mysqli_query($koneksi,
"SELECT * FROM user
WHERE username='$username' 
AND password='$password'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($query);

    $_SESSION['username'] = $username;
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['status'] = 'login';

    // cek role
    if ($data['role'] == "pengguna") {

        header("Location: pengguna/index.php");
    } else {

        header("Location: admin/index.php");

    }

} else {

    header("Location: index.php?pesan=gagal");

}
?>