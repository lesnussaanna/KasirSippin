 <?php
  include 'koneksi.php';
if (!isset($_SESSION['kasir'])) {
  echo "<script>alert('Silahkan Login Terlebih dahulu!');</script>";
  echo "<script>location='index.php';</script>";
  
}
?>
<section>
   <div class="container">
    <div class="row">

       <div class="col-md-3 ">
         <div class="thumbnail">
          <?php
          $id_minuman = $_GET['id_minuman'];
  $ambil = $koneksi->query("SELECT * FROM minuman WHERE id_minuman = '$id_minuman'");
  $detail = $ambil->fetch_assoc();
  ?>
           <img width="150" height="150" style=" border-radius: 200px;   -webkit-border-radius: 200px;  -moz-border-radius: 200px;" src="image/produk/<?php echo $detail['gambar_minuman'];?>">

           <div class="caption">
            <h6><?php echo $detail['nama_minuman'];?></h6>
           </div>
         </div>
       </div>  
         <div class="col-md-3 w-75">
        <div class="card shadow-lg p-3 mb-5 bg-white" style="padding: 30px; border-radius: 30px;">
          <form method="post">


            <h5 style="color: #79738E;">Ukuran</h5>
            <select class="form-control w-25" name="id_ukuran" required="required">
                             <option required value="">Pilih Ukuran</option>
                             <?php
                             $lihat = $koneksi->query("SELECT * FROM ukuran WHERE id_minuman = '$id_minuman'");
                             while($ukur=$lihat->fetch_assoc()){
                               ?>
                             <option value="<?php echo $ukur['id_ukuran'];?>"><?php echo $ukur['ukuran'];?> - 
                                 Rp.<?php echo number_format($ukur['harga_minuman']); ?>
                             </option>
                         <?php } ?>
                         </select>
          <h5 style="color: #79738E;">Jumlah</h5>
          <input type="number" min="1" name="jumlah" max="<?php echo $detail['stock_minuman'] ?>" class="form-control w-25">

                         </select>
          
          <br>
<!-- Stock-->
          <h5 style="color: #79738E;">Stok:  <?php echo $detail['stock_minuman'];?></h5>
                <button class="btn btn-outline-success" name="tambah">Tambah</button>
              
          </form>
          <?php 

          if (isset($_POST['tambah'])) {
            $jumlah = $_POST['jumlah'];
            $id_ukuran = $_POST['id_ukuran'];
            $id_topping = $_POST['id_topping'];
 $_SESSION['keranjang'][$id_ukuran] = $jumlah;

            echo "<script>alert('Minuman Berhasil Ditambah')</script>";
            echo "<script>location='index.php?halaman=order';</script>";

          }
          ?>
           
           </div>
         </div>
       </div>      
    </div>
  </div>
 </section>