
<?php
	$id_ukuran =$_GET['id'];
	$data = $koneksi->query("SELECT * FROM ukuran  WHERE id_ukuran = '$id_ukuran'")->fetch_assoc();
?>
<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Harga Ukuran <?php echo $data['ukuran']; ?> (Rp)</td>
			<td></td>
			<td><input required class="form-control" type="number" min="1" name="harga" value="<?php echo $data['harga_minuman']; ?>"></td>
		</tr>
	</table>
	<button class="btn btn-success" name="simpan">Simpan</button>
</form>

<?php

if (isset($_POST['simpan'])) {

	//pengambilan data minuman dari database

		$koneksi->query("UPDATE ukuran SET 
			harga_minuman = '$_POST[harga]'
			WHERE id_ukuran = '$id_ukuran'
			");

		echo "<script>alert('Harga Disimpan!');</script>";
		echo "<script>location='index.php?halaman=minuman';</script>";
	
}

?>