<?php
    include 'lib/conn.php';
    include 'proses/m_dosen.php';
?>
            <h3 class="mb-3"><i class="fa-solid fa-users mr-2"></i>Daftar Dosen</h3><hr>
            <a href="#" class="btn btn-primary btn-sm text-white mb-2" data-toggle="modal" data-target="#tambah-dosen"><i class="fa-solid fa-plus mr-2"></i>Tambah Dosen</a>
            
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
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    $tampil = mysqli_query($conn, "SELECT * FROM m_dosen");
                    while($data = mysqli_fetch_array($tampil)){
                        ?> 
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $data['nip']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
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
                  <label>NIP Dosen :</label>
                  <input type="text" name="nip" class="form-control" aria-describedby="nip" value="<?php echo $data['nip'];?>" readonly>
                  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                </div>
                <div class="form-group">
                  <label>Nama Dosen :</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="tlp_mhs">Telp :</label>
                    <input type="number" name="telp" class="form-control" value="<?php echo $data['telp'];?>" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat :</label>
                    <textarea name="alamat" cols="30" rows="4" class="form-control" readonly><?php echo $data['alamat'];?></textarea>
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
                  <label>NIP Dosen :</label>
                  <input type="text" name="nip" class="form-control" value="<?php echo $data['nip'];?>">
                  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                </div>
                <div class="form-group">
                  <label>Nama Mahasiswa :</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>">
                </div>
                <div class="form-group">
                    <label for="tlp_mhs">Telp :</label>
                    <input type="number" name="telp" class="form-control" value="<?php echo $data['telp'];?>">
                </div>
                <div class="form-group">
                    <label>Alamat :</label>
                    <textarea name="alamat" cols="30" rows="4" class="form-control"><?php echo $data['alamat'];?></textarea>
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
          <h5 class="modal-title" id="tambah-mhsLabel"><i class="fa-solid fa-users mr-2"></i>Tambah Data Dosen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="form-group">
                  <label >NIP DOSEN :</label>
                  <input type="text" name="nip" class="form-control" placeholder="NIP Dosen">
                </div>
                <div class="form-group">
                  <label>Nama Dosen :</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                    <label>Telp :</label>
                    <input type="number" name="telp" class="form-control" value="<?php echo $telp; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat :</label>
                    <textarea name="alamat"  cols="30" rows="4" class="form-control"><?php echo $alamat; ?></textarea>
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