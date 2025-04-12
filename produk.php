<?php 

include 'koneksi.php';

if (isset($_POST['submit'])) { 
 $jenis = $_POST['jenis_minuman'];

 if (!empty($jenis)) {
  $q = mysqli_query($koneksi, "SELECT * FROM minuman WHERE jenis_minuman = '$jenis'");
 } else {
  // perintah tampil semua data
  $q = mysqli_query($koneksi, "SELECT * FROM minuman p");
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($koneksi, "SELECT * FROM minuman");
}

// hitung jumlah baris data
$jumlah = $q->num_rows;

?>

<!DOCTYPE html>
<html>
<head>
 <title>Caffe Sippin</title>
</head>
<body>
 
 <div class="container">

    <div class="row">
     <div class="col-md-4 pt-3">
      <span>Jumlah data: <b><?php echo  $jumlah ?></b></span>
     </div>
     <br>
     <br>
     <div class="col-">
      <form method="POST" action="" class="form-inline">
       <label for="date1">Jenis Minuman </label>
       <select class="form-control mr-2" name="jenis_minuman">
        <option value="">-</option>
        <option value="YAKULT">Yakult</option>
        <option value="CHOCOLATE">Chocolate</option>
        <option value="COFFEE">Coffee</option>
        <option value="GREEN TEA">Green tea</option>
        <option value="BROWN SUGAR">Brown Sugar</option>
        <option value="RED VELVET">Red Velvet</option>
        <option value="TARO">Taro</option>
        <option value="HOJICHA">HOJICHA</option>
        <option value="THAI TEA">Thai Tea</option>
        <option value="KITKAT">Kitkat</option>

       </select>
       <button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
      </form>
     </div>
    </div>
   </div>

<section class="text-center">
   <div class="container">
    <div class="row">
	  <?php
	  while ($databarang=$q->fetch_assoc()) {
	  ?>
    <label class="visually-hidden"><?php echo $databarang['id_minuman']; ?></label>
       <div class="col-md-3">
         <div class="thumbnail">
           <img width="150" height="150" style=" border-radius: 200px;   -webkit-border-radius: 200px;  -moz-border-radius: 200px;" src="image/produk/<?php echo $databarang['gambar_minuman'];?>">
           <div class="caption">
            <h5><?php echo $databarang['nama_minuman'];?></h5>
           <h6>Stock : <?php echo $databarang['stock_minuman'];?></h6>
             
           </div>
         </div>
       </div>        
      <?php } ?>
    </div>
  </div> 
 </section>