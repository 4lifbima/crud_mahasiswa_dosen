<?php
$mutu    = "";
$angka   = "";
$huruf   = "";
$berhasil_simpan = "";
$err    = "";
if(isset($_POST['save'])){
    $mutu    = $_POST['mutu'];
    $angka   = $_POST['angka'];
    $huruf   = $_POST['huruf'];
    if($mutu && $angka && $huruf){
        $simpan = mysqli_query($conn, "INSERT INTO m_nilai(mutu, angka, huruf) VALUES ('$mutu', '$angka', '$huruf')");
        if($simpan){
            $berhasil_simpan = "Data berhasil Disimpan!";
            $mutu    = "";
            $angka   = "";
            $huruf   = "";
        }else
        $berhasil_simpan = "Koneksi ke Database bermasalah!";
    }else{
        $err = "Data Tidak Lengkap!";
    }
}

// ubah data 
if(isset($_POST['update'])){
    $mutu    = $_POST['mutu'];
    $angka   = $_POST['angka'];
    $huruf   = $_POST['huruf'];
    $id     = $_POST['id'];
    if($mutu && $angka && $huruf){
        $edit = mysqli_query($conn, "UPDATE m_nilai set mutu='$mutu', angka='$angka', huruf='$huruf' where id='$id'");
        if($edit){
            $berhasil_simpan = "Data berhasil Diubah!";
            $mutu    = "";
            $angka   = "";
            $huruf   = "";
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
        $hapus = mysqli_query($conn, "DELETE FROM m_nilai WHERE id='$id'");
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