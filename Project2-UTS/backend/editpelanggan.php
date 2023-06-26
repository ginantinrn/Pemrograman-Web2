<?php
include '../database/dbkoneksi.php';

$id = $_GET["id"];
$query = "SELECT pesanan.*, motor.nama_motor FROM pesanan INNER JOIN motor ON pesanan.motor_id = motor.id WHERE pesanan.id = $id";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($hasil);

$query = mysqli_query($conn, "SELECT * FROM motor");
$motor = mysqli_fetch_all($query, MYSQLI_ASSOC);



if (isset($_POST["submit"])) {
  $nama_pelanggan = $_POST["nama_pelanggan"];
  $alamat_pelanggan = $_POST["alamat_pelanggan"];
  $motor_id = $_POST["motor_id"];
  $quantity = $_POST["quantity"];

  $query = "UPDATE pesanan SET nama_pelanggan = '$nama_pelanggan', alamat_pelanggan = '$alamat_pelanggan', motor_id = '$motor_id', quantity = '$quantity' WHERE id = $id";

  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    echo "
      <script>
        alert('Data berhasil diubah!');
        document.location.href = 'pelanggan.php';
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
      Tambah Data Customer
    </div>
    <div class="card-body md-5">
      <section class="container-fluid">
        <section class="row justify-content-center">
          <section class="col-10 col-sm-2 col-md-4">
            <form class="form-container" method="POST">

              <div class="form-group">
                <label for="name">Nama Pelanggan</label>
                <input type="text" class="form-control" id="name" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" value="<?= $data["nama_pelanggan"]; ?>">
              </div>

              <!-- alamat_pelanggan -->
              <div class="form-group">
                <label for="alamat">Alamat Pelanggan</label>
                <input type="text" class="form-control" id="alamat" name="alamat_pelanggan" placeholder="Masukkan Alamat Pelanggan" value="<?= $data["alamat_pelanggan"]; ?>">
              </div>

              <!--select motor_id -->
              <div class=" form-group">
                <label for="motor_id">Motor</label>
                <select name="motor_id" class="form-select">
                  <option value="<?= $data["motor_id"]; ?> selected"><?= $data["nama_motor"]; ?></option>
                  <?php foreach ($motor as $m) : ?>
                    <option value="<?= $m['id'] ?>"><?= $m['nama_motor'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <!-- quantity -->
              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Masukkan Quantity" value="<?= $data["quantity"]; ?>">
              </div>


              <div class="mt-3">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                <a href="pelanggan.php" class="btn btn-Warning" role="button">Kembali</a><br>
              </div>

            </form>
          </section>
        </section>
      </section>
    </div>
  </div>

</body>