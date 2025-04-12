  <?php
session_start();

if (isset($_SESSION['admin'])){
  header("location:admin/index.php");
}
include 'koneksi.php';
?>
<html lang="en">
  <head>
<link href="assets/css/signin.css" rel="stylesheet">
    <title>Signin</title>
 <?php include 'script.php'; ?>
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
<?php

if (isset($_POST['signin']))
{
  $user_login=$_POST['inputUser'];
  $pass_login=$_POST['inputPassword'];

  $jalankanquerycekuser=$koneksi->query("SELECT * FROM user WHERE username = '$user_login'");
  $hitungcocok = $jalankanquerycekuser->num_rows;
  $ambildata = $jalankanquerycekuser->fetch_assoc();

if(!empty($user_login) && (!empty($pass_login))){
    if($hitungcocok==0){
      echo "<script>alert('Username tidak ditemukan');</script>";
    } elseif($hitungcocok==1){

      if ($ambildata['level']==1) {
        if($pass_login == $ambildata['password']){
          $_SESSION['admin'] = $ambildata;
          echo "<script>alert('Login Berhasil! Selamat bekerja Admin');</script>";
           echo "<script>location='admin/index.php'</script>";
        }

        else{
          echo "<script>alert('Login GAGAL, Username atau Password salah!');</script>";
        }
      }
      elseif($ambildata['level']==2){
        if ($pass_login == $ambildata['password']) {
            $_SESSION['kasir'] = $ambildata;

            echo "<script>alert('Login Berhasil!');</script>";
            echo "<script>location='index.php'</script>";
        } else{
            echo "<script>alert('Login Gagal, Username atau Password salah!');</script>"; 
        }
      }
  }
}
elseif (empty($user_login) || empty($pass_login)){
    echo "<script>alert('Username atau Password tidak boleh kosong!')</script>";
    }
}

?>
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post">
    <img class="mb-4" src="image/logo.png" alt="" width="72" height="72" style="border-radius: 50%;">
    <h1 class="h3 mb-3 fw-normal text-white">Sign In</h1>
    <label  class="visually-hidden">Username</label>
    <input type="text" name="inputUser" class="form-control" placeholder="Username" required autofocus>
    <label  class="visually-hidden">Password</label>
    <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; COFFE SIPPIN</p>
  </form>
</main>


    
  </body>
</html>
