<div class="col-lg-12">
        <div class="card card-primary">
            <form enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h3 class="card-title">Mitra</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama</label>
                <input type="text" name="nama" id="inputName" class="form-control"  required="required">
              </div>
              <div class="form-group">
                <label for="inputName">NIK</label>
                <input type="text" name="nik" id="nik" maxlength="16" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="inputName">KTP</label>
                <input type="file" class="form-control" name="foto" id="foto" accept="image/jpeg,image/png,image/jpg" required="required">
              </div>
              <div class="form-group">
                <label for="inputName">No HP</label>
                <input type="text" name="nohp" id="nohp"  class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="inputStatus">Jenis Kelamin</label>
                <select name="jeniskelamin" id="jeniskelamin" class="form-control custom-select" required="required">
                  <option selected disabled>Select one</option>
                  <option value="L">Laki-laki</option>
                  <option  value="P">Perempuan</option>
                </select>
              </div>
               <div class="form-group">
                <label for="inputName">Wilayah Kode</label>
                <input type="text" name="wilayahcode" id="wilayahcode"  class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="inputStatus">Jenis Mitra</label>
                <select name="jenismitra" id="jenismitra" class="form-control custom-select" required="required">
                  <option selected disabled>Select one</option>
                  <option value="UD">UD</option>
                  <option  value="PT">PT</option>
                  <option  value="CV">CV</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Tempat Lahir</label>
                <input type="text" name="tempatlahir" id="tempatlahir"  class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="inputName">Tanggal Lahir</label>
                <input type="date" name="tanggallahir" id="tanggallahir"  class="form-control" required="required">
              </div>
               <div class="form-group">
                <label for="inputName">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="required"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Fasilitator</label>
                <select name="fasilitator" id="fasilitator" class="form-control custom-select" required="required">
                  <option selected disabled>Select one</option>
                  <?php foreach ($fasilitator as $key => $value) { ?>
                  <option  value="<?= $value['fasilitatorCode'] ?>"><?= $value['nama'] ?></option>
                  <?php  } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">User</label>
                <select name="user" id="user" class="form-control custom-select" required="required">
                  <option selected disabled>Select one</option>
                  <?php foreach ($user as $key => $value) { ?>
                  <option  value="<?= $value['userCode'] ?>"><?= $value['email'] ?></option>
                 <?php  } ?>
                </select>
              </div>
              
              <!-- <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div> -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            <a href="<?=base_url("master/user")?>" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Mitra" class="btn btn-success float-right">
            </div>
            </form>
       </div>
          <!-- /.card -->
      