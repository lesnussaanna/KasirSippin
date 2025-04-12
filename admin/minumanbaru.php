<h3>Tambah Minuman</h3>

<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Nama Minuman</td>
			<td></td>
			<td><input required class="form-control" type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Harga Ukuran M(Rp)</td>
			<td></td>
			<td><input required class="form-control" type="number" min="1" name="ukuran_m"></td>
		</tr>
		<tr>
			<td>Harga Ukuran L(Rp)</td>
			<td></td>
			<td><input class="form-control" type="number" min="1" name="ukuran_l"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td></td>
			<td><input class="form-control" type="file" name="foto" required></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td></td>
			<td>
				<select name="jenis" class="form-control" required>
					<option value="">--Pilih Jenis--</option>
					<?php
                             $lihat = $koneksi->query("SELECT * FROM jenis");
                             while($ukur=$lihat->fetch_assoc()){
                               ?>
                             <option value="<?php echo $ukur['nama_jenis'];?>"><?php echo $ukur['nama_jenis'];?>
                             </option>
                         <?php } ?>
				</select>
			</td>
		</tr>
	</table>
	<button class="btn btn-success" name="tambah">Tambah</button>
</form>

<?php

if (isset($_POST['tambah'])) {
$ukuran_l = $_POST['ukuran_l'];
	$namafotobarang = $_FILES['foto']['name'];
	$lokasisementarafoto = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasisementarafoto, "../image/produk/".$namafotobarang);

		$koneksi->query("INSERT INTO minuman(
			nama_minuman,
			jenis_minuman,
			stock_minuman,
			gambar_minuman)
			VALUES(
			'$_POST[nama]',
			'$_POST[jenis]',
			'',
			'$namafotobarang'
			)");
		$id_barusan = $koneksi->insert_id;

		if (!empty($ukuran_l)) {
$koneksi->query("INSERT INTO ukuran(
			id_minuman,
			ukuran,
			harga_minuman)
			VALUES(
			'$id_barusan',
			'L',
			'$ukuran_l'
			),
			(
			'$id_barusan',
			'M',
			'$_POST[ukuran_m]'
			)");

	}
	else{
		$koneksi->query("INSERT INTO ukuran(
			id_minuman,
			ukuran,
			harga_minuman)
			VALUES(
			'$id_barusan',
			'M',
			'$_POST[ukuran_m]'
			)");

	}

		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=minuman';</script>";
}

?>