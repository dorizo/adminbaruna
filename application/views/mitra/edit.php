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
                <input type="hidden" name="mitraCode" value="<?=$dataresult->mitraCode?>" id="inputName" class="form-control"  required="required">
                <input type="text" name="nama" value="<?=$dataresult->nama?>" id="inputName" class="form-control"  required="required">
              </div>
              <div class="form-group">
                <label for="inputName">NIK</label>
                <input type="text" name="nik" id="nik" value="<?=$dataresult->nik?>" maxlength="16" class="form-control" required="required">
              </div>
             
              <div class="form-group">
                <label for="inputName">No HP</label>
                <input type="text" name="noHp" id="noHp" value="<?=$dataresult->noHp?>" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="inputStatus">Jenis Kelamin</label>
                <select name="jeniskelamin" id="jenisKelamin" class="form-control custom-select" required="required">
                  <option selected disabled>Select one</option>
                  <option value="L" <?=$dataresult->jenisKelamin=="L"?"selected":""?> >Laki-laki</option>
                  <option  value="P" <?=$dataresult->jenisKelamin=="P"?"selected":""?>>Perempuan</option>
                </select>
              </div>
               <div class="form-group">
                <label for="inputName">Wilayah Kode</label>
                <input type="text" name="wilayahCode" id="wilayahCode" value="<?=$dataresult->wilayahCode?>"  class="form-control" required="required">
              </div>
              <div class="form-group" style="display:none" >
                <label for="inputStatus">Jenis Mitra</label>
                <select name="jenisMitra" id="jenisMitra" class="form-control custom-select" required="required">
                  <option value="UD">UD</option>
                  <option  value="PT">PT</option>
                  <option  value="CV">CV</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Tempat Lahir</label>
                <input type="text" name="tempatLahir"  value="<?=$dataresult->tempatLahir?>"  id="tempatLahir"  class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="inputName">Tanggal Lahir</label>
                <input type="date" name="tanggalLahir"  value="<?=$dataresult->tanggalLahir?>"  id="tanggalLahir"  class="form-control" required="required">
              </div>
               <div class="form-group">
                <label for="inputName">Alamat</label>
                <textarea name="alamat" id="alamat"   class="form-control" required="required"><?=$dataresult->alamat?></textarea>
              </div>
              <div class="form-group" style="display : none">
                <label for="inputStatus">Fasilitator</label>
                <select name="fasilitatorCode" id="fasilitator" class="form-control custom-select" required="required">
                  <option value="1" selected>Select one</option>
                  <?php foreach ($fasilitator as $key => $value) { ?>
                  <option  value="<?= $value['fasilitatorCode'] ?>"><?= $value['nama'] ?></option>
                  <?php  } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">User</label>
                <select name="userCode" id="user" class="form-control custom-select" required="required">
                  <option value="<?=$dataresult->userCode?>" > <?=$dataresult->userCode?> </option>
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
            <input type="submit" value="Update Petugas" class="btn btn-success float-right">
            </div>
            </form>
       </div>
          <!-- /.card -->
      