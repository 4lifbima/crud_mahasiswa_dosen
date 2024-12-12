<?php
$kode    = "";
$nama   = "";
$berhasil_simpan = "";
$err    = "";
if(isset($_POST['save'])){
    $kode    = $_POST['kode'];
    $nama   = $_POST['nama'];
    if($kode && $nama){
        $simpan = mysqli_query($conn, "INSERT INTO m_matkul(kode, matkul) VALUES ('$kode', '$nama')");
        if($simpan){
            $berhasil_simpan = "Data berhasil Disimpan!";
            $kode    = "";
            $nama   = "";
        }else
        $berhasil_simpan = "Koneksi ke Database bermasalah!";
    }else{
        $err = "Data Tidak Lengkap!";
    }
}

// ubah data 
if(isset($_POST['update'])){
    $kode    = $_POST['kode'];
    $nama   = $_POST['matkul'];
    $id     = $_POST['id'];
    if($kode && $nama){
        $edit = mysqli_query($conn, "UPDATE m_matkul set kode='$kode', matkul='$nama' where id='$id'");
        if($edit){
            $berhasil_simpan = "Data berhasil Diubah!";
            $kode    = "";
            $nama   = "";
        }else
        $berhasil_simpan = "Koneksi ke Database bermasalah!";
    }else{
        $err = "Gagal Ubah Data!";
    }
}

// hapus data 
if(isset($_POST['delete'])){
    $id     = $_POST['id'];
    $kode    = $_POST['kode'];
    if($id){
        $hapus = mysqli_query($conn, "DELETE FROM m_matkul WHERE id='$id'");
        if($hapus){
            $berhasil_simpan = $kode. " Berhasil Dihapus!";
        }else{
            $berhasil_simpan = "Koneksi ke Database Bermasalah!";
        }
    }else{
        $err = "Gagal dihapus!";
    }
}
?>