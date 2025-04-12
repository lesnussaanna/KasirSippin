<?php
$id = $_GET['id'];
$nama = $_GET['nama'];
?>
 <div class="table-responsive text-dark">
<h3><b><?php echo "$nama"; ?></b></h3>
<table class="table table-striped table-sm">
	<thead>
		<tr>
			<th>No.</th>
			<th>Tanggal Kerja</th>
			<th>Total Penjualan</th>
			<th>Bartender</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		$query = $koneksi->query("SELECT * FROM kasir WHERE id = '$id'");
		while($data = $query->fetch_assoc())
			{ ?>
		<tr>
			<td><?php echo "$no"; ?></td>
			<td><?php echo "$data[tanggal]"; ?></td>
			<td>Rp <?php echo number_format($data['total_penjualan']); ?>,-</td>
			<td>Rp <?php echo number_format($data['biaya_pengantaran']); ?>,-</td>
		</tr>
		<?php
			$no++;
			}
		?>
	</tbody>
</table>
</div>