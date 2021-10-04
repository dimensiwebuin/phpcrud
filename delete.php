<?php

include 'koneksi.php';

// Mengambil id/nim dari URL
$id = $_GET['id'];

// Menghapus data
mysqli_query($connect, "DELETE FROM member WHERE nim='$id'") or die(mysqli_error($connect));

// Redirect ke halaman index
echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
