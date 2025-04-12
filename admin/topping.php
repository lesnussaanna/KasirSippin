 <div class="table-responsive text-dark">
<h2>Topping</h2>
<br>
<a class="btn btn-danger" href="index.php?halaman=topping_baru">Tambah Topping</a>
<br>
<br>
<table class="table table-striped table-sm w-75">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$query = $koneksi->query("SELECT * FROM topping");
			while($data = $query->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['id_topping']; ?></td>
			<td width="190px"><?php echo $data['nama_topping']; ?></td>
			<td><?php echo $data['stock_topping']; ?></td>
			<td width="140px">
				<a class="btn btn-info mr-2" href="index.php?halaman=edittopping&id=<?php echo $data['id_topping']; ?>">Edit</a>
			</td>

			<td width="140px">
				<a class="btn btn-success mr-2" href="index.php?halaman=tambah_toppping&id=<?php echo $data['id_topping']; ?>">Tambah</a>
			</td>
		<?php
			$no++;
			}
		?>
		</tr>
	</tbody>
</table>
</div>