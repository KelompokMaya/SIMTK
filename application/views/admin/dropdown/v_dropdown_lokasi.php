<option value="0" ></option>
<?php foreach ($lokasi->result() as $option): ?>
     <option value="<?php echo $option->id_lokasi; ?>" > <?php echo $option->nama_lokasi; ?></option>    
<?php endforeach; ?>
        