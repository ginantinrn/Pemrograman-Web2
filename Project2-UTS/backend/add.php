<?php

require '../database/dbkoneksi.php';

$query = mysqli_query($conn, "SELECT * FROM merk");
$nama_merk = mysqli_fetch_all($query, MYSQLI_ASSOC);
$tipe_motor = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM tipe_motor"), MYSQLI_ASSOC);



if (isset($_POST["submit"])) {
  $nama_motor = $_POST["nama_motor"];
  $cc = $_POST["cc"];
  $tipe_motor_id = $_POST["tipe_motor_id"];
  $harga = $_POST["harga"];
  $merk_id = $_POST["merk_id"];
  $stok = $_POST["stok"];

  $query = "INSERT INTO motor (nama_motor, cc, tipe_motor_id, harga, merk_id, stok) VALUES ('$nama_motor', '$cc', '$tipe_motor_id', '$harga', '$merk_id', '$stok')";

    mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo mysqli_error($conn);
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>JAYABAYA MOTOR</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="../frontend/css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>

  <br><br><br><br><br><br><br>

  <div class="card" style="width:60%">
    <div class="card-header bg-primary text-light ">
      Tambah Data Toko
    </div>
    <div class="card-body md-5">
      <section class="container-fluid">
        <section class="row justify-content-center">
          <section class="col-10 col-sm-2 col-md-4">
            <form class="form-container" method="POST">
              <div class="form-group">
                <label for="nama_merk">Merk</label>
                <select name="merk_id" class="form-select">
                  <?php foreach ($nama_merk as $m) : ?>
                    <option value="<?= $m['id'] ?>"><?= $m['nama_merk'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="tipe_motor">Tipe Motor</label>
                <select name="tipe_motor_id" class="form-select">
                  <?php foreach ($tipe_motor as $m) : ?>
                    <option value="<?= $m['id'] ?>"><?= $m['tipe_motor'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="InputEmail">Motor</label>
                <input type="text" class="form-control" id="nama_motor" name="nama_motor" aria-describeby="emailHelp" placeholder="Masukkan Motor">
              </div>
              <div class="form-group">
                <label for="number">CC</label>
                <input type="number" class="form-control" id="cc" name="cc" placeholder="Masukan CC Motor">
              </div>
              <div class="form-group">
                <label for="number">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukan Stok Motor">
              </div>
              <div class="form-group">
                <label for="number">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan Harga Motor">
              </div>
              <br>
              <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
              <a href="index.php" class="btn btn-Warning" role="button">Kembali</a><br>
            </form>
          </section>
        </section>
      </section>
    </div>
  </div>

</body>