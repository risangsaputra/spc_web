<?php

include "koneksi.php";
error_reporting(0);

$id_berita  =$_POST['id_berita'];
$judul		=$_POST['judul'];
$berita 	=$_POST['berita'];
$pengirim	=$_POST['pengirim'];
$gambar		=$_POST['gambar'];
$tanggal	=$_POST['tanggal'];
$kategori	=$_POST['kategori'];

$uploaddir = "gambar/";
$fileName   = $_FILES['gambar']['name'];
$uploadfile = $uploaddir.$fileName;
$tmpName    = $_FILES['gambar']['tmp_name'];
$size       = $_FILES['gambar']['size'];
$type       = $_FILES['gambar']['type'];
$error      = $_FILES['gambar']['error'];



$sql = mysql_query("INSERT INTO berita (id_berita,judul,berita,pengirim,gambar,tanggal,kategori) 
	    VALUES ('$id_berita','$judul','$berita','$pengirim','$fileName','".date('Y-m-d')."','$kategori');");
if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile)) {
    echo "Berhasil";
    header('location:http:index2.php?act=berita_tampil');
}

else{
	echo "gagal";
}