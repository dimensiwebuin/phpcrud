<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "db_member"; // jika nama database berbeda, silahkan sesuaikan

// membuat koneksi dengan database dengan mysqli
$connect = mysqli_connect($server, $username, $password, $db);

// cek jika koneksi ke database bermasalah
if (mysqli_connect_errno()) {
  die(mysqli_connect_error());
}
