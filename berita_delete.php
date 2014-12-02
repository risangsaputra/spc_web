<?php
	include 'koneksi.php';

	$id=$_GET['id_berita'];

	if (empty($id)){
		echo "Data belum dipilih";
	}

	else{
		$sql="DELETE from berita WHERE id_berita='$id'";
		mysql_query($sql,$konek)
		or die("Gagal perintah menghapus".mysql_error());

		echo "data yang dihapus berhasil";
		header('location:http:index2.php?act=berita_tampil');
	}



?>