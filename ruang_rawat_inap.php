<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Data
        <small>Ruang Rawat Inap</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ruang</li>
      </ol>
    </section>
  

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <h3>
             &nbsp;<i class="fa fa-book"></i> Data Ruang Rawat Inap
               <div class="pull-right" >
                  <div class="col-sm-12" align="pull-right">
                    <ul>
                      <a style="float: right;" href="<?php echo base_url('master/tambah_ruang_rawat_inap') ?>" class="btn btn-sm btn-primary">Tambah Ruang &nbsp<i class="fa fa-plus"></i></a>
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
                  <th>Nama_Ruangan</th>
                  <th>Kelas</th>
                  <th>Kategori</th>
                  <th>No_Kamar</th>
                  <th>Tarif</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php

                foreach ($ruang_rawat_inap as $k) {
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $k->nama_ruangan?></td>
                    <td><?php echo $k->kelas ?></td>
                    <td><?php echo $k->kategori ?></td>
                    <td><?php echo $k->no_kamar?></td>
                    <td><?php echo $k->tarif?></td>
                    <td><?php echo $k->status?></td>
                    <td>
                    
           
                   <a href="<?php echo base_url().'master/edit_ruang_rawat_inap/'.$k->id_ruangan; ?>" title="Edit Data">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                      <a href="<?php echo base_url().'master/hapus_ruang_rawat_inap/'.$k->id_ruangan; ?>" title="Hapus Data" onclick="return confirm('Apakah anda yakin mau menghapus?')">
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