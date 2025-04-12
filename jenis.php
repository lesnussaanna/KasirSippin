 <?php
include 'koneksi.php';
?>
<section class="text-center">
   <div class="container">
    <div class="row">
	  <?php
	  $ambil = $koneksi->query("SELECT * FROM jenis");
	  while ($databarang=$ambil->fetch_assoc()) {
	  ?>
       <div class="col-md-3">
         <div class="thumbnail">
           <a href="index.php?halaman=minuman&nama_jenis=<?php echo $databarang['nama_jenis'] ?>"><img width="150" height="150" style=" border-radius: 200px;   -webkit-border-radius: 200px;  -moz-border-radius: 200px;" src="image/<?php echo $databarang['gambar_jenis'];?>"></a>
           <div class="caption">
             <a style="color: black;" href="index.php?halaman=minuman&nama_jenis=<?php echo $databarang['nama_jenis'] ?>"><h6><?php echo $databarang['nama_jenis'];?></h6></a>
           </div>
         </div>
       </div>        
      <?php } ?>
    </div>
  </div>
 </section>