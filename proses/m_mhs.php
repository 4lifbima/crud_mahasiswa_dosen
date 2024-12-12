<?php
$nim    = "";
$nama   = "";
$telp   = "";
$alamat = "";
$berhasil_simpan = "";
$err    = "";
if(isset($_POST['simpan'])){
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    if($nim && $nama && $telp && $alamat){
        $simpan = mysqli_query($conn, "INSERT INTO m_mahasiswa(nim, nama, alamat, telp) VALUES ('$nim', '$nama', '$alamat', '$telp')");
        if($simpan){
            $berhasil_simpan = "Data berhasil Disimpan!";
            $nim    = "";
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
if(isset($_POST['edit'])){
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $id     = $_POST['id'];
    if($nim && $nama && $telp && $alamat){
        $edit = mysqli_query($conn, "UPDATE m_mahasiswa set nim='$nim', nama='$nama', telp='$telp', alamat='$alamat' where id='$id'");
        if($edit){
            $berhasil_simpan = "Data berhasil Diubah!";
            $nim    = "";
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
if(isset($_POST['hapus'])){
    $id     = $_POST['id'];
    $nim    = $_POST['nim'];
    if($id){
        $hapus = mysqli_query($conn, "delete from m_mahasiswa where id='$id'");
        if($hapus){
            $berhasil_simpan = $nim. " Berhasil Dihapus!";
        }else{
            $berhasil_simpan = "Koneksi ke Database Bermasalah!";
        }
    }else{
        $err = "Gagal dihapus!";
    }
}
?>