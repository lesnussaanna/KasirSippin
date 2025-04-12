  <?php
include 'koneksi.php';

if (!isset($_SESSION['kasir'])) {
  echo "<script>alert('Silahkan Login Terlebih dahulu!');</script>";
  echo "<script>location='index.php';</script>";
}
  $id_pesanan = $_GET['id'];
  $query = $koneksi->query("SELECT * FROM pesanan WHERE id_pesanan ='$id_pesanan'");
  $data = $query->fetch_assoc();
?>

<center>
 
               <table class="table table-borderless w-50">

      <tbody>
        <tr>
    <th colspan="6" class="text-center">Cafee Sippin</th>
      </tr>
        <tr>
    <th colspan="4"><?php echo $data["tanggal_pesanan"]; ?></th>
    <th colspan="2"><?php echo $data["waktu"]; ?></th>
      </tr>
    <tr>
    <th colspan="5">ID Pesanan</th>
    <th><?php echo $data["id_pesanan"]; ?></th>
      </tr>
      <tr>
    <th colspan="5">Nama Pemesan</th>
    <th><?php echo $data["nama_pelanggan"]; ?></th>
      </tr>
     <?php
     $ambildata = $koneksi->query("SELECT * FROM pesanan_minuman WHERE id_pesanan ='$id_pesanan'");
      while($datapesanan = $ambildata->fetch_assoc()){
    ?>
    
      <tr>
      <td><?php echo $datapesanan['jumlah']; ?></td>
      <td> X </td>
      <td><?php echo $datapesanan["nama_minuman"]; ?></td>
      <td><?php echo $datapesanan["ukuran_minuman"]; ?></td>
      <td><?php echo number_format ($datapesanan["harga_minuman"]) ?></td> 
      <td><?php echo number_format ($datapesanan["sub_bayar"]) ?></td> 
      </tr>
      </tbody>
      <?php
            }
        ?>
                              <tfoot>
                    <tr>
                        <th colspan="5">Total Bayar</th>
                        <th>Rp <?php echo number_format($data["total_bayar"]) ?>,-</th>
                    </tr>
                
                
        <tr>
          <td colspan="5"></td>
          <td><button name="cetak" class="btn btn-success">Cetak</button></td>
        </tr>
        </tfoot>
               </table>
               
         </center>