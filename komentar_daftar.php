<?php

$sql="SELECT * FROM komentar WHERE id_berita=$id_berita";

$qry=mysql_query($sql);
while ($data=mysql_fetch_array($qry)) {
$id_berita   =$data['id_berita'];
$nama        =ucwords($data['nama']);
$komentar    =ucwords($data['komentar']);
$id_komentar =$data['id_komentar'];
$email       =ucwords($data['email']);

?>
        
           <div class="row">
            <div class="col-md-10">
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="css/user.png" class="img-circle img-responsive" alt="" width="80px" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <span><?php echo $email;?></span>
                                    <div class="mic-info">
                                        By: <?php echo $nama;?>  
                                    </div>
                                    <span class="glyphicon glyphicon-calendar"><?php echo $tanggal;?> </span>
                                </div>
                                <div class="comment-text">
                                    <?php echo $komentar;?>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
            </div>
            </div>
           </div>
        
    <?php


}?>