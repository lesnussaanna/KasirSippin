<h2>Karyawan Caffe Sippin</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th>Profesi</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php

		$no = 1;
		$query = $koneksi->query("SELECT * FROM karyawan");

		while($karyawan = $query->fetch_assoc()){ ?>
			<tr>
				<td><?php echo "$no"; ?></td>
				<td><?php echo "$karyawan[nama_karyawan]"; ?></td>
				<td><?php echo "$karyawan[email]"; ?></td>
				<td><?php echo "$karyawan[alamat]"; ?></td>
				<td><?php echo "$karyawan[no_hp]"; ?></td>
				<td><?php echo "$karyawan[profesi]"; ?></td>
				<td><?php echo "$karyawan[status]"; ?></td>
				<td>
					<a class="btn btn-success" href="index.php?halaman=info&id=<?php echo "$karyawan[id_karyawan]" ?>&nama=<?php echo "$karyawan[nama_karyawan]" ?>">Info</a>
				</td>
			</tr>
		<?php 
			$no++;
			}
		?>
	</tbody>
</table>