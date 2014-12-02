<?php
include 'koneksi.php';

$id_berita  =$_POST['id_berita'];
$judul		=$_POST['judul'];
$berita 	=$_POST['berita'];
$pengirim	=$_POST['pengirim'];
$kategori	=$_POST['kategori'];


 $sql_ubah="UPDATE berita SET
				judul       = '$judul',
    			berita  	= '$berita',
				pengirim	= '$pengirim',
				kategori	= '$kategori'
				
			  WHERE id_berita='$id_berita'";

mysql_query($sql_ubah,$konek) 
or die("Perubahan gagal".mysql_error());

echo "Data berhasil diubah";
header('location:http:index2.php?act=berita_tampil');

?>
