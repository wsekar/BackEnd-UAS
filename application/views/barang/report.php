<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark"><?= $title ?></h3>
			<!-- <h4 class="h4 text-dark "><strong><?= $perusahaan->nama_perusahaan ?></strong></h4> -->
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<td>No</td>
					<td>Kode Barang</td>
					<td>Gambar</td>
					<td>Nama Barang</td>
					<td>Harga Beli</td>
					<td>Harga Jual</td>
					<td>Stok</td>
					<td>Deskripsi</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($all_barang as $barang) : ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $barang->kode_barang ?></td>
						<td><img src="<?= base_url() . 'assets/images/' . $barang->foto_barang ?>" width="100" height="100"></td>
						<td><?= $barang->nama_barang ?></td>
						<td>Rp <?= number_format($barang->harga_beli, 0, ',', '.') ?></td>
						<td>Rp <?= number_format($barang->harga_jual, 0, ',', '.') ?></td>
						<td><?= $barang->stok ?> <?= strtoupper($barang->satuan) ?></td>
						<td><?= $barang->deskripsi ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>

</html>