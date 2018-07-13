  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah
        <small>Poli</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Poli</li>
      </ol>
    </section>
  
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH DATA POLI</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" action="<?php echo base_url().'master/aksi_tambah_poli' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No_Pasien</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_pasien" id="inputEmail3" placeholder="no_pasien">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="inputEmail3" placeholder="nama">
                  </div>
                </div>

                 <div class="form-group ">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Kota_Kab</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="Kota_Kab" class="form-control">
                        <option value=""></option>
                        <option value="Makassar">Makassar</option>
                        <option value="Maros">Maros</option>
                        <option value="GOWA">Gowa</option>
                        <option value="Palopo">Palopo</option>
                        <option value="Bone">Bone</option>
                        <option value="Barru">Barru</option>
                        <option value="Enrekang">Enrekang</option>
                      </select>
                    </div>
                </div>
               
               
              
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal" id="inputEmail3" placeholder="tanggal">
                  </div>
                </div>
             
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="jam" id="inputEmail3" placeholder="jam">
                  </div>
                </div>
             

                 <div class="form-group ">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Poli</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="status" class="form-control">
                        <option value=""></option>
                        <option value="Dalam">Dalam</option>
                        <option value="THT">THT</option>
                        <option value="Anak">Anak</option>
                        <option value="Radiologi">Radiologi</option>
                        <option value="Kandungan">Kandungan</option>
                        <option value="Bedah">Bedah</option>
                        <option value="UGD">UGD</option>
                      </select>
                    </div>
                </div>
               
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="dokter" id="inputEmail3" placeholder="dokter">
                  </div>
                </div>
            
                 <div class="form-group ">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Cara_Bayar</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="status" class="form-control">
                        <option value=""></option>
                        <option value="Kredit">Kredit</option>
                        <option value="Tunai">Tunai</option>
                      </select>
                    </div>
                </div>
             
                 <div class="form-group">
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
            <a href="<?php echo base_url('master/m_poli'); ?>"><button type="button" class="btn btn-danger right">Cancel</button></a>
            </div>
          </div>
      </div>
      </div>

