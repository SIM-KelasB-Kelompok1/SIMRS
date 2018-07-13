  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah
        <small>Ruang Rawat Inap</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Ruang Rawat Inap</li>
      </ol>
    </section>
  
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH DATA RUANGAN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" action="<?php echo base_url().'master/aksi_tambah_ruang_rawat_inap' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ruangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ruangan" id="inputEmail3" placeholder="Nama Ruangan">
                  </div>
                </div>
              </div>
              
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kelas" id="inputEmail3" placeholder="Kelas">
                  </div>
                </div>
                <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Kategori</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="kategori" class="form-control">
                        <option value=""></option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="VIP">VIP</option>
                        <option value="VVIP">VVIP</option>
                      </select>
                    </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 control-label">No_Kamar</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_kamar" id="inputEmail3" placeholder="No_Kamar">
                  </div>
                </div>
             
                <div class="form-group">
                  <label class="col-sm-2 control-label">Taif</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tarif" id="inputEmail3" placeholder="Tarif">
                  </div>
                </div>
             
                 <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Status</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="status" class="form-control">
                        <option value=""></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Non-Aktif">Non_Aktif</option>
                      </select>
                    </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success right">Simpan</button>
                
              
              <!-- /.box-footer -->
            </form>
            <a href="<?php echo base_url('master/m_ruang_rawat_inap'); ?>"><button type="button" class="btn btn-danger right">Cancel</button></a>
            </div>
          </div>
      </div>
      </div>

