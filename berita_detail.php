<?php
include 'koneksi.php';
$id_berita=$_GET['id_berita'];

$sql="SELECT * FROM berita WHERE id_berita=$id_berita";

$qry=mysql_query($sql);

$sql2="SELECT * FROM komentar WHERE id_berita=$id_berita";

$qry2=mysql_query($sql2);

$count=mysql_num_rows($qry2);

while ($data=mysql_fetch_array($qry)) {

$id_berita =$data['id_berita'];

$judul =$data['judul'];

$berita =$data['berita'];

$pengirim =$data['pengirim'];

$gambar =$data['gambar'];

$tanggal =$data['tanggal'];

$juduls = ucwords($judul);
?>
     
        <div class="media-body">
         <div class="media">
          <a class="pull-left" href="#">
          <img class="img-thumbnail picture hidden-xs" src="gambar/<?php echo $data['gambar'];?>" width="460px" height="372px">
          </a>
             <h3 class="media-heading"> <?php echo"<a href=?act=berita_detail&id_berita=".$id_berita.">$juduls"?> </a></h3>
            <?php echo $berita ?>
            

          <ul class="list-inline list-unstyled">
            <li><span><i class="glyphicon glyphicon-calendar"></i><?php echo $tanggal; ?></span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-user"></i> <?php echo $data['pengirim'];?></span>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> <?php echo $count;?></span>
          </ul>           
                
    
       </div>
    </div>  

  <?php

}

?>
<div class="panel-heading">
                <h3 class="panel-title">
                    Recent Comments</h3>
            </div>
<?php
  include 'komentar_daftar.php';
?>
  <div class="row">
  <div class="col-md-6">
  <?php
  include 'komentar.php';
  ?>
</div>
</div>



