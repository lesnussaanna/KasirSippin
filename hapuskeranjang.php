<?php
session_start();
$id_produk = $_GET["id"];
unset($_SESSION['keranjang'][$id_produk]);
echo "<script>alert('Produk dihapus dari pesanan');</script>";

echo "<script>location ='index.php?halaman=order';</script>";
?>