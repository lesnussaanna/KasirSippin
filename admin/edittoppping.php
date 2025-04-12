<h3>Edit Barang Djadjan</h3>
<?php
	$id_topping = $_GET['id'];
	$data = $koneksi->query("SELECT * FROM topping WHERE id_topping ='$id_topping'")->fetch_assoc();
?>
<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Nama Topping</td>
			<td></td>
			<td><input required class="form-control" type="text" name="nama" value="<?php echo $data['nama_topping']; ?>"></td>
		</tr>
		<tr>
			<td>Harga Topping(Rp)</td>
			<td></td>
			<td><input required class="form-control" type="number" min="1" name="harga" value="<?php echo $data['harga_topping']; ?>"></td>
		</tr>	</table>
	<button class="btn btn-success" name="simpan">Simpan</button>
</form>

<?php

if (isset($_POST['simpan'])) {

		$koneksi->query("UPDATE topping SET 
			nama_topping = '$_POST[nama]',
			harga_topping = '$_POST[harga]'
			WHERE id_topping = '$id_topping'
			");

		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=topping';</script>";
	
}

?>