<?php include 'header.php'; ?>
<!-- bagian banner -->
<div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>');">
	<div class="banner-text">
		<div class="container">
			<h3>Selamat Datang di <?= $d->nama ?></h3>
			<p>Selamat datang di website SMA NEGERI 12 BATAM ! Kami
				berkomitmen
				untuk mencetak generasi unggul melalui pendidikan berkualitas dan lingkungan belajar yang kondusif. Mari
				bergabung bersama kami!.</p>
		</div>
	</div>
</div>

<!-- bagian sambutan -->
<div class="section">

	<div class="container text-center">
		<h3>Sambutan Kepala Sekolah</h3>
		<img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="100">
		<h4><?= $d->nama_kepsek ?></h4>
		<p><?= $d->sambutan_kepsek ?></p>
	</div>

</div>

<!-- bagian jurusan -->
<div class="section" id="jurusan">

	<div class="container text-center">
		<h3>Jurusan</h3>

		<?php
		$jurusan = mysqli_query($conn, "SELECT * FROM jurusan ORDER BY id DESC");
		if (mysqli_num_rows($jurusan) > 0) {
			while ($j = mysqli_fetch_array($jurusan)) {
				?>

				<div class="col-4">
					<a href="detail-jurusan.php?id=<?= $j['id'] ?>" class="thumbnail-link">
						<div class="thumbnail-box">
							<div class="thumbail-img" style="background-image: url('uploads/jurusan/<?= $j['gambar'] ?>');">
							</div>

							<div class="thumbnail-text">
								<?= $j['nama'] ?>
							</div>

						</div>
					</a>
				</div>

			<?php }
		} else { ?>

			Tidak ada data

		<?php } ?>
	</div>

</div>

<!-- bagian informasi -->
<div class="section">

	<div class="container text-center">
		<h3>Informasi Terbaru</h3>

		<?php
		$galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC LIMIT 8");
		if (mysqli_num_rows($galeri) > 0) {
			while ($p = mysqli_fetch_array($galeri)) {
				?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
						<div class="thumbnail-box">
							<div class="thumbail-img" style="background-image: url('uploads/galeri/<?= $p['foto'] ?>');">
							</div>

							<div class="thumbnail-text">
								<?= substr($p['keterangan'], 0, 50) ?>
							</div>

						</div>
					</a>
				</div>

			<?php }
		} else { ?>

			Tidak ada data

		<?php } ?>
	</div>

</div>
<?php include 'footer.php'; ?>