<?php 

// koneksi
$conn = new mysqli('localhost', 'root', '', 'kasir_sippin');

if (isset($_POST['submit'])) {
 $bln = date($_POST['bulan']);

 if (!empty($bln)) {
  // perintah tampil data berdasarkan periode bulan
  $q = mysqli_query($conn, "SELECT * FROM kasir WHERE MONTH(tanggal) = '$bln'");
 } else {
  // perintah tampil semua data
  $q = mysqli_query($conn, "SELECT * FROM kasir p");
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($conn, "SELECT * FROM kasir");
}

// hitung jumlah baris data
$s = $q->num_rows;

?>

<!DOCTYPE html>
<html>
<head>
 <title>Caffe Sippin</title>
</head>
<body>
 
 <div class="container">
  <center>
   <h1>Laporan Bulanan</h1>
  </center>

    <div class="row">
     <div class="col-md-4 pt-3">
      <span>Jumlah data: <b><?= $s ?></b></span>
     </div>
     <div class="col-">
      <form method="POST" action="" class="form-inline">
       <label for="date1">Tampilkan transaksi Bulan </label>
       <select class="form-control mr-2" name="bulan">
        <option value="">-</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
       </select>
       <button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
      </form>
     </div>
    </div>

    <div class="mt-3">
     <table class="table table-bordered">
      <tr>
       <th>No</th>
       <th>Nama Kasir</th>
       <th>Total Jualan</th>
       <th>Bartender</th>
       <th>Tgl. Penjualan</th>
      </tr>

      <?php
      
      $no = 1;
      while ($r = $q->fetch_assoc()) {
      ?>

      <tr>
       <td><?= $no++ ?></td>
       <td><?= ucwords($r['nama_kasir']) ?></td>
       <td><?= number_format ($r['total_penjualan']) ?></td>
       <td><?= $r['bartender'] ?></td>
       <td><?= date('d-M-Y', strtotime($r['tanggal'])) ?></td>
       <td><a class="btn btn-success" href="index.php?halaman=tambah_minuman&id=<?php echo $data['id_minuman']; ?>">Cetak</a></td>
      </tr>
  
      <?php   
      }
      ?>

     </table>
    </div>
   </div>

</body>
</html>