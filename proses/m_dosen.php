<?php
$nip    = "";
$nama   = "";
$telp   = "";
$alamat = "";
$berhasil_simpan = "";
$err    = "";
if(isset($_POST['save'])){
    $nip    = $_POST['nip'];
    $nama   = $_POST['nama'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    if($nip && $nama && $telp && $alamat){
        $simpan = mysqli_query($conn, "INSERT INTO m_dosen(nip, nama, alamat, telp) VALUES ('$nip', '$nama', '$alamat', '$telp')");
        if($simpan){
            $berhasil_simpan = "Data berhasil Disimpan!";
            $nip    = "";
            $nama   = "";
            $telp   = "";
            $alamat = "";
        }else
        $berhasil_simpan = "Koneksi ke Database bermasalah!";
    }else{
        $err = "Data Tidak Lengkap!";
    }
}

// ubah data 
if(isset($_POST['update'])){
    $nip    = $_POST['nip'];
    $nama   = $_POST['nama'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $id     = $_POST['id'];
    if($nip && $nama && $telp && $alamat){
        $edit = mysqli_query($conn, "UPDATE m_dosen set nip='$nip', nama='$nama', telp='$telp', alamat='$alamat' where id='$id'");
        if($edit){
            $berhasil_simpan = "Data berhasil Diubah!";
            $nip    = "";
            $nama   = "";
            $telp   = "";
            $alamat = "";
        }else
        $berhasil_simpan = "Koneksi ke Database bermasalah!";
    }else{
        $err = "Gagal Ubah Data!";
    }
}

// hapus data 
if(isset($_POST['delete'])){
    $id     = $_POST['id'];
    $nip    = $_POST['nip'];
    if($id){
        $hapus = mysqli_query($conn, "DELETE FROM m_dosen WHERE id='$id'");
        if($hapus){
            $berhasil_simpan = $nip. " Berhasil Dihapus!";
        }else{
            $berhasil_simpan = "Koneksi ke Database Bermasalah!";
        }
    }else{
        $err = "Gagal dihapus!";
    }
}
?>