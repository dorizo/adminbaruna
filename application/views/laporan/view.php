<div class="col-lg-12">
<div class="card p-2">
              
              <div class="card-body table-responsive p-0">
                <table id="example" class="table table-striped table-valign-middle" style="font-size:12px">
                  <thead>
                  <tr>
                    <th>KODE</th>
                    <th>Message</th>
                    <th>Photo</th>
                    <th>longitude</th>
                    <th>latitude</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($result as $key => $value) {
                //    print_r($value);
                    ?>
                    <tr>
                        <td><?php print_r($value["id"]); ?></td>
                        <td><?php print_r($value["message"]); ?></td>
                        <td><img width="50px" src="https://baruna.id/assets/document/complaint/<?php print_r($value["photo"]);?>"<td>
                        <td><?php print_r($value["longitude"]); ?></td>
                        <td><?php print_r($value["latitude"]); ?></td>
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