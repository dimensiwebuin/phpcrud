<?php
include 'koneksi.php';

// Mengambil id dari URL
$id = $_GET['id'];

// Menampilkan data berdasarkan ID yang telah diambil
$data = mysqli_query($connect, "SELECT * FROM member WHERE nim='$id'") or die(mysqli_error($connect));
$row = mysqli_fetch_assoc($data);

// Cek apakah user sudah menekan tombol submit
if (isset($_POST['submit'])) {

  // Mengambil data dari form
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $status = $_POST['status'];

  // Updata data ke database berdasarkan ID/NIM
  mysqli_query($connect, "UPDATE member set nama='$nama', jurusan='$jurusan', status='$status' WHERE nim='$id'") or die(mysqli_error($connect));

  echo "<script>alert('Data berhasil diedit.'); window.location='index.php';</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="container">
    <div class="d-flex my-3">
      <h3>Form Edit Data</h3>
    </div>
    <div class="row">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" value="<?= $row['nim'] ?>" readonly required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $row['jurusan'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" aria-label="Select example" id="status" name="status" required>
            <option>Pilih Status</option>
            <option value="aktif" <?php if ($row['status'] == 'aktif') echo 'selected' ?>>Aktif</option>
            <option value="nonaktif" <?php if ($row['status'] == 'nonaktif') echo 'selected' ?>>Nonaktif</option>
          </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>