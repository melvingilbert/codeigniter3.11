
    <div class="table_content">
      <div class="col-md-12">
        <div class="title" style="margin-bottom: 30px;">
          <h3 style="text-align: center;">Daftar Karyawan</h3>
        </div>
        <div class="content">
          <table id="datatable" class="table table-hovered datatable" style="width: 100%;">
            <thead>
              <tr>
                <th>NO</th>
                <th></th>
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
                            <td>
                              <button class="btn btn-sm btn-success">EDIT</button>
                              <button class="btn btn-sm btn-primary">VIEW</button>
                              <button class="btn btn-sm btn-danger resign" id="del_id" value="'.$row['user_id'].'">RESIGN</button>
                            </td>
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

<!-- Data Tables -->
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

<!-- Resign -->
<script>
$(document).ready(function(){
    $('.resign').click(function(e){
      e.preventDefault();
      if(confirm("Apa anda yakin ingin melakukan resign pada data ini?")) {
        id_user   = $('#del_id').val();
        delete_url = window.location.href + '/delete/'+ id_user;
        $.ajax({
          url : delete_url,
          success: function( response ) {
            data = JSON.parse(response);
            if (data.status == 200) {
              alert('Berhasil melakukan resign.');
              return false;
            } else {
              alert('Gagal menghapus data');
              return false;
            }
          },
          error: function()
          {
            //handle errors
            alert('Error...');
          }
        });
      }
    });
})
</script>