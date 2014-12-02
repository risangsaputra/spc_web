<?php
include 'koneksi.php';

$id_user 	=$_POST['id_user'];
$nama		=$_POST['nama'];
$username	=$_POST['username'];
$password	=$_POST['password'];
$email		=$_POST['email'];

$pengacak	="YENJAGTVOEOHW26R256V";

//mendeskripsi password dengan md5 dan pengacak
$password	= md5($pengacak . md5($password) . $pengacak);
$sql=mysql_query("INSERT INTO user (id_user,nama,username,password,email) VALUES
				('','$nama','$username','$password','$email');");


if ($sql){
	echo "<script>location.href='login.php'</script>";
}				

else{
	echo "gagal";
}

?>