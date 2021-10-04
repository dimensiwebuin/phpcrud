<?php
include 'koneksi.php';

// Cek apakah user sudah menekan tombol submit
if (isset($_POST['submit'])) {

  // Mengambil data dari form
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $status = $_POST['status'];

  // Insert data ke database
  mysqli_query($connect, "INSERT INTO member (nim,nama,jurusan,status)values('$nim', '$nama', '$jurusan', '$status')") or die(mysqli_error($connect));

  echo "<script>alert('Data berhasil disimpan.'); window.location='index.php';</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="container">
    <div class="d-flex my-3">
      <h3>Form Tambah Data</h3>
    </div>
    <div class="row">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" aria-label="Select example" id="status" name="status" required>
            <option selected>Pilih Status</option>
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
          </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>