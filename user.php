<?php
include "koneksi.php";
?>

<h2>Data Berita</h2> <a href="?act=berita_input" class="btn btn-danger">Add</a>
<hr>

<table class="table">
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th colspan="2">Action</th>
    </tr>
 </thead>
        
     <?php
    $sql = "select * from user";
    $result = mysql_query($sql);
    $i=1;
 
    while ($data=mysql_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $i++ ?> </td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><a href="?act=user_delete&id_user=<?php echo $data['id_user'];?>" title="Delete" onclick="return confirm('Apakah anda yakin akan menghapus pertanyaan ini ?')">
        <span class="glyphicon glyphicon-trash"></span></a>
         <a href="?act=user_edit&id_user=<?php echo $data['id_user'];?>" title="edit">
        <span class="glyphicon glyphicon-pencil"></span></a>
        </td></center>
    </tr>
 <?php

 }
 ?>
        
        


    

</table>
