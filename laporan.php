<?php
include 'koneksi.php';

if (!isset($_SESSION['kasir'])) {
  echo "<script>alert('Silahkan Login Terlebih dahulu!');</script>";
  echo "<script>location='index.php';</script>";
}

$id_user = $_SESSION['kasir']['id_user'];
date_default_timezone_set('Asia/Jakarta');
$tanggal_pesanan = date("d-m-Y");
?>
 <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Penjualan Terakhir</h1>
                <form method="POST">
                <button class="btn btn-info" name="laporan" >Laporan Selesai</button>
                <br> <br>
                <label><b>Bartender</b></label>
               <input type="text" name="bartender" class="form-control w-25" required>
               <br><br>
                <table class="table table-bordered kotak4">
                    <tr>
                        <th>No</th>
                        <th>ID Pesanan</th>
                        <th>Nama Pelanggan</th>
                        <th>Jumlah Minuman</th>
                        <th>Total Bayar</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th></th>
                    </tr>
                   <tbody>
                    <?php $total_penjualan = 0; ?>
                    <?php $total_minuman = 0; ?>
          <?php 
            $no = 1;
            $query = $koneksi->query("SELECT * FROM pesanan WHERE id_user = '$id_user' && tanggal_pesanan = '$tanggal_pesanan'");
            while($data = $query->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id_pesanan']; ?></td>
            <td><?php echo $data['nama_pelanggan']; ?></td>
            <td><?php echo $data['jumlah_minuman']; ?></td>
            <td><?php echo number_format ($data['total_bayar']) ?></td>
            <td><?php echo $data['tanggal_pesanan']; ?></td>
            <td><?php echo $data['waktu']; ?></td>
            <td width="140px">
                <a class="btn btn-info mr-2" href="index.php?halaman=detail&id=<?php echo $data['id_pesanan']; ?>">Detail</a>
            </td>
        <?php

            $total_penjualan+=$data['total_bayar'];
            $total_minuman+=$data['jumlah_minuman'];
            $no++;
            }
        ?>
                   </tbody>
                   <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th><?php echo $total_minuman ?></th>
                        <th>Rp <?php echo number_format($total_penjualan) ?>,-</th>
                    </tr>
                </tfoot>
                </table>
            </form>
            <?php

if (isset($_POST['laporan'])) {

    $id_user = $_SESSION['kasir']['id_user'];
    $nama_kasir = $_SESSION['kasir']['nama_user'];
    $bartender = $_POST['bartender'];


    $koneksi->query("INSERT INTO kasir(id_user,nama_kasir,bartender,tanggal,total_penjualan) 
                                    VALUES('$id_user','$nama_kasir','$bartender','$tanggal_pesanan','$total_penjualan')");

        echo "<script>alert('Laporan Selesai!');</script>";
        echo "<script>location='index.php';</script>";
    
}

?>
            </div>
        </div>
    </div>