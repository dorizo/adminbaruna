<div class="col-lg-12">
<div class="card p-2">
              
              <div class="card-body table-responsive p-0">
                <table id="example" class="table table-striped table-valign-middle" style="font-size:12px">
                  <thead>
                  <tr>
                    <th>KODE</th>
                    <th>nama</th>
                    <th>totalBerat</th>
                    <th>createAt</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($result as $key => $value) {
                //    print_r($value);
                    ?>
                    <tr>
                        <td><?php print_r($value["bsCode"]); ?></td>
                        <td><?php print_r($value["nama"]); ?></td>
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
</div>