<?php
session_start();

if (isset($_SESSION['admin'])){
  header("location:admin/index.php");
}
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Kasir Caffe Sippin</title>
 <?php include 'script.php'; ?>
 <link href="assets/css/sidebar.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
 
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-purple flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><img src="image/logo.png" width="35">Caffe Sippin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <?php if (isset($_SESSION['kasir'])): ?>
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="index.php?halaman=signout">Sign out</a>
    </li>
    <?php else: ?>
      <li class="nav-item text-nowrap">
      <a class="nav-link" href="signin.php">Sign in</a>
    </li>
    <?php endif ?>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-purple sidebar collapse">
      <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
          <span>Kasir</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <?php if (isset($_SESSION['kasir'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=order">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=produk">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=laporan">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=history">
              <span data-feather="bar-chart-2"></span>
              History
            </a>
          </li>
          <?php endif ?>
        </ul> 
      </div>
    </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <?php if (isset($_SESSION['kasir'])): ?>
        <h6><?php echo $_SESSION['kasir']['nama_user']; ?></h6>
        <div class="btn-toolbar mb-2 mb-md-0">
          <h6><?php echo date('l, d-m-Y'); ?></h6>
        </div>
        <?php else: ?>
           <?php endif ?>
      </div>
      <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk")
                    {
                        include 'produk.php';
                    }
                    elseif ($_GET['halaman']=="order")
                    {
                        include 'order.php';
                    }
                    elseif ($_GET['halaman']=="laporan")
                    {
                        include 'laporan.php';
                    }
                    elseif ($_GET['halaman']=="jenis")
                    {
                        include 'jenis.php';
                    }
                    elseif ($_GET['halaman']=="minuman")
                    {
                        include 'minuman.php';
                    }
                    elseif ($_GET['halaman']=="pemesanan")
                    {
                        include 'pemesanan.php';
                    }
                    elseif ($_GET['halaman']=="hapuskeranjang")
                    {
                        include 'hapuskeranjang.php';
                    }
                    elseif ($_GET['halaman']=="history")
                    {
                        include 'history.php';
                    }
                    elseif ($_GET['halaman']=="bayar")
                    {
                        include 'bayar.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="signout")
                    {
                        include 'signout.php';
                    }
                    
                }
                else
                {
                    include 'beranda.php';
                }
                ?>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

  
</html>
