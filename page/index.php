<?php
 include_once "lib/conn.php";
 include_once "lib/function.php";

 $result = mysqli_query($conn, "SELECT *  FROM m_mahasiswa");
 $mhs = mysqli_num_rows($result);
 $result = mysqli_query($conn, "SELECT *  FROM m_dosen");
 $dosen = mysqli_num_rows($result);
 $result = mysqli_query($conn, "SELECT *  FROM m_pegawai");
 $pegawai = mysqli_num_rows($result);
 $result = mysqli_query($conn, "SELECT *  FROM m_matkul");
 $mk = mysqli_num_rows($result);
 $result = mysqli_query($conn, "SELECT *  FROM m_nilai");
 $nilai = mysqli_num_rows($result);

?>

<div class="col-md-12 p-2 pt-2">
            <h3><i class="fa-solid fa-gauge mr-2"></i></i>Dashboard</h3><hr>
            <div class="row text-white">
                <div class="card bg-danger ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-user-graduate mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Mahasiswa</h5>
                      <div class="display-4"><?= $mhs;?></div>
                      
                    </div>
                  </div>
                  <div class="card bg-success ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-users mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Dosen</h5>
                      <div class="display-4"><?= $dosen;?></div>
                      
                    </div>
                  </div>
                  <div class="card bg-primary ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-user-tie mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Pegawai</h5>
                      <div class="display-4"><?= $pegawai;?></div>
                      
                    </div>
                  </div>
                  </div>
                  <div class="row text-white pt-3">
                  <div class="card bg-info ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-calendar-days mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Jadwal Mk</h5>
                      <div class="display-4"><?= $mk;?></div>
                      
                    </div>
                  </div>
                  <div class="card bg-warning ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-bar-chart mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Nilai</h5>
                      <div class="display-4"><?= $nilai;?></div>
                      
                    </div>
                  </div>
                  </div>
            </div>
        </div>