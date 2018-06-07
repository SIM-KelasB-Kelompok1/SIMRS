
        <?php foreach ($login as $k ) {
         ?>
      <form role="form" action="<?php echo base_url('admin/aksi_update_admin') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-sm-1  control-label">Username</label>
          <div class="col-md-2 ">
            <input type="hidden" name="id" value="<?php echo $k->id ?>">
            <input type="text" name="username" id="user" class="form-control" value="<?php echo $k->username ?>">
          </div>
          <label class="col-sm-1 control-label">Password</label>
          <div class="col-md-2 ">
            <input type="text" name="password" id="pass" class="form-control" value="<?php echo $k->password ?>">
          </div>
          <div class="form-group">
              <label class="control-label col-sm-1 ">Status</label>
              <div class="col-md-2 ">
            <select name="status" class="form-control" required="required">
                <option value="">-Hak Akses-</option>
                <option <?php if($k->status == "front_office") {echo "selected";} ?> value="front_office">Front Office</option>
                <option <?php if($k->status == "back_office") {echo "selected";} ?>  value="back_office">Back Office</option>
                <option <?php if($k->status == "front_office") {echo "selected";} ?>  value="admin">Admin</option>
              </select></td>
            </div>
          </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-danger" type="button">Batal</button>
        </div>
        </div>
        </div>
      </form>
    <?php } ?>

