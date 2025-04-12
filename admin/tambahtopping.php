
<?php
	$id_toppping =$_GET['id'];
	$data = $koneksi->query("SELECT * FROM topping  WHERE id_toppping = '$id_toppping'")->fetch_assoc();
?>
<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Tambah Topping <?php echo $data['nama_topping']; ?></td>
			<td></td>
			<td><input required class="form-control w-25" type="number" min="1" name="tambah" value="<?php echo $data['stock_topping']; ?>"></td>
		</tr>
	</table>
	<button class="btn btn-success" name="simpan">Simpan</button>
</form>

<?php

if (isset($_POST['simpan'])) {

	//pengambilan data topping dari database
	$id_toppping =$_GET['id'];
	$data = $koneksi->query("SELECT * FROM topping  WHERE id_toppping = '$id_toppping'")->fetch_assoc();

	$stock_topping_lama = $data['stock_topping'];
	$stock_topping_tambah = $_POST['tambah'];
	$stock_topping = $stock_topping_lama + $stock_topping_tambah;
			$koneksi->query("UPDATE topping SET 
			stock_topping = '$stock_topping'
			WHERE id_toppping = '$id_toppping'
			");

		echo "<script>alert('Barang Ditambah!');</script>";
		echo "<script>location='index.php?halaman=topping';</script>";
	
}

?>