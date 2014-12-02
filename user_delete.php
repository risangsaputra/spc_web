<?php
	include 'koneksi.php';

	$id_user=$_GET['id_user'];

	if (empty($id_user)){
		echo "Data belum dipilih";
	}

	else{
		$sql="DELETE from user WHERE id_user='$id_user'";
		mysql_query($sql,$konek)
		or die("Gagal perintah menghapus".mysql_error());

		echo "data yang dihapus berhasil";
		header('location:http:index2.php?act=user_delete');
	}



?>