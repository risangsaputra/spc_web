<?php
	include 'koneksi.php';
	error_reporting(0);
	$id_berita=$_GET['id_berita'];

$id_komentar	=$_POST['id_komentar'];
$nama			=$_POST['nama'];
$email			=$_POST['email'];
$tanggal		=$_POST['tanggal'];
$komentar		=$_POST['komentar'];
$id_berita		=$_POST['id_berita'];




$sql=mysql_query("INSERT INTO komentar (id_komentar,nama,email,komentar,tanggal,id_berita) VALUES 
				('','$nama','$email','$komentar','".date('Y-m-d')."','$id_berita');");



if ($sql) {
	header('location:http:index.php?act=tes');
}
else {
	echo "gagal";
}

?>