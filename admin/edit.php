<h3>Edit Barang Djadjan</h3>
<?php
	$id_minuman = $_GET['id'];
	$data = $koneksi->query("SELECT * FROM ukuran JOIN minuman ON ukuran.id_minuman=minuman.id_minuman WHERE minuman.id_minuman ='$id_minuman'")->fetch_assoc();
?>
<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Nama Barang</td>
			<td></td>
			<td><input required class="form-control" type="text" name="nama" value="<?php echo $data['nama_minuman']; ?>"></td>
		</tr>
		<tr>
			<td>Harga Ukuran (Rp)</td>
			<td></td>
			<td><?php
                             $lihat = $koneksi->query("SELECT * FROM ukuran WHERE id_minuman = '$id_minuman'");
                             while($ukur=$lihat->fetch_assoc()){
                               ?>
                             <span value="<?php echo $ukur['id_ukuran'];?>"><?php echo $ukur['ukuran'];?> - 
                                 Rp.<?php echo number_format($ukur['harga_minuman']); ?> <a class="btn btn-warning" href="index.php?halaman=harga&id=<?php echo $ukur['id_ukuran']; ?>">Ganti harga</a>
                             </span>
                         <?php } ?></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td width="125px"><img width="125px" src="../image/produk/<?php echo($data['gambar_minuman']); ?>"></td>
			<td><input class="form-control" type="file" name="foto"></td>
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
	<button class="btn btn-success" name="simpan">Simpan</button>
</form>

<?php

if (isset($_POST['simpan'])) {
	$namafotobarang = $_FILES['foto']['name'];
	$lokasisementarafoto = $_FILES['foto']['tmp_name'];

	if (!empty($lokasisementarafoto)) {
		move_uploaded_file($lokasisementarafoto, "../image/produk".$namafotobarang);

		$koneksi->query("UPDATE minuman SET 
			nama_minuman = '$_POST[nama]',
			jenis_minuman = '$_POST[jenis]',
			gambar_minuman = '$namafotobarang',
			jenis_minuman = '$_POST[jenis]'
			WHERE id_minuman = '$id_minuman'
			");


		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=minuman';</script>";
	}
	else{
		$koneksi->query("UPDATE minuman SET 
			nama_minuman = '$_POST[nama]',
			jenis_minuman = '$_POST[jenis]'
			WHERE id_minuman = '$id_minuman'
			");

		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=minuman';</script>";
	}
}

?>