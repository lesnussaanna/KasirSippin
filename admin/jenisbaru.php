
<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Tambah Jenis </td>
			<td></td>
			<td><input required class="form-control w-50" type="text" name="jenis_baru" ></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td></td>
			<td><input class="form-control w-50" type="file" name="foto" required></td>
		</tr>
	</table>
	<button class="btn btn-success" name="tambah">Tambah</button>
</form>

<?php

if (isset($_POST['tambah'])) {
	$namafotobarang = $_FILES['foto']['name'];
	$lokasisementarafoto = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasisementarafoto, "../image/".$namafotobarang);

		$koneksi->query("INSERT INTO jenis(
			nama_jenis,
			gambar_jenis
			VALUES(
			'$_POST[jenis_baru]',
			'$namafotobarang'
			)");

		echo "<script>alert('Tambah Jenis!');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
}
?>