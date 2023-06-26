<?php

require '../database/dbkoneksi.php';

$id=$_GET['id'];
$query = mysqli_query($conn, "DELETE FROM pesanan WHERE id=$id");


if (mysqli_affected_rows($conn) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'pelanggan.php';
      </script>
    ";
  } else {
    echo mysqli_error($conn);
  }


?>