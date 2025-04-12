<?php
include 'koneksi.php';
if (!isset($_SESSION['kasir'])) {
  echo "<script>alert('Silahkan Login Terlebih dahulu!');</script>";
  echo "<script>location='index.php';</script>";
}
$nama_jenis = $_GET['nama_jenis'];
?>
<section class="text-center">
   <div class="container">
    <div class="row">
	  <?php
    $ambil = $koneksi->query("SELECT * FROM minuman WHERE jenis_minuman = '$nama_jenis'");
	  while ($databarang=$ambil->fetch_assoc()) {
	  ?>
    <label class="visually-hidden"><?php echo $databarang['id_minuman']; ?></label>
       <div class="col-md-4">
         <div class="thumbnail">
           <a href="index.php?halaman=pemesanan&id_minuman=<?php echo($databarang['id_minuman']) ?>"><img width="150" height="150" style=" border-radius: 200px;   -webkit-border-radius: 200px;  -moz-border-radius: 200px;" src="image/produk/<?php echo $databarang['gambar_minuman'];?>"></a>
           <div class="caption">
             <a style="color: black;" href="index.php?halaman=pemesanan&id_minuman=<?php echo($databarang['id_minuman']) ?>"><h6><?php echo $databarang['nama_minuman'];?></h6></a>
             
           </div>
         </div>
       </div>        
      <?php } ?>
    </div>
  </div> 
 </section>