<?php
include 'koneksi.php';

$id_berita=$_GET['id_berita'];

$sql="SELECT * FROM berita WHERE id_berita='$id_berita'";
$qry=mysql_query($sql);
$data=mysql_fetch_array($qry);

$id_berita =$data['id_berita'];
$judul =$data['judul'];
$berita =$data['berita'];
$pengirim =$data['pengirim'];
$gambar =$data['gambar'];
$kategori=$data['kategori'];

?>


	<div class="row">
    
      <div class="col-md-10 col-md-offset--1">
    
       
          <form class="form-horizontal" action="berita_edit_simpan.php" method="post" enctype="multipart/form-data">
    
          <fieldset>
    
            <legend class="text-center">Edit Berita</legend>
    
             <div class="form-group">
            
              
              <div class="col-md-9">
                <input id="id_berita" name="id_berita" type="text"  value="<?php echo $id_berita; ?>" hidden/>
              </div>
            
            </div>

            <!-- Name input-->
            <div class="form-group">
            
              <label class="col-md-3 control-label" for="name">Judul</label>
              <div class="col-md-9">
                <input id="judul" name="judul" type="text"  class="form-control" value="<?php echo $judul; ?> ">
              </div>
            
            </div>

            <!-- Message body -->
            <div class="form-group">
            
              <label class="col-md-3 control-label" for="message">Berita</label>
              <div class="col-md-9">
                <textarea class="form-control" id="berita" name="berita" rows="5" ><?php echo $berita; ?></textarea>
              </div>
            
            </div>

            <!--slect kategory-->

            <div class="form-group">
             <label class="col-md-3 control-label" for="kategori">Kategori</label> 
             
             <div class="col-md-9">
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="<?php echo $kategori;?>"><?php echo $kategori;?></option>
                    <option value="sport">Sport</option>
                    <option value="politik">Politik</option>
                    <option value="entertainment">Entertainment</option>
                      
                </select>   
             </div>
            
            </div>

            <!-- Email input-->
            <div class="form-group">
            
              <label class="col-md-3 control-label" for="email">Pengirim</label>
              <div class="col-md-9">
                <input id="pengirim" name="pengirim" type="text" class="form-control" value="<?php echo $pengirim; ?>">
              </div>
            
            </div>
          
            
              
            <!-- Form actions -->
            <div class="form-group">
   
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                <button type="reset" class="btn btn-danger btn-sm">Reset</button>
              </div>
   
            </div>
          </fieldset>
   
          </form>
   
        </div>
   
      
	
	</div>