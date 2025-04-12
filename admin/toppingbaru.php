<h3>Tambah Topping</h3>

<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Nama Minuman</td>
			<td></td>
			<td><input required class="form-control" type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Harga Topping(Rp)</td>
			<td></td>
			<td><input required class="form-control" type="number" min="1" name="harga"></td>
		</tr>
	</table>
	<button class="btn btn-success" name="tambah">Tambah</button>
</form>

<?php

if (isset($_POST['tambah'])) {

		$koneksi->query("INSERT INTO topping(
			nama_topping,
			harga_topping,
			stock_minuman)
			VALUES(
			'$_POST[nama]',
			'$_POST[harga]',
			''
			)");


		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=minuman';</script>";
}

?>