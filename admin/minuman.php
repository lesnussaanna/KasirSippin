 <div class="table-responsive text-dark">
<h2>Minuman</h2>
<br>
<a class="btn btn-info" href="index.php?halaman=minuman_baru">Tambah Minuman</a>
<br>
<br>
<a class="btn btn-info" href="index.php?halaman=jenis_baru">Jenis Baru</a>
<br><br>
<table class="table table-striped table-sm">
	<thead>
		<tr>
			<th>No.</th>
			<th>Foto</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Jumlah</th> 
			<th>Jenis</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$query = $koneksi->query("SELECT * FROM minuman");
			while($data = $query->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><img width="125px" src="../image/produk/<?php echo($data['gambar_minuman']); ?>"></td>
			<td><?php echo $data['id_minuman']; ?></td>
			<td width="190px"><?php echo $data['nama_minuman']; ?></td>
			<td><?php echo $data['stock_minuman']; ?></td>
			<td><?php echo $data['jenis_minuman']; ?></td>
			<td width="140px">
				<a class="btn btn-info mr-2" href="index.php?halaman=edit&id=<?php echo $data['id_minuman']; ?>">Edit</a>
			</td>
			<td>
				<a class="btn btn-success" href="index.php?halaman=tambah_minuman&id=<?php echo $data['id_minuman']; ?>">Tambah</a>
			</td>
		<?php
			$no++;
			}
		?>
		</tr>
	</tbody>
</table>
</div>