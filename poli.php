<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Data
        <small>Poli</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Poli</li>
      </ol>
    </section>
  

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <h3>
             &nbsp;<i class="fa fa-book"></i> Data Poli 
               <div class="pull-right" >
                  <div class="col-sm-12" align="pull-right">
                    <ul>
                      <a style="float: right;" href="<?php echo base_url('master/tambah_poli') ?>" class="btn btn-sm btn-primary">Tambah Poli &nbsp<i class="fa fa-plus"></i></a>
                    </ul>
                    </div>
                  </div>
          </h3>
              
            <!-- /.box-header -->
            <div class="table-responsive ">
              <table  class="table table-bordered table-striped" id="example1">
               
                <thead>
                <tr>
                  <th>No_Pasien</th>
                  <th>Nama</th>
                  <th>Kota_Kab</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                   <th>Poli</th>
                  <th>Dokter</th>
                   <th>Cara_Bayar</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php

                foreach ($poli as $k) {
                  ?>
                  <tr>
                    <td><?php echo $k->no_pasien ?></td>
                    <td><?php echo $k->nama ?></td>
                    <td><?php echo $k->kota_kab ?></td>
                    <td><?php echo $k->tanggal ?></td>
                    <td><?php echo $k->jam ?></td>
                    <td><?php echo $k->poli ?></td>
                    <td><?php echo $k->dokter ?></td>
                    <td><?php echo $k->cara_bayar ?></td>
                    <td><?php echo $k->status ?></td>
                    <td>
                    
           
                   <a href="<?php echo base_url().'master/edit_poli/'.$k->id_poli; ?>" title="Edit Data">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                      <a href="<?php echo base_url().'master/hapus_poli/'.$k->id_poli; ?>" title="Hapus Data" onclick="return confirm('Apakah anda yakin mau menghapus?')">
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