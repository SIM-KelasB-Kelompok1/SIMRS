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
        <li class="active">Edit Ruang Rawat Inap</li>
      </ol>
    </section>
  
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT DATA RUANGAN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($ruang_rawat_inap as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_ruang_rawat_inap' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama_Ruangan</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_ruangan" value="<?php echo $d->id_ruangan ?>">
                    <input type="text" class="form-control" name="nama_ruangan" value="<?php echo $d->nama_ruangan ?>">
                  </div>
                </div>
          
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelas</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_ruangan" value="<?php echo $d->id_ruangan ?>">
                    <input type="text" class="form-control" name="kelas" value="<?php echo $d->kelas ?>">
                  </div>
                </div>
          
          
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_ruangan" value="<?php echo $d->id_ruangan ?>">
                    <input type="text" class="form-control" name="kattegori" value="<?php echo $d->kategori ?>">
                  </div>
                </div>
            
          
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No_Kamar</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_ruangan" value="<?php echo $d->id_ruangan ?>">
                    <input type="text" class="form-control" name="no_kamar" value="<?php echo $d->no_kamar ?>">
                  </div>
                </div>
   
             
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tarif</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_ruangan" value="<?php echo $d->id_ruangan ?>">
                    <input type="text" class="form-control" name="tarif" value="<?php echo $d->tarif ?>">
                  </div>
                </div>
                 <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Status</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="status" class="form-control">
                        <option value=""></option>
                        <option <?php if($d->status == "Aktif") {echo "selected";} ?> value="Aktif">Aktif</option>
                        <option <?php if($d->status == "Non-Aktif") {echo "selected";} ?> value="Non-Aktif">Non_Aktif</option>
                      </select>
                    </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="cancel" class="btn btn-danger ">Cancel</button>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        <?php } ?>
      </div>
      </div>

