  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah
        <small>Paramedis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Paramedis</li>
      </ol>
    </section>
  
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH DATA PARAMEDIS</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" action="<?php echo base_url().'master/aksi_tambah_paramedis' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="inputEmail3" placeholder="Nama Paramedis">
                  </div>
                </div>
                 <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Spesialis</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="spesialis" class="form-control">
                        <option value=""></option>
                        <option value="Dalam">Dalam</option>
                        <option value="THT">THT</option>
                         <option value="Jantung">Jantung</option>
                         <option value="Hati">Hati</option>
                      </select>
                    </div>
                </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">telpon/Hp</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="telp" placeholder="...">
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
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success right">Simpan</button>
                
              
              <!-- /.box-footer -->
            </form>
            <a href="<?php echo base_url('master/m_paramedis'); ?>"><button type="button" class="btn btn-danger right">Cancel</button></a>
            </div>
          </div>
      </div>
      </div>

