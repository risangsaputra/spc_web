<?php
include "koneksi.php";
?>

<h2>Data Berita</h2> <a href="?act=berita_input" class="btn btn-danger">Add</a>
<hr>

<table class="table">
<thead>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Berita</th>
        <th>Pengirim</th>
        <th>Kategori</th>
        <th>Action</th>
    </tr>
 </thead>
        
     <?php
    $sql = "select * from berita";
    $result = mysql_query($sql);
    $i=1;
 
    while ($data=mysql_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $i++ ?> </td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo substr($data ['berita'],0,105)?></td>
        <td><?php echo $data['pengirim']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td><a href="?act=berita_delete&id_berita=<?php echo $data['id_berita'];?>" title="Delete" onclick="return confirm('Apakah anda yakin akan menghapus pertanyaan ini ?')">
        <span class="glyphicon glyphicon-trash"></span></a>
         <a href="?act=berita_edit&id_berita=<?php echo $data['id_berita'];?>" title="edit">
        <span class="glyphicon glyphicon-pencil"></span></a>
        </td></center>
    </tr>
 <?php

 }
 ?>
        
        


    

</table>
