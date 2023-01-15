<div class="col-lg-12">
<div class="card p-2">
              <div class="row">
              <?php
                  $arr = array("bg-info" , "bg-success","bg-warning");
                  foreach ($result as $key => $value) {
                   
              ?>
              <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box <?=$arr[$key]?> ">
                    <div class="inner">
                      <h3><?=rupiah($value["berat"])?></h3>

                      <p><?=$value["jenis"]?></p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="<?=base_url("home/jenis/".$value["jsCode"])?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <?php
                 # code...
                }
                ?>
                <div class="card-body table-responsive p-0">
                <table id="example" class="table table-striped table-valign-middle" style="font-size:12px">
                  <thead>
                  <tr>
                    <th>KODE</th>
                    <th>nama</th>
                    <th>Jenis Sampah</th>
                    <th>totalBerat</th>
                    <th>createAt</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($resultdata as $key => $value) {
                //    print_r($value);
                    ?>
                    <tr>
                        <td><?php print_r($value["bsCode"]); ?></td>
                        <td><?php print_r($value["nama"]); ?></td>
                        <td><?php print_r($value["jenis"]); ?></td>
                        <td><?php print_r($value["berat"]); ?></td>
                        <td><?php print_r(tanggal($value["createAt"])); ?></td>
                    </tr>

                    <?php
                         # code...
                        }
                    ?>
                  </tbody>
                </table>
              </div>
</div>