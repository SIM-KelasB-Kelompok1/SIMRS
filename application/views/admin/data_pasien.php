<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrasi
        <small>Pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registrasi</li>
      </ol>
    </section>
  

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <h3>
             &nbsp;<i class="fa fa-book"></i> Riwayat Rekam Medis
          </h3>
              
            <!-- /.box-header -->
            <div class="table-responsive ">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Rekam Medik</th>
                  <th>Nama</th>
                  <th>alamat</th>
                  <th>Umur</th>
                  <th>Jenis Kelamin</th>
                  <th>Telp</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php

                foreach ($pasien as $k) {
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><a href="#"><?php echo $k->rekmed ?></a></td>
                    <td><?php echo $k->nm_depan." ".$k->nm_belakang ?></td>
                    <td><?php echo $k->alamat." "."Provinsi ".$k->prov." "."Kab. ".$k->kab." "."Kec. ".$k->kec." "."Kel. ".$k->kel ?></td>
                    <td><?php echo $k->umur ?></td>
                    <td><?php echo $k->jk ?></td>
                    <td><?php echo $k->telp ?></td>
                    <td><?php echo $k->date_created ?></td>
                    <td>
                    
                  <a href="#" title="Detail">
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                   <a href="<?php echo base_url().'pasien/edit_pasien/'.$k->id; ?>" title="Edit Data">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                      <a href="<?php echo base_url().'pasien/hapus/'.$k->id; ?>" title="Hapus Data" onclick="return confirm('Apakah anda yakin mau menghapus?')">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>
                  
                  </tr>
                  <?php $no++; ?>
                  <?php } ?>
                   </tbody>
              </table>
               <div class="text-right">
                  <div class="col-sm-12" align="pull-right">
             
                      <ul>
                      <a href="<?php echo base_url('admin/daftar_pasien') ?>" class="btn btn-sm btn-success">Tambah Pasien <i class="fa fa-arrow-circle-right"></i></a>
                   </ul>
                  <a href="<?php echo base_url('pasien/detail'); ?>" class="btn btn-success" > detail</a>
                      </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
</div>