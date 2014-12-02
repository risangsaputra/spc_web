
<br>
<form action="komentar_simpan.php" method="POST">
<input name="id_berita" type="text" value="<?php echo $id_berita;?>" hidden/>
<input name="id_komentar" type="text" hidden/>
<label>Nama</label><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
<label>Email</label><input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
<label>Pesan</label><textarea class="form-control"  rows="10px" name="komentar" required></textarea>
<br>
 <div class="col-md-12 text-right">
<button type="submit" class="btn btn-primary btn-sm">Kirim</button>
</div>
</form>
                