<?php
  include "lib/function.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="asset/fikoms.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/admin.css">
    <link rel="stylesheet" href="asset/fontawesome-free/css/all.css">

    <title>CRUD - Data Manajemen Nilai Mahasiswa</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <img src="asset/fikoms.png" width="30" class="img-fluid mr-2 mb-2">
        <h4 class="navbar-brand fw-bold text-white" href="#"> ADMIN-FIKOM</h4>
        </div>
      </nav>
      <div class="row no-getters mt-5">
        <div class="col-md-3 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link text-white active" href="dashboard.html"><i class="fa-solid fa-gauge mr-2"></i>Dashboard</a><hr class="bg-socondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= BASE_URL.'index.php?page=v_mhs' ?>"><i class="fa-solid fa-user-graduate mr-2"></i>Data Mahasiswa</a><hr class="bg-socondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= BASE_URL.'index.php?page=v_dosen' ?>"><i class="fa-solid fa-users mr-2"></i>Data Dosen</a><hr class="bg-socondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASE_URL.'index.php?page=v_pegawai' ?>"><i class="fa-solid fa-user-tie mr-2"></i>Data Pegawai</a><hr class="bg-socondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASE_URL.'index.php?page=v_jadwal' ?>"><i class="fa-solid fa-calendar-days mr-2"></i>Jadwal Kuliah</a><hr class="bg-socondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASE_URL.'index.php?page=v_nilai' ?>"><i class="fa-solid fa-bar-chart mr-2"></i>Nilai</a><hr class="bg-socondary">
                </li>
              </ul>
        </div>
        <div class="col-md-9 p-5 pt-2">
        <?php 
          $page = @$_GET['page'] ?: 'index';
          $filename = "page/" . $page . ".php";

          if (file_exists($filename)) {
              include_once($filename);
          } else {
              echo "Halaman tidak ditemukan: $filename";
          }
        ?>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="admin.js"></script>
  </body>
</html>