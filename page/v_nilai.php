<?php
    include 'lib/conn.php';
    include 'proses/m_nilai.php';
?>
            <h3 class="mb-3"><i class="fa-solid fa-bar-chart mr-2"></i>Daftar Nilai</h3><hr>
            <a href="#" class="btn btn-primary btn-sm text-white mb-2" data-toggle="modal" data-target="#tambah-dosen"><i class="fa-solid fa-plus mr-2"></i>Tambah MK</a>
            
            <?php if($err){ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo $err; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }else if($berhasil_simpan){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $berhasil_simpan; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
           <?php } ?>
            
            <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mutu</th>
                    <th scope="col">Angka</th>
                    <th scope="col">Huruf</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    $tampil = mysqli_query($conn, "SELECT * FROM m_nilai");
                    while($data = mysqli_fetch_array($tampil)){
                        ?> 
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $data['mutu']; ?></td>
                            <td><?php echo $data['angka']; ?></td>
                            <td><?php echo $data['huruf']; ?></td>
                            <td>
                                <a href="#" class="btn btn-warning text-white btn-sm" data-toggle="modal" data-target="#edit-dosen-<?php echo $data['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-danger text-white btn-sm" data-toggle="modal" data-target="#hapus-mhs-<?php echo $data['id']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
<!-- Modal Hapus -->
<div class="modal fade" id="hapus-mhs-<?php echo $data['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="hapus-mhs-<?php echo $data['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="hapus-mhs<?php echo $data['id']; ?>Label"><i class="fa-solid fa-user-graduate mr-2"></i>Hapus Data Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="form-group">
                  <label>Mutu :</label>
                  <input type="text" name="kode" class="form-control"   value="<?php echo $data['kode'];?>" readonly>
                  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                </div>
                <div class="form-group">
                  <label>Angka :</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
                </div>
        </div>
        <div class="modal-footer bg-warning text-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-right-from-bracket mr-2"></i>Batal/Keluar</button>
          <button type="submit" class="btn btn-primary" name="delete"><i class="fa-solid fa-trash-can mr-2"></i>Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
<div class="modal fade" id="edit-dosen-<?php echo $data['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="edit-dosen-<?php echo $data['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="edit-dosen<?php echo $data['id']; ?>Label"><i class="fa-solid fa-user-graduate mr-2"></i>Ubah Data Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="form-group">
                  <label>Mutu :</label>
                  <input type="text" name="mutu" class="form-control" value="<?php echo $data['mutu'];?>">
                  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                </div>
                <div class="form-group">
                  <label>Angka :</label>
                  <input type="text" name="angka" class="form-control" value="<?php echo $data['angka'];?>">
                </div>
                <div class="form-group">
                  <label>huruf :</label>
                  <input type="text" name="huruf" class="form-control" value="<?php echo $data['huruf'];?>">
                </div>
        </div>
        <div class="modal-footer bg-warning text-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-right-from-bracket mr-2"></i>Batal/Keluar</button>
          <button type="submit" class="btn btn-primary" name="update"><i class="fa-solid fa-pen-to-square mr-2"></i>Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
                      <?php
                    }
                    ?>
                </tbody>
              </table>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  
  <!-- Modal Tambah -->
  <div class="modal fade" id="tambah-dosen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tambah-mhsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="tambah-mhsLabel"><i class="fa-solid fa-bar-chart mr-2"></i>Tambah Nilai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="form-group">
                  <label >Mutu :</label>
                  <input type="text" name="mutu" class="form-control" value="<?php echo $mutu; ?>">
                </div>
                <div class="form-group">
                  <label>Angka :</label>
                  <input type="text" name="angka" class="form-control" value="<?php echo $angka; ?>">
                </div>
                <div class="form-group">
                  <label>Lambang :</label>
                  <input type="text" name="huruf" class="form-control" value="<?php echo $huruf; ?>">
                </div>
        </div>
        <div class="modal-footer bg-warning text-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-right-from-bracket mr-2"></i>Batal/Keluar</button>
          <button type="submit" class="btn btn-primary" name="save"><i class="fa-solid fa-floppy-disk mr-2"></i>Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    <script src="admin.js"></script>
  </body>
</html>