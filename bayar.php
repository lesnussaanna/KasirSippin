  <?php
include 'koneksi.php';

if (!isset($_SESSION['kasir'])) {
	echo "<script>alert('Silahkan Login Terlebih dahulu!');</script>";
	echo "<script>location='index.php';</script>";
}
elseif (empty($_SESSION['keranjang'])) {
  echo "<script>alert('Keranjang Kosong, Ayo Belanja Sekarang!');</script>";
  echo "<script>location='index.php';</script>"; 
}

?>
<body>
<h1 align="center">Pembayaran</h1>
<center>
 
               <table class="table table-borderless w-50">

              <tbody>
                <?php $total_bayar = 0; ?>
                <?php $jumlah_minuman = 0; ?>
                  <?php  
                  foreach ($_SESSION['keranjang'] as $id_ukuran => $jumlah) : ?>
                    <?php 
                    $ambil = $koneksi->query("SELECT * FROM ukuran JOIN minuman ON ukuran.id_minuman=minuman.id_minuman WHERE id_ukuran = '$id_ukuran'");
                    $pecah = $ambil->fetch_assoc();
                    $subhargamin = $pecah["harga_minuman"]*$jumlah;
                    ?>
                <tr>
                  <td><?php echo $jumlah; ?></td>
                  <td> X </td>
                  <td><?php echo $pecah["nama_minuman"]; ?></td>
                  <td><?php echo $pecah["ukuran"]; ?></td>
                  <td>Rp.<?php echo number_format($subhargamin);?></td>  </tr>
                <?php $total_bayar+=$subhargamin; ?>
                <?php $jumlah_minuman+=$jumlah; ?>

               <?php endforeach ?>
              </tbody>
                              <tfoot>
                    <tr>
                        <th colspan="4">Total Belanja</th>
                        <th>Rp <?php echo number_format($total_bayar) ?>,-</th>
                    </tr>
                </tfoot>
               </table>
               <form method="POST">
             
               <label><b>Nama Pemesan</b></label>
               <input type="text" name="nama" class="form-control w-25" required>
               <br><br>
               <button name="bayar" class="btn btn-success">Bayar</button>
               </form>
         </center>
         <?php
if (isset($_POST['bayar'])) {

    $username = $_SESSION['kasir']['username'];
    date_default_timezone_set('Asia/Jakarta');
    $tanggal_pesanan = date('d-m-Y');
    $waktu = date('H:i:s');
    $nama_pelanggan = $_POST['nama'];

    $id_user = $_SESSION['kasir']['id_user'];

    //memasukkan data pemesanan ke dalam database pada tabel pesanan
    $koneksi->query("INSERT INTO pesanan(id_user,username,nama_pelanggan,jumlah_minuman,total_bayar,tanggal_pesanan,waktu) 
                                    VALUES('$id_user','$username','$nama_pelanggan','$jumlah_minuman','$total_bayar','$tanggal_pesanan','$waktu')");

    $no_pesanan_barusan = $koneksi->insert_id;

    //Memasukkan data barang apa saja yang dibeli ke database
   foreach ($_SESSION['keranjang'] as $id_ukuran => $jumlah) {

        $ambil = $koneksi->query("SELECT * FROM ukuran JOIN minuman ON ukuran.id_minuman=minuman.id_minuman WHERE id_ukuran = '$id_ukuran'");
        $pecah = $ambil->fetch_assoc();
        $id_minuman   = $pecah['id_minuman'];
        $nama_minuman   = $pecah['nama_minuman'];
        $harga_minuman  = $pecah['harga_minuman'];
        $ukuran_minuman = $pecah['ukuran'];
        $subhargamin    = $pecah['harga_minuman']*$jumlah;

        //query masukkan ke database
        $koneksi->query("INSERT INTO pesanan_minuman(id_pesanan,id_minuman,nama_minuman,jumlah,ukuran_minuman,harga_minuman,sub_bayar) 
            VALUES('$no_pesanan_barusan','$id_minuman','$nama_minuman','$jumlah','$ukuran_minuman','$harga_minuman','$subhargamin')");

    }
        //menghapus session keranjang
        unset($_SESSION['keranjang']);

    echo "<script>alert('Pembelian Selesai');</script>";
    echo "<script>location='index.php?halaman=laporan';</script>";
}
 ?>

</body>