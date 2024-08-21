<?php
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");

$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
$d = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
	<title>Website <?= $d->nama ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script>
		tinymce.init({
			selector: '#keterangan'
		});
	</script>
</head>

<body class="bg-light">

	<!-- box menu mobile -->
	<div class=" box-menu-mobile" id="mobileMenu">
		<span onclick="hideMobileMenu()">Close</span>
		<ul class="text-center">

			<li>
				<a href="index.php">Beranda</a>
			</li>

			<li>
				<a href="tentang-sekolah.php">Tentang Sekolah</a>
			</li>

			<li>
				<a href="jurusan.php">Jurusan</a>
			</li>

			<li>
				<a href="galeri.php">Galeri</a>
			</li>

			<li>
				<a href="kontak.php">Kontak</a>
			</li>

		</ul>
	</div>

	<!-- bagian header -->
	<div class="header">

		<div class="container">

			<div class="header-logo">
				<img src="uploads/identitas/<?= $d->logo ?>" width="70">
				<h2><a href="index.php"><?= $d->nama ?></a></h2>
			</div>

			<ul class="header-menu">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
				<li><a href="jurusan.php">Jurusan</a></li>
				<li><a href="galeri.php">Galeri</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>

			<div class="mobile-menu-btn text-center">
				<a href="#" onclick="showMobileMenu()">Menu</a>
			</div>

		</div>

	</div>
	</>