  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit
        <small>Poli</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Poli</li>
      </ol>
    </section>
  
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT DATA POLI</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No_Pasien</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_dokter" value="<?php echo $d->id_dokter ?>">
                    <input type="text" class="form-control" name="no_pasien" value="<?php echo $d->no_pasien ?>">
                  </div>
                </div>
             <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_dokter" value="<?php echo $d->id_dokter ?>">
                    <input type="text" class="form-control" name="nama" value="<?php echo $d->nama ?>">
                  </div>
                </div>
            <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kota_Kab</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="no_pasien" value="<?php echo $d->no_pasien ?>">
                    <input type="text" class="form-control" name="Kota_Kab" value="<?php echo $d->Kota_Kab ?>">
                  </div>
                </div>
            <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="no_pasien" value="<?php echo $d->no_pasien ?>">
                    <input type="text" class="form-control" name="tanggal" value="<?php echo $d->tanggl ?>">
                  </div>
                </div>
             <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="no_pasien" value="<?php echo $d->no_pasien ?>">
                    <input type="text" class="form-control" name="jam" value="<?php echo $d->jam ?>">
                  </div>
                </div>
              <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Poli</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="no_pasien" value="<?php echo $d->no_pasien ?>">
                    <input type="text" class="form-control" name="poli" value="<?php echo $d->poli ?>">
                  </div>
                </div>
             <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="no_pasien" value="<?php echo $d->no_pasien ?>">
                    <input type="text" class="form-control" name="dokter" value="<?php echo $d->dokter ?>">
                  </div>
                </div>
             <?php foreach ($Poli as $d ) { ?>
             <form role="form" action="<?php echo base_url().'master/update_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cara_Bayar</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="no_pasien" value="<?php echo $d->no_pasien ?>">
                    <input type="text" class="form-control" name="cara_bayar" value="<?php echo $d->cara_bayar ?>">
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
