<?php
session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Silakan login terlebih dahulu!');</script>";
    echo "<script>location='../index.php';</script>";
   exit();
}

include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Kasir Caffe Sippin</title>
 <?php include 'script.php'; ?>
 <link href="../assets/css/sidebar.css" rel="stylesheet">
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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="../image/logo.png" width="35">Caffe Sippin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="index.php?halaman=signout">Sign out</a>
    </li>

  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-purple sidebar collapse">
      <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
          <span>Admin</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=karyawan">
              <span data-feather="file"></span>
              Karyawan
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
              Laporan
            </a>
          </li>
        </ul> 
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk")
                    {
                        include 'produk.php';
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
                    elseif ($_GET['halaman']=="harga")
                    {
                        include 'harga.php';
                    }
                    elseif ($_GET['halaman']=="signout")
                    {
                        include 'signout.php';
                    }
                   elseif ($_GET['halaman']=="karyawan")
                    {
                        include 'karyawan.php';
                    } 
                    elseif ($_GET['halaman']=="edit")
                    {
                        include 'edit.php';
                    }  
                    elseif ($_GET['halaman']=="topping")
                    {
                        include 'topping.php';
                    }
                    elseif ($_GET['halaman']=="tambah_minuman")
                    {
                        include 'tambah_minuman.php';
                    }
                    elseif ($_GET['halaman']=="jenis_baru")
                    {
                        include 'jenisbaru.php';
                    }
                    elseif ($_GET['halaman']=="minuman_baru")
                    {
                        include 'minumanbaru.php';
                    }
                    elseif ($_GET['halaman']=="tambah_topping")
                    {
                        include 'tambahtopping.php';
                    }
                    elseif ($_GET['halaman']=="topping_baru")
                    {
                        include 'toppingbaru.php';
                    }
                    elseif ($_GET['halaman']=="edit_topping")
                    {
                        include 'edittopping.php';
                    }
                    elseif ($_GET['halaman']=="edit")
                    {
                        include 'edit.php';
                    }
                }
                else
                {
                    include 'beranda.php';
                }
                ?>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

  
</html>
