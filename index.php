<?php include 'koneksi.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="container">
    <div class="d-flex my-3">
      <h3>Data Member</h3>
      <a href="tambah.php" class="btn btn-success ms-auto">
        <i class="bi bi-plus-lg"></i>
        Tambah Data
      </a>
    </div>
    <div class="row">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = mysqli_query($connect, "SELECT * FROM member") or die(mysqli_error($connect));
          $no = 1;

          while ($data = mysqli_fetch_assoc($query)) {
          ?>
            <tr>
              <th scope="row"><?= $no; ?></th>
              <td><?= $data['nim']; ?></td>
              <td><?= $data['nama']; ?></td>
              <td><?= $data['jurusan']; ?></td>
              <td><?= $data['status']; ?></td>
              <td>
                <a href="edit.php?id=<?= $data['nim']; ?>" class="btn btn-warning">
                  <i class="bi bi-pencil"></i>
                </a>
                <a href="delete.php?id=<?= $data['nim']; ?>" class="btn btn-danger">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
          <?php
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>