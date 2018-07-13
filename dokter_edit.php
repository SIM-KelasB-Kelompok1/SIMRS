  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit
        <small>Dokter</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Dokter</li>
      </ol>
    </section>
  
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT DATA DOKTER</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($dokter as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_dokter' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_dokter" value="<?php echo $d->id_dokter ?>">
                    <input type="text" class="form-control" name="nama" value="<?php echo $d->nama ?>">
                  </div>
                </div>
               <div class="form-group row">
                  <label  class="control-label col-md-2 col-sm-2 col-xs-12">pesialis</label>
                  <div class="col-md-10 col-sm-10 col-xs-8">
                   <select name="spesialis" class="form-control">
                      <option value=""></option>
                      <?php foreach ($spesialis as $k) {
                        ?>
                      <option <?php if($d->spesialis == $k->nama) {echo "selected";} ?> value="<?php echo $k->nama ?>"><?php echo $k->nama ?></option>
                      <option selected='selected' value="0"> Dokter</option>
                      <option  value="1"> Dokter Umum</option>

                    <?php } ?>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">telpon/Hp</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="telp"  value="<?php echo $d->telp ?>">
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

