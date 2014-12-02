
	<div class="row">
    
      <div class="col-md-5 col-md-offset-3">
    
       
    
          <form class="form-horizontal" action="berita_simpan.php" method="post" enctype="multipart/form-data">
    
          <fieldset>
    
            <legend class="text-center">INPUT BERITA</legend>
    
            <!-- Name input-->
            <div class="form-group">
            
              <label class="col-md-3 control-label" for="name">Judul</label>
              <div class="col-md-9">
                <input id="judul" name="judul" type="text" placeholder="Judul Berita" class="form-control" required>
              </div>
            
            </div>
    
            <!-- Message body -->
            <div class="form-group">
            
              <label class="col-md-3 control-label" for="message">Berita</label>
              <div class="col-md-9">
                <textarea class="form-control" id="berita" name="berita" placeholder="Masukkan berita..." rows="5" required></textarea>
              </div>
            
            </div>
             <!--slect kategory-->

            <div class="form-group">
             <label class="col-md-3 control-label" for="kategori">Kategori</label> 
             
             <div class="col-md-9">
                <select name="kategori" id="kategori" class="form-control" required>
                    <option disabled="">-- pilih kategory --</option>
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
                <input id="pengirim" name="pengirim" type="text" placeholder="Pengirim" class="form-control" required
                 value="<?php session_start();
                              echo $_SESSION['username'];
                        ?>" readonly>
              </div>
            
            </div>
            <!-- image input -->
            <div class="form-group">
            
              <label class="col-md-3 control-label" for="image">image</label>
              <div class="col-md-9">
                <input id="gambar" name="gambar" type="file" class="form-control">
              </div>
            
            </div>
              
            <!-- Form actions -->
            <div class="form-group">
   
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm">Reset</button>
              </div>
   
            </div>
          </fieldset>
   
          </form>
   
       
   
      </div>
	
	</div>
