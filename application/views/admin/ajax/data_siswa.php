			<?php if(empty($siswa)){ ?>
			<div class="form-group">
                  <label >Nama</label>
                  <input name="username" id="nama" type="text" class="form-control" value="" placeholder="Data Tidak Ditemukan"  readonly>
            </div>
            <div class="form-group">
                  <label >Kelompok</label>
                  <input  name="username" id="kelompok" type="text" class="form-control" value="" placeholder="Data Tidak Ditemukan"  readonly>
            </div>
            <?php } else { ?>
			 <?php foreach ($siswa as $row): ?>
			<div class="form-group">
                  <label >Nama</label>
                  <input name="username" id="nama" type="text" class="form-control" value="<?php echo $row->nama_lengkap; ?>"  readonly>
            </div>
             <input name="id_siswa" id="id_siswa" type="hidden" value="<?php echo $row->id_siswa; ?>"  \>
            <div class="form-group">
                  <label >Kelompok</label>
                  <input  name="username" id="kelompok" type="text" class="form-control" value="<?php echo $row->kelompok; ?>"  readonly>
            </div>
            <?php endforeach; }?>  