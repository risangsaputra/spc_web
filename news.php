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