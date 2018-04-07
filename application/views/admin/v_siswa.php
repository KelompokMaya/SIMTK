<div id="editor-wrapper" class="col-xs-12" style="display: none;">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Data Siswa</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="add-aset">
            <div class="form-group">
               <form role="form" method="post" action="" id="form-create-aset">
                <div class="col-xs-6">

                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" id="nama" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>No Induk Siswa</label>
                          <input name="nis" id="nis" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control"  placeholder="input ...">
                        </div>
                         <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kelamin" id="jenis_kelamin" class="form-control " >
                              <option value="Laki-laki" >Laki-laki</option>
                              <option value="Perempuan" >Perempuan</option>
                          </select>  
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea id="alamat" name="alamat" data-link="" class="form-control "></textarea>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <select name="status" id="status" class="form-control " >
                              <option value="Aktif" >Aktif</option>
                              <option value="Non Aktif" >Non Aktif</option>
                              <option value="Lulus" >Lulus</option>
                          </select>  
                        </div>
                        <div class="form-group">
                          <label>Tahun Diterima</label>
                          <input name="tahun_diterima" id="tahun_diterima" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        
                </div>
                <div class="col-xs-6">

                        <div class="form-group">
                          <label>Nama Ayah</label>
                          <input name="nama_ayah" id="nama_ayah" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>No HP Ayah</label>
                          <input name="no_ayah" id="no_ayah" type="text" class="form-control"  placeholder="input ...">
                        </div>
                         <div class="form-group">
                          <label>Alamat Ayah</label>
                          <textarea id="alamat_ayah" name="alamat_ayah" data-link="" class="form-control "></textarea>
                        </div>
                        <div class="form-group">
                          <label>Nama Ibu</label>
                          <input name="nama_ibu" id="nama_ibu" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>No HP Ibu</label>
                          <input name="no_ibu" id="no_ibu" type="text" class="form-control"  placeholder="input ...">
                        </div>
                         <div class="form-group">
                          <label>Alamat Ibu</label>
                          <textarea id="alamat_ibu" name="alamat_ibu" data-link="" class="form-control "></textarea>
                        </div>
                        
                        <div class="btn-group pull-right">
                            <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                            <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-add-aset">Tambah</button>                  
                        </div>
                </div>
                
              </form>
            </div>
            
           
        </div>


    </div>
</div>

<div id="editor-wrapper2" class="col-xs-12" style="display: none;">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Aset</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="edit-aset">
            <div class="form-group">
               <form role="form" method="post" action="" id="form-create-aset">
                <div class="col-xs-6">

                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" id="edit-nama" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>No Induk Siswa</label>
                          <input name="nis" id="edit-nis" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input name="tempat_lahir" id="edit-tempat_lahir" type="text" class="form-control"  placeholder="input ...">
                        </div>
                         <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input name="tanggal_lahir" id="edit-tanggal_lahir" type="date" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kelamin" id="edit-jenis_kelamin" class="form-control " >
                              <option value="Laki-laki" >Laki-laki</option>
                              <option value="Perempuan" >Perempuan</option>
                          </select>  
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" id="edit-alamat" data-link="" class="form-control "></textarea>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <select name="status" id="edit-status" class="form-control " >
                              <option value="Aktif" >Aktif</option>
                              <option value="Non Aktif" >Non Aktif</option>
                              <option value="Lulus" >Lulus</option>
                          </select>  
                        </div>
                        <div class="form-group">
                          <label>Tahun Diterima</label>
                          <input name="tahun_diterima" id="edit-tahun_diterima" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        
                </div>
                <div class="col-xs-6">
                  
                        <div class="form-group">
                          <label>Nama Ayah</label>
                          <input name="nama_ayah" id="edit-nama_ayah" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>No HP Ayah</label>
                          <input name="no_ayah" id="edit-no_ayah" type="text" class="form-control"  placeholder="input ...">
                        </div>
                         <div class="form-group">
                          <label>Alamat Ayah</label>
                          <textarea name="alamat_ayah" id="edit-alamat_ayah" data-link="" class="form-control "></textarea>
                        </div>
                        <div class="form-group">
                          <label>Nama Ibu</label>
                          <input name="nama_ibu" id="edit-nama_ibu" type="text" class="form-control"  placeholder="input ...">
                        </div>
                        <div class="form-group">
                          <label>No HP Ibu</label>
                          <input name="no_ibu" id="edit-no_ibu" type="text" class="form-control"  placeholder="input ...">
                        </div>
                         <div class="form-group">
                          <label>Alamat Ibu</label>
                          <textarea name="alamat_ibu" id="edit-alamat_ibu" data-link="" class="form-control "></textarea>
                        </div>
                        
                        <div class="btn-group pull-right">
                            <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                            <button type="button" class="btn btn-warning btn-flat" data-loading-text="Loading..." id="btn-edit-aset">Edit</button>                  
                        </div>
                        <input hidden="hidden" name="id" id="edit-id"></input>
                </div>
                
              </form>
            </div>
           
        </div>
    </div>
</div>

<div id="table-wrapper" class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Table Data Siswa</h3>
          <button class="btn btn-primary btn-flat pull-right" data-toggle="tooltip" onclick="addAset();"><i class="fa fa-plus" id="add"></i> Tambah Data Siswa</button>
          <a href="<?php echo base_url('Admin/Excel/export_excel') ?>" class="btn btn-warning btn-flat pull-right" data-toggle="tooltip" ><i class="fa fa-download " ></i> Export Data</a>
        </div>
        <!-- /.box-header 3998ad -->
        <div class="box-body table-responsive">
            <table class="table table1 table-bordered table-striped">
                <thead >
                    <tr style="background:  #551E1E; color: white; ">
                      
                        <th style="width: 10px;text-align: center;">No</th>
                        <th style="text-align: center;">No Induk</th>
                        <th style="text-align: center;">Nama Siswa</th>
                        <th style="text-align: center;">Tahun Diterima</th>
                        <th style="text-align: center;">Status</th>
                        <th style="width: 150px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 <?php $i=1; ?>
                 <?php foreach ($aset->result() as $row): ?>
                    <tr>
                       <td style="text-align: center;"><?php echo $i; $i++; ?></td>
                        <td><?php echo $row->no_induk; ?></td>
                        <td><?php echo $row->nama_lengkap; ?></td>
                        <td style="text-align: center;"><?php echo $row->tahun_diterima; ?></td>
                        <td style="text-align: center;"><?php echo $row->status; ?></td>
                        <td style=" width: 100px;text-align: center;">
                            <div class="btn-group">
                                 <button onclick="editAset(<?php echo $row->id; ?>);" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i></button>
                                <button onclick="deleteSiswa(<?php echo $row->id; ?>);" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Hapus">
                                <i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th style="width: 10px;text-align: center;">No</th>
                        <th style="text-align: center;">No Induk</th>
                        <th style="text-align: center;">Nama Siswa</th>
                        <th style="text-align: center;">Tahun Diterima</th>
                        <th style="text-align: center;">Status</th>
                        <th style="width: 150px; text-align: center;">Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    <!-- /.box-body -->
     </div>
    <!-- /.box -->
</div><!-- .col -->


 <!-- modal konfirmasi hapus -->
<div id="modalDelete-siswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
         </div>
         <div class="modal-body">
             Apakah anda ingin menghapus Data ini?
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tidak</button>
               <button id="btn-delete-siswa" type="button" class="btn btn-danger btn-flat">Ya</button>
            </div>
         </div>
      </div>
   </div>
</div>



<!--modal warning menu!-->
<div id="modalWarning-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Gagal Menambahkan Data</h4>
         </div>
         <div class="modal-body">
            Nama Aset Kosong !!!
         </div>
         <div class="modal-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">tutup</button>
          </div>
        </div>
      </div>
   </div>
</div>


<script type="text/javascript">

  
     $('#modalWarning-user').appendTo('body');
     $('#modalDelete-siswa').appendTo('body');

    function addAset() {
        if($('#editor-wrapper').css('display')=='none'){
            $("#editor-wrapper").show('slow');
            //$('#editor-wrapper').css('display', 'block');
            
        }
        if($('#editor-wrapper2').css('display')=='block'){
          $('#editor-wrapper2').css('display', 'none');
            
        }
        
        
    }
  $('#btn-add-aset').one('click',function(event) {
           $('#preloader').css('display','block');
           $('#editor-wrapper').css('display', 'none');
            
            var nama = $('#add-aset').find('#nama').val();
            var manufaktur = $('#add-aset').find('#manufaktur').val();
            var status = $('#add-aset').find('#status').val();
            var kampus_id = $('#add-aset').find('#kampus_id').val();
            var fakultas_id = $('#add-aset').find('#fakultas_id').val();
            var jurusan_id = $('#add-aset').find('#jurusan_id').val();
            var lokasi_id = $('#add-aset').find('#lokasi_id').val();
            var noseri = $('#add-aset').find('#noseri').val();
            var tipe = $('#add-aset').find('#tipe').val();
            var model = $('#add-aset').find('#model').val();
            var noinventory = $('#add-aset').find('#noinventory').val();
            var tgldipasang = $('#add-aset').find('#tgldipasang').val();
            var trakhirdiperbaiki = $('#add-aset').find('#trakhirdiperbaiki').val();
           
            $.post(base_url+"Admin/Aset/create/", {nama: nama, manufaktur: manufaktur, status: status,kampus_id:kampus_id, fakultas_id: fakultas_id, jurusan_id: jurusan_id, lokasi_id: lokasi_id, noseri: noseri, tipe: tipe, model: model,noinventory:noinventory,tgldipasang:tgldipasang,trakhirdiperbaiki:trakhirdiperbaiki }, function(data) {
                $('#form-create-aset').trigger("reset");
                $('#preloader').css('display','none');
                $('#main-content').html(data);
                dataTable();
                //console.log(data);
            }); 
            if (nama=='') {
               $('#modalWarning-user').modal();
            }
        });

    

  function deleteSiswa(id) {
      $('#modalDelete-siswa').modal();
      $('#btn-delete-siswa').click(function(event) {
        $('#modalDelete-siswa').modal('hide');
        $('#preloader').css('display','block');
        $.get(base_url+"Admin/Siswa/delete/"+id, function(data) {
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      });

    }


    function editAset(id) {
      if($('#editor-wrapper').css('display')=='block'){
            $('#editor-wrapper').css('display', 'none');
            
        }
      //$('#editor-wrapper2').css('display', 'block');
      $("#editor-wrapper2").show('slow');
      $.get(base_url+"Admin/Aset/select/"+id, function(aset) {
            var aset=jQuery.parseJSON(aset+"");
            
           $('#edit-id').val(aset.id_aset);
            $('#edit-nama').val(aset.nama);
            $('#edit-manufaktur').val(aset.manufaktur);
            $('#edit-status').val(aset.status);
            $('#edit-noseri').val(aset.noseri);
            $('#edit-tipe').val(aset.tipe);
            $('#edit-model').val(aset.model);
            $('#edit-noinventory').val(aset.noinventory);
            $('#edit-tgldipasang').val(aset.tgldipasang);
            $('#edit-trakhirdiperbaiki').val(aset.trakhir_diperbaiki);
            $('#btn-edit-aset').one('click',function(event) {
            $('#preloader').css('display','block');
            $('#editor-wrapper2').css('display', 'none');

            var id = $('#edit-aset').find('#edit-id').val();
            var nama = $('#edit-aset').find('#edit-nama').val();
            var manufaktur = $('#edit-aset').find('#edit-manufaktur').val();
            var status = $('#edit-aset').find('#edit-status').val();
            var noseri = $('#edit-aset').find('#edit-noseri').val();
            var tipe = $('#edit-aset').find('#edit-tipe').val();
            var model = $('#edit-aset').find('#edit-model').val();
            var noinventory = $('#edit-aset').find('#edit-noinventory').val();
            var tgldipasang = $('#edit-aset').find('#edit-tgldipasang').val();
            var trakhirdiperbaiki = $('#edit-aset').find('#edit-trakhirdiperbaiki').val();
             

             /* var id = $('#edit-id').val();
              var nama = $('#edit-nama').val();
              var manufaktur = $('#edit-manufaktur').val();
              var status = $('#edit-status').val();
              var fakultas_id = $('#edit-fakultas_id').val();
              var jurusan_id = $('#edit-jurusan_id').val();
              var lokasi_id = $('#edit-lokasi_id').val();
              var noseri = $('#edit-noseri').val();
              var tipe = $('#edit-tipe').val();
              var modal = $('#edit-model').val();
              var trakhirdiperbaiki= $('#edit-trakhirdiperbaiki').val();
              */

                
               $.post(base_url+"Admin/Aset/update/", {id:id, nama: nama, manufaktur: manufaktur, status: status,  noseri: noseri, tipe: tipe, model: model,noinventory:noinventory, tgldipasang:tgldipasang, trakhirdiperbaiki:trakhirdiperbaiki }, function(data, textStatus, xhr) {
                    
                    $('#form-edit-aset').trigger("reset");
                    $('#preloader').css('display','none');
                    $('#main-content').html(data);
                    dataTable();
                }); 

            }); 
        });

        
    }
     


    
   


   $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $('#btn-add').removeClass('disabled');  
        // $('#editor-wrapper').css('display', 'none');
        // $('#editor-wrapper2').css('display', 'none');
        $("#editor-wrapper").hide('slow');
        $("#editor-wrapper2").hide('slow');
        $('#ubah-lokasi').css('display','none');
        $('#ubah-lokasi').trigger("reset");
        
    });



</script>