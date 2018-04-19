<link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.11/plugins/datepicker/datepicker3.css"); ?>">
  <!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.11/plugins/select2/select2.min.css"); ?>">
<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
</style>


<div class="col-xs-12">
    <div class="box">
        
        <!-- /.box-header -->
        <div class="box-body table-responsive" id="list-table-menu">
            <table id="" class="table table1 table-bordered table-striped">
                <thead>
                    <tr style="background:  #551E1E; color: white">
                        <th style="text-align: center; width: 20px">No</th>
                        <th>No Induk</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Bayar</th>
                        <th style="text-align: center; width: 180px">Aksi</th>
                                              
                    </tr>
                </thead>
                <tbody>
                 <?php $i=1;  ?>
                 <?php foreach ($history->result() as $row): ?>
                    <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $row->no_induk; ?></td>
                        <td><?php echo $row->nama_lengkap; ?></td>
                        <td><?php echo 'xx'; ?></td>
                        <td>
                          <div class="btn-group">
                            <button onclick="Detail(<?php echo $row->siswa_id; ?>);" class="btn btn-primary btn-flat" type="button" data-toggle="tooltip" >
                                <i> Detail </i>
                            </button>
                          </div>
                          <div class="btn-group">
                             <button onclick="DetailPerpindahan(<?php echo $row->siswa_id; ?>);" class="btn btn-warning btn-flat" type="button" data-toggle="tooltip" >
                                <i> Detail Pembayaran</i>
                            </button>
                          </div>
                        </td>
                        
                        
                      
                    </tr>
                <?php endforeach; ?>
            
                </tbody>
                <tfoot>
                     <tr>
                         <th>No</th>
                        <th>No Induk</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Bayar</th>
                        <th style="text-align: center;">Aksi</th>
                        
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>

<!-- modal detail aset!-->
<div class="modal fade" id="modalDetail-aset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title" id="myModalLabel">Detail Siswa</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="" id="form-detail">

                <div class="col-xs-6">

                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" id="nama" type="text" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                          <label>No Induk Siswa</label>
                          <input name="nis" id="nis" type="text" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control"  disabled>
                        </div>
                         <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input name="jenis_kelamin" id="jenis_kelamin" type="text" class="form-control"  disabled>
                        </div>
                        
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea id="alamat" name="alamat" data-link="" class="form-control " disabled></textarea>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <input name="status" id="status" type="text" class="form-control"  disabled>
                        </div>
                        
                        
                </div>
                <div class="col-xs-6">
                        <div class="form-group">
                          <label>Tahun Diterima</label>
                          <input name="tahun_diterima" id="tahun_diterima" type="text" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                          <label>Nama Ayah</label>
                          <input name="nama_ayah" id="nama_ayah" type="text" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                          <label>No HP Ayah</label>
                          <input name="no_ayah" id="no_ayah" type="text" class="form-control"  disabled>
                        </div>
                         <div class="form-group">
                          <label>Alamat Ayah</label>
                          <textarea id="alamat_ayah" name="alamat_ayah" data-link="" class="form-control " disabled></textarea>
                        </div>
                        <div class="form-group">
                          <label>Nama Ibu</label>
                          <input name="nama_ibu" id="nama_ibu" type="text" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                          <label>No HP Ibu</label>
                          <input name="no_ibu" id="no_ibu" type="text" class="form-control"  disabled>
                        </div>
                         <div class="form-group">
                          <label>Alamat Ibu</label>
                          <textarea id="alamat_ibu" name="alamat_ibu" data-link="" class="form-control " disabled></textarea>
                        </div>
                        
                        
                </div>
          
          <div class="modal-footer">
            <div class="btn-group">
                <button id="btn-ok" type="button" class="btn btn-primary btn-flat" data-dismiss="modal">OK</button>
            </div>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
</div>
</div>

<!-- modal detail perpindahan!-->
<div class="modal fade" id="modalDetail-pembayaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title" id="myModalLabel">Detail Pembayaran</h4>
          </div>
          <div class="modal-body">
           
              <div id="form-detail-pembayaran" class="form-group">
              </div>
                
              <div class="modal-footer">
                <div class="btn-group">
                    <button id="btn-ok" type="button" class="btn btn-primary btn-flat" data-dismiss="modal">OK</button>
                </div>
              </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
</div>
</div>



<script type="text/javascript">

    $('#modalDetail-aset').appendTo('body');
   
    function Detail(id){
     
      $.get(base_url+"Admin/Siswa/select/"+id, function(aset) {
            var aset=jQuery.parseJSON(aset+"");
            $('#modalDetail-aset').modal();
            $('#nama').val(aset.nama_lengkap);
            $('#nis').val(aset.no_induk);
            $('#tempat_lahir').val(aset.tempat_lahir);
            $('#tanggal_lahir').val(aset.tanggal_lahir);
            $('#jenis_kelamin').val(aset.jenis_kelamin);
            $('#alamat').val(aset.alamat);
            $('#status').val(aset.status);
            $('#tahun_diterima').val(aset.tahun_diterima);
            $('#nama_ayah').val(aset.nama_ayah);
            $('#no_ayah').val(aset.no_hp_ayah);
            $('#alamat_ayah').val(aset.alamat_ayah);
            $('#nama_ibu').val(aset.nama_ibu);
            $('#no_ibu').val(aset.no_hp_ibu);
            $('#alamat_ibu').val(aset.alamat_ibu);
    });

    }

    function DetailPerpindahan(id){
     $('#modalDetail-pembayaran').modal();
       $.ajax({
         url:"<?php echo base_url();?>Admin/history/select/"+id+"",
         success: function(response){
         $("#form-detail-pembayaran").html(response);

         },
         dataType:"html"
       });
        return false;
    }

    $(document).on('click', '#btn-ok', function(event) {
       event.preventDefault();
        $('#form-detail').trigger("reset");  
    });

    

   
</script>
