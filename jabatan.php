<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Data
        <small>Jabatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jabatan</li>
      </ol>
    </section>
  

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <h3>
             &nbsp;<i class="fa fa-book"></i> Data Jabatan
               <div class="pull-right" >
                  <div class="col-sm-12" align="pull-right">
                    <ul>
                      <a style="float: right;" href="<?php echo base_url('master/tambah_jabatan') ?>" class="btn btn-sm btn-primary">Tambah Jabatan &nbsp<i class="fa fa-plus"></i></a>
                    </ul>
                    </div>
                  </div>
          </h3>
              
            <!-- /.box-header -->
            <div class="table-responsive ">
              <table  class="table table-bordered table-striped" id="example1">
               
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode_Jabatan</th>
                  <th>Nama</th>
                  <th>Spesialis</th>
                  <th>Telp</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php

                foreach ($jabatan as $k) {
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $k->kode_jabatan ?></td>
                    <td><?php echo $k->nama ?></td>
                    <td><?php echo $k->spesialis ?></td>
                    <td><?php echo $k->telp ?></td>
                    <td><?php echo $k->status ?></td>
                    <td>
                    
           
                   <a href="<?php echo base_url().'master/edit_jabatan/'.$k->id_jabatan; ?>" title="Edit Data">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                      <a href="<?php echo base_url().'master/hapus_jabatan/'.$k->id_jabatan; ?>" title="Hapus Data" onclick="return confirm('Apakah anda yakin mau menghapus?')">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>
                  
                  </tr>
                  <?php $no++; ?>
                  <?php } ?>
                   </tbody>
              </table>
              
                </div>
              </div>
            </div>
          </div>
        </div>
</div>