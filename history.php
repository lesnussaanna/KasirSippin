<?php
include 'koneksi.php';
?>
 <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aktivas Terakhir</h1>
                <nav><h6>Silahkan SignIn</h6></nav>
                <table class="table table-bordered kotak4">
                    <tr>
                        <th>ID</th>
                        <th>Nama Kasir</th>
                        <th>Barista</th>
                        <th>Total Penjualan</th>
                        <th>Tanggal Kerja</th>
                        <th></th>
                    </tr>
                    <?php 

            $query = $koneksi->query("SELECT * FROM kasir ORDER BY tanggal DESC");
            while($data = $query->fetch_assoc()){
        ?>
                    <tr>
                        <td><?php echo $data['id_user']; ?></td>
                        <td><?php echo $data['nama_kasir']; ?></td>
                        <td><?php echo $data['bartender']; ?></td>
                        <td><?php echo $data['total_penjualan']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><a href="index.php?halaman=harian&id_user=<?php echo $data['id_user'] ?>&tanggal=<?php echo $data['tanggal']; ?>" class="btn btn-danger">Cetak</a></td>
                    </tr>
                    <?php

            }
        ?>

                </table>
            </div>
        </div>
    </div>