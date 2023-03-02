<?php 
session_start();
   
     if (empty($_SESSION['id_petugas'])) {
        echo "<script>alert('Maaf Anda Belum Login');
        window.location.assign('../index2.php');</script>";
     }
      if ($_SESSION['level']!='petugas') {
       echo "<script>alert('Maaf Anda Bukan Sesi Admin');
       window.location.assign('../index2.php');</script>";
     }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#" >
      <img src="../img/smk.png" width="46"> 
      Aplikasi Pembayaran SPP Smk Putra Gununghalu
    </a>

    </div>

</nav>
<div class="row no-gutters mt-5 fixed-top">
  <div class="col-md-2 bg-dark mt-4 pr-4 pt-3">
    <ul class="nav flex-column ml-5 mb-4">
      <li class="nav-item">
        <a class="nav-link text-white" href="petugas.php">Petugas</a><hr>
      </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="petugas.php?url=pembayaran">Pembayaran</a><hr>
      </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="petugas.php?url=laporan">Laporan</a><hr>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="petugas.php?url=logout">Logout</a><hr>
      </li>
    </ul>
  </div>

<div class="col-md-10 mt-4 pr-4 pt-4">
  <!--ini isi web kita -->
         <?php 
          $file = @$_GET['url'];
          if(empty($file)){
            echo "<h4>Selamat Datang Di HalamanAd Petugas<h4>";
            echo "Aplikasi pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa siswi disekolah.";

          }else{
            include $file. '.php';
          }
          ?>
</div>
</div>


    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>