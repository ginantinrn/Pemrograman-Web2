<?php

require '../database/dbkoneksi.php';

$query = mysqli_query($conn, "SELECT * FROM motor");
$motor = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>JAYABAYA MOTOR</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="../frontend/css/styles.css" rel="stylesheet" />
</head>

<body>
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container px-4 px-lg-5">
			<a class="navbar-brand" href="#!">JAYABAYA MOTOR</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#!">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data Toko</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="../backend/index.php">Tambah Data Toko</a></li>
						</ul>

					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data Customer</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="../backend/pelanggan.php">Tambah Data Customer</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Header-->
	<header class="bg-dark py-5">
		<div class="container px-4 px-lg-5 my-5">
			<div class="text-center text-white">
				<h1 class="display-4 fw-bolder">JAYABAYA MOTOR</h1>
				<p class="lead fw-normal text-white-50 mb-0">Toko terbaik dalam menjual kendaran roda dua</p>
			</div>
		</div>
	</header>
	<!-- Section-->
	<section class="py-5">
		<div class="container px-4 px-lg-5 mt-5">
			<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
				<?php foreach ($motor as $m) : ?>

					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
								Sale
							</div>
							<!-- Product image-->
							<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder"><?= $m['nama_motor']; ?></h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through">Rp. <?= $m['harga'] * 2; ?></span>
									<?= $m['harga']; ?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">
				Copyright &copy; Ginanti Nuraeni Mahasiswa Nurul Fikri 2022
			</p>
		</div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
</body>

</html>