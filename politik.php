<?php
include 'koneksi.php';

@$page=$_GET['page'];

if($page=="" || $page=="1")
{
    $page1=0;
}
else{
    $page1=($page*4)-4;
}

$sql="SELECT * FROM berita where kategori='politik' ORDER BY id_berita DESC limit $page1,4";
$qry1=mysql_query("SELECT * from berita where kategori='politik'");
$qry=mysql_query($sql);
$count=mysql_num_rows($qry1);
while ($data=mysql_fetch_array($qry)) {
$id_berita =$data['id_berita'];
$judul =$data['judul'];
$berita =$data['berita'];
$pengirim =$data['pengirim'];
$gambar =$data['gambar'];
$tanggal =$data['tanggal'];
$num_rows = mysql_num_rows($qry);
$juduls = ucwords($judul);
$readmore = substr($berita,10,strpos($berita, chr(10)));
?>

 
   <div class="well">
      <div class="media">
        <a class="pull-left" href="#">
            <img src="gambar/<?php echo $data['gambar'];?>" width="200px" height="200px" class="img-thumbnail">
        </a>
        <div class="media-body">
            <h3 class="media-heading"><?php echo"<a href=?act=berita_detail&id_berita=".$id_berita.">$juduls </a>" ?></h3>
      <br>
          <p><?php echo substr($data ['berita'],0,105); ?></p>
          <ul class="list-inline list-unstyled">
            <li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo $tanggal;?> </span></li>
            <li>|</li>
            <li>
               <span><i class="glyphicon glyphicon-user"></i> <?php echo $pengirim; ?></span>
            </li>
            </ul>
       </div>
    </div>
  </div>


  <?php

}
$a=$count/4;
$a=ceil($a);
?>
<nav>
<ul class="pagination center">
<li><a href="#">Prev</a></li>
<?php
for ($i=1; $i<=$a; $i++) { 
    ?>  
    <li><a href="index.php?act=politik&page=<?php echo $i;?>" ><?php echo $i; ?> </a> </li>


    <?php  
}
?>
<li><a href="">Next</a></li>
</ul>
</nav>
