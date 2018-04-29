
<div id="pencarian" class="col-xs-12" style="display: none;">
   <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pencarian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Kelompok</label>
                    <div class="col-sm-5">
                        <select name="editor-tujuan_surat" id="editor-tujuan_surat" class="form-control"  >
                          <option value="Internal" >Kelompok 1</option>
                          <option value="External" >Kelpmpok 2</option>
                        </select>      
                     </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Periode</label>
                      <div class="col-sm-5">
                        <select name="editor-tujuan_surat" id="editor-tujuan_surat" class="form-control"  >
                          <option value="Internal" >tes 1</option>
                          <option value="External" >tes 2</option>
                        </select>      
                     </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-header">
                <button type="submit" class="btn btn-info pull-right btn-flat">Cari</button>
                <button id="btn-cancel" class="btn btn-default pull-right btn-flat">Cancel</button>
              
              </div>
              <!-- /.box-footer -->
            </form>
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
          <h3 class="box-title">Table Pembayaran</h3>

          <button id="btn-add" class="btn btn-primary btn-flat pull-right" data-toggle="tooltip" onclick="addSiswa();"><i class="fa fa-plus" ></i> Tambah Data Pembayaran </button>
          <a href="<?php echo base_url('Admin/Excel/export_excel') ?>" class="btn btn-warning btn-flat pull-right" data-toggle="tooltip" ><i class="fa fa-download " ></i> Export Data</a>
          <button id="btn-cari" class="btn btn-info btn-flat pull-right" data-toggle="tooltip" onclick="cari();"><i class="fa fa-search" ></i> Pencarian </button>
        </div>
        <!-- /.box-header 3998ad -->
        <div class="box-body table-responsive">
            <table class="table table1 table-bordered table-striped">
                <thead >
                    <tr style="background:  #551E1E; color: white; ">
                      
                        <th style="width: 10px;text-align: center;">No</th>
                        <th style="text-align: center;">ID Bayar</th>
                        <th style="text-align: center;">Nama Siswa</th>
                        <th style="text-align: center;">No Induk</th>
                        <th style="text-align: center;">Kelompok</th>
                        <th style="width: 150px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 <?php $i=1; ?>
                 <?php foreach ($aset->result() as $row): ?>
                    <tr>
                       <td style="text-align: center;"><?php echo $i; $i++; ?></td>
                        <td style="text-align: center;"><?php echo $row->tahun_diterima; ?></td>
                        <td><?php echo $row->nama_lengkap; ?></td>
                        <td><?php echo $row->no_induk; ?></td>
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
                        <th style="text-align: center;">ID Bayar</th>
                        <th style="text-align: center;">Nama Siswa</th>
                        <th style="text-align: center;">No Induk</th>
                        <th style="text-align: center;">Kelompok</th>
                        <th style="width: 150px; text-align: center;">Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    <!-- /.box-body -->
     </div>
    <!-- /.box -->
</div><!-- .col -->

<!--modal add Pembayaran!-->
<div id="modalAdd-pembayaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Pembayaran</h4>
         </div>
        <form role="form" method="post" action="" id="form-create-pembayaran">
         <div class="modal-body col-xs-12">
            <div class=" input-group">
                <input type="text" class="form-control" id="cari-nis" name="cari-nis" placeholder="Masukan No Induk Siswa">
                 <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat" onclick="cariNIS();" >Cari</button>
                 </span>
            </div>
            <br>
            <div id="tampildata" >
            <div class="form-group">
                  <label >Nama</label>
                  <input name="nama" id="nama" type="text" class="form-control"  readonly>
            </div>
            <div class="form-group">
                  <label >Kelompok</label>
                  <input  name="username" id="kelompok" type="text" class="form-control"  readonly>
            </div>
            </div>
             <div class="form-group">
                  <label >Priode Pembayaran</label>
                  <div class=" control-label"  >
                        <select name="priode-pembayaran" id="bulan" class="form-control "  >
                              <option value="Januari" >Januari</option>
                              <option value="Februari" >Februari</option>
                              <option value="Maret" >Maret</option>
                              <option value="April" >April</option>
                              <option value="Mei" >Mei</option>
                              <option value="Juni" >Juni</option>
                              <option value="Juli" >Juli</option>
                              <option value="Agustus" >Agustis</option>
                              <option value="September" >September</option>
                              <option value="Oktober" >Oktober</option>
                              <option value="November" >November</option>
                              <option value="Desember" >Desember</option>
                              
                          </select> 
                          <br>
                          <select name="priode-pembayaran" id="tahun" class="form-control"  >
                              <option value="2017" >2017</option>
                              <option value="2018" >2018</option>
                              <option value="2019" >2019</option>
                              <option value="2020" >2020</option>
                              <option value="2021" >2021</option>
                              
                          </select>                                       
                  </div>
            </div>
            <hr>
            <div style="text-align: center;font-size: 16px"><b>Item Pembayaran</b></div>
            <hr>
            <div class="form-group">
              <?php
               $i=1;
               foreach ($biaya->result() as $row): ?>
                  <div class="checkbox">
                    <label class="col-sm-6">
                      <input name="biaya" value="<?php echo $row->id; ?>" type="checkbox">
                      <?php echo $row->nama_biaya; ?>
                    </label>
                    <label class="col-sm-6">Rp. <?php echo $row->besaran_biaya; ?>,-</label>
                  </div>
               <?php 
               $i++;
               endforeach; ?>    
            </div>
          
         </div>
         <div class="modal-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-flat" id="btn-add-pembayaran" data-dismiss="modal">Submit</button>
          </div>
        </div>
      </form>
      </div>
   </div>
</div>

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
        $('#modalAdd-pembayaran').modal();
        $('#title-edit').html('Tambah Data Siswa'); 
        $('#btn-submit').html('Tambah');
    }
    function cari() {
        if($('#pencarian').css('display')=='none'){
            $("#pencarian").show('slow');
            //$('#editor-wrapper').css('display', 'block');
            
        }
        $('#btn-cari').addClass('disabled');
    }

    function cariNIS(){
      Nis = document.getElementById("cari-nis").value;
         
         $.ajax({
           url:"<?php echo base_url();?>Admin/Siswa/select_siswa/"+Nis+"",
           success: function(response){
           $("#tampildata").html(response);
           
           },
           dataType:"html"
         });

         return false;
    }
    $('#btn-add-pembayaran').one('click',function(event) {
        var id_siswa = $('#form-create-pembayaran').find('#id_siswa').val();
        var bulan = $('#form-create-pembayaran').find('#bulan').val();
        var tahun = $('#form-create-pembayaran').find('#tahun').val();
        var array = $.map($('input[name="biaya"]:checked'), function(c){return c.value; });
               
        $.post(base_url+"Admin/Pembayaran/create/",{array:array,id_siswa:id_siswa,bulan:bulan,tahun:tahun}, function(data) {
                $('#main-content').html(data);
                dataTable();
              });
      });


 
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
        $('#btn-cari').removeClass('disabled');  
        // $('#editor-wrapper').css('display', 'none');
        // $('#editor-wrapper2').css('display', 'none');
        $("#pencarian").hide('slow');
        $("#editor-wrapper").hide('slow');
        $('#form-create-siswa').trigger("reset");
        
    });

 



</script>