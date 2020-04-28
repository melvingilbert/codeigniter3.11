    <div class="table_content">
      <div class="col-md-12">
        <div class="title" style="margin-bottom: 30px;">
          <h3 style="text-align: center;">Daftar Karyawan Dipecat</h3>
        </div>
        <div class="content">
          <table id="datatable" class="table table-hovered datatable" style="width: 100%;">
            <thead>
              <tr>
                <th>NO</th>
                <th>USER ID</th>
                <th>NAMA LENGKAP</th>
                <th>NO RM</th>
                <th>JENIS KELAMIN</th>
                <th>UMUR</th>
                <th>BPJS ID</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($api['status'] == 200){
                  $no = 1;
                  // var_dump($api[0]['user_id']);
                  foreach ($api['data'] as $row)
                  {
                    echo '<tr>
                            <td>'.$no.'</td>
                            <td>'.$row['user_id'].'</td>
                            <td>'.$row['full_name'].'</td>
                            <td>'.$row['rm_number'].'</td>
                            <td>'.$row['kelamin'].'</td>
                            <td>'.$row['umur'].'</td>
                            <td>'.$row['bpjs_id'].'</td>
                          </tr>';
                    $no++;
                  }              
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

<script>
    $(document).ready(function(){
        $('.datatable').DataTable({
            pageLength: 25,
            responsive: true,
            language: {
              paginate:{
                previous: "Sebelumnya",
                next: "Selanjutnya"
              }
            }        
        });
    });
</script>