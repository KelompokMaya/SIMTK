<div id="editor-wrapper" class="col-xs-12" style="display: none;">
    <div class="box">
        <div class="box-header">
          <h3 id="title-edit" class="box-title">Tambah Data Siswa</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="add-siswa">
            <div class="form-group">
               <form role="form" method="post" action="" id="form-create-siswa">
                  <div class="col-xs-12">
                          <div class="btn-group pull-right">
                            <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                            <button type="button" class="btn btn-primary" data-loading-text="Loading..." onclick="submitx(this);" id="btn-submit">Tambah</button>                  
                        </div>
                  </div>
                <div class="col-xs-6">


                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" id="nama" type="text" class="form-control" data-link=""  placeholder="input ...">
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
                              <option  id="cur-jk" ></option>
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
                              <option id="cur-status"></option>
                              <option value="Aktif" >Aktif</option>
                              <option value="Non Aktif" >Non Aktif</option>
                              <option value="Lulus" >Lulus</option>
                          </select>  
                        </div>
                        
                        
                </div>
                <div class="col-xs-6">
                        <div class="form-group">
                          <label>Tahun Diterima</label>
                          <input name="tahun_diterima" id="tahun_diterima" type="text" class="form-control"  placeholder="input ...">
                        </div>

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
                          <textarea id="alamat_ibu" name="alamat_ibu"  class="form-control "></textarea>
                        </div>

                         <input name="createby" id="createby" type="hidden" class="form-control"  value="<?php echo $currUser; ?>">
                         <input name="create_time" id="create_time" type="hidden" class="form-control"  value="<?php echo date("Y/m/d") ?>">
                        
                        
                </div>
                
              </form>
            </div>
            
           
        </div>


    </div>
</div>


<div id="table-wrapper" class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div id="alert-tambah" class="alert alert-success" style="display: none;">
                <strong>Berhasil!</strong> Data Berhasil Disimpan !!
            </div>
            <div id="alert-hapus" class="alert alert-danger" style="display: none;">
                <strong>Berhasil!</strong> Data Berhasil Dihapus !!
            </div>
          <h3 class="box-title">Table Data Siswa</h3>
          <button id="btn-add" class="btn btn-primary btn-flat pull-right" data-toggle="tooltip" onclick="addSiswa();"><i class="fa fa-plus" ></i> Tambah Data Siswa</button>
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
                                 <button onclick="editSiswa(<?php echo $row->id_siswa; ?>);" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i></button>
                                <button onclick="deleteSiswa(<?php echo $row->id_siswa; ?>);" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Hapus">
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

    function addSiswa() {
        if($('#editor-wrapper').css('display')=='none'){
            $("#editor-wrapper").show('slow');
            //$('#editor-wrapper').css('display', 'block');
            
        }
        if($('#editor-wrapper2').css('display')=='block'){
          $('#editor-wrapper2').css('display', 'none');
            
        }
        $('#btn-add').addClass('disabled');
        $('#title-edit').html('Tambah Data Siswa'); 
        $('#btn-submit').html('Tambah');
    }
    //tambah dan edit siswa
        var submitx= function(ctx) {
        event.preventDefault();
        //$(ctx).addClass('disabled');

        // if($('#editor-judul').val()=='' || CKEDITOR.instances['editor-langkah'].getData()=='' || $('#editor-deskripsi').val()==''){
        //     $('#modal-message .modal-body').text('Silakan Lengkapi Inputan');
        //     $('#modal-message').modal();
        //     return;

        //} 

        if($('#btn-submit').html()=='Tambah'){ 
            $('#editor-wrapper').css('display', 'none');
            $('#preloader').css('display','block');
            var nama_lengkap = $('#nama').val();
            var no_induk = $('#nis').val();
            var tempat_lahir = $('#tempat_lahir').val();
            var tanggal_lahir = $('#tanggal_lahir').val();
            var jenis_kelamin = $('#jenis_kelamin').val(); 
            var alamat= $('#alamat').val();
            var status = $('#status').val();
            var tahun_diterima = $('#tahun_diterima').val();
            var nama_ayah = $('#nama_ayah').val();
            var no_hp_ayah = $('#no_ayah').val();
            var alamat_ayah = $('#alamat_ayah').val();
            var nama_ibu = $('#nama_ibu').val();
            var no_hp_ibu = $('#no_ibu').val();
            var alamat_ibu= $('#alamat_ibu').val();
            var createby= $('#createby').val();
            var create_date = $('#create_time').val()
            
            $.post(base_url+"Admin/Siswa/create", {nama_lengkap: nama_lengkap, no_induk: no_induk, tempat_lahir: tempat_lahir,tanggal_lahir:tanggal_lahir,jenis_kelamin:jenis_kelamin,alamat:alamat,status:status,tahun_diterima:tahun_diterima,nama_ayah:nama_ayah,no_hp_ayah:no_hp_ayah,alamat_ayah:alamat_ayah,nama_ibu:nama_ibu,no_hp_ibu:no_hp_ibu,alamat_ibu:alamat_ibu, createby:createby,create_date:create_date}, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#main-content').html(data);
                $(".table1").DataTable();
                $("#alert-tambah").css("display","block");
                $("#alert-tambah").fadeOut(3000);
            }); 
        }
        else if($('#btn-submit').html()=='Edit'){
            $('#editor-wrapper').css('display', 'none');
            $('#preloader').css('display','block');
            var id_siswa=$('#nama').attr('data-link');
            var nama_lengkap = $('#nama').val();
            var no_induk = $('#nis').val();
            var tempat_lahir = $('#tempat_lahir').val();
            var tanggal_lahir = $('#tanggal_lahir').val();
            var jenis_kelamin = $('#jenis_kelamin').val(); 
            var alamat= $('#alamat').val();
            var status = $('#status').val();
            var tahun_diterima = $('#tahun_diterima').val();
            var nama_ayah = $('#nama_ayah').val();
            var no_hp_ayah = $('#no_ayah').val();
            var alamat_ayah = $('#alamat_ayah').val();
            var nama_ibu = $('#nama_ibu').val();
            var no_hp_ibu = $('#no_ibu').val();
            var alamat_ibu= $('#alamat_ibu').val();
            var modifiedby= $('#createby').val();
            var modified_date = $('#create_time').val()
            $.post(base_url+"Admin/Siswa/update", {id_siswa:id_siswa,nama_lengkap: nama_lengkap, no_induk: no_induk, tempat_lahir: tempat_lahir,tanggal_lahir:tanggal_lahir,jenis_kelamin:jenis_kelamin,alamat:alamat,status:status,tahun_diterima:tahun_diterima,nama_ayah:nama_ayah,no_hp_ayah:no_hp_ayah,alamat_ayah:alamat_ayah,nama_ibu:nama_ibu,no_hp_ibu:no_hp_ibu,alamat_ibu:alamat_ibu, modifiedby:modifiedby,modified_date:modified_date}, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#main-content').html(data);
                $(".table1").DataTable();
                $("#alert-tambah").css("display","block");
                $("#alert-tambah").fadeOut(3000);

            }); 
        }
        
    };
    //edit siswa
    function editSiswa(id) {
        if($('#editor-wrapper').css('display')=='block'){
            $("#editor-wrapper").hide('slow');    
        }
        $('#btn-add').addClass('disabled');
        //$('#preloader').css('display','block');
        $.get(base_url+"Admin/Siswa/select/"+id, function(siswa) { 
            //$('#preloader').css('display','none');
            $('#editor-wrapper').show('slow');   
            
            $('#title-edit').html('Edit Data Siswa'); 
            $('#btn-submit').html('Edit');
            $('#nama').attr('data-link', siswa.id_siswa);
            $('#nama').val(siswa.nama_lengkap);
            $('#nis').val(siswa.no_induk);
            $('#tempat_lahir').val(siswa.tempat_lahir);
            $('#tanggal_lahir').val(siswa.tanggal_lahir);
            $('#cur-jk').html(siswa.jenis_kelamin); 
            $('#alamat').val(siswa.alamat);
            $('#cur-status').html(siswa.status);
            $('#tahun_diterima').val(siswa.tahun_diterima);
            $('#nama_ayah').val(siswa.nama_ayah);
            $('#no_ayah').val(siswa.no_hp_ayah);
            $('#alamat_ayah').val(siswa.alamat_ayah);
            $('#nama_ibu').val(siswa.nama_ibu);
            $('#no_ibu').val(siswa.no_hp_ibu);
            $('#alamat_ibu').val(siswa.alamat_ibu);

            
        }, 'json');
    }




  
    

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


    


    
   


   $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $('#btn-add').removeClass('disabled');  
        // $('#editor-wrapper').css('display', 'none');
        // $('#editor-wrapper2').css('display', 'none');
        $("#editor-wrapper").hide('slow');
        $('#form-create-siswa').trigger("reset");
        
    });

 



</script>