<?php
include 'koneksi.php';

if (!isset($_SESSION['kasir'])) {
  echo "<script>alert('Silahkan Login Terlebih dahulu!');</script>";
  echo "<script>location='index.php';</script>";
}


?>

<body>
    
<main class="container">
      <a class="btn btn-info col-4" href="index.php?halaman=jenis">Tambah Minuman</a>

    <?php if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])): ?>
  
<br>
<h5> Tambahkan Orderan </h5>
<br>

<?php else: ?>
        <section class="konten">
            <div class="container">
               <h1 align="center">Pemesanan</h1>
                <hr>
                <form method="POST">
               <table class="table table-border w-50">

              <tbody>
                <?php $totalbelanja = 0; ?>
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
                  <td>Rp.<?php echo number_format($subhargamin);?></td>
                  <td><a href="index.php?halaman=hapuskeranjang&id=<?php echo $pecah['id_ukuran'] ?>" class="btn btn-outline-danger btn-xs">Hapus</a></td>
                </tr>
                <?php $totalbelanja+=$subhargamin; ?>

               <?php endforeach ?>
              </tbody>
                              <tfoot>
                    <tr>
                        <th colspan="4">Total Belanja</th>
                        <th>Rp <?php echo number_format($totalbelanja) ?>,-</th>
                    </tr>
                </tfoot>
               </table>
               <a href="index.php?halaman=bayar" class="btn btn-success">Pembayaran</a>
             </form>
            </div>
        </section>
<?php endif ?>
</main>
 </body>