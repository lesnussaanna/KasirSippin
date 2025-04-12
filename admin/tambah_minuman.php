
<?php
	$id_minuman =$_GET['id'];
	$data = $koneksi->query("SELECT * FROM minuman  WHERE id_minuman = '$id_minuman'")->fetch_assoc();
?>
<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Tambah Minuman <?php echo $data['nama_minuman']; ?></td>
			<td></td>
			<td><input required class="form-control w-25" type="number" min="1" name="tambah" value="<?php echo $data['stock_minuman']; ?>"></td>
		</tr>
	</table>
	<button class="btn btn-success" name="simpan">Simpan</button>
</form>

<?php

if (isset($_POST['simpan'])) {

	//pengambilan data minuman dari database
	$id_minuman =$_GET['id'];
	$data = $koneksi->query("SELECT * FROM minuman  WHERE id_minuman = '$id_minuman'")->fetch_assoc();

	$stock_minuman_lama = $data['stock_minuman'];
	$stock_minuman_tambah = $_POST['tambah'];
	$stock_minuman = $stock_minuman_lama + $stock_minuman_tambah;
			$koneksi->query("UPDATE minuman SET 
			stock_minuman = '$stock_minuman'
			WHERE id_minuman = '$id_minuman'
			");

		echo "<script>alert('Barang Ditambah!');</script>";
		echo "<script>location='index.php?halaman=minuman';</script>";
	
}

?>