<div class="form_content">
  <div id="wrapper" class="w_rekrut">
    <div class="container-fluid content">
      <div class="col-sm-12">
        <div class="row">
          <div class="panel panel-primary">
            <div class="panel-heading text-center"><h4>Formulir Rekrutmen</h4></div>
            <div class="panel-header">
              <button type="button" name="commit" class="btn btn-default" onclick="getReset()">Batal</button>
              <button type="button" name="commit" class="btn btn-primary pull-right loading disabled hide"><i class="fa fa-spinner fa-spin" style="font-size:18px"></i> Menyimpan</button>
              <button type="button" name="commit" class="btn btn-primary pull-right btn-simpan">Simpan</button>
              <div style='clear:both'></div>
            </div>
            <div class="panel-body">
              <div class="row">
                <form id="frm-rekrut">
                  <div class="col-sm-12">
                    <div class="alert alert-warning hide">Mohon pilih minimal satu poli.</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label" for="roles_user_name">Nama</label>
                      <input type="hidden" id="user_id" value=""/>
                      <input class="form-control" id="name" placeholder="" value="" type="text" name="" readonly/>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label" for="roles_user_sub_role">Status</label>               
                          <select class="form-control" id="hr-status" name="hr-status" required="required">
                            <?php foreach($status as $key => $s):?>
                            <option value="<?php echo $s['id_ref_status'];?>"><?php echo $s['status']?></option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label" for="roles_user_hire_date">Hari Pertama Bekerja</label>
                            <input type="text" class="form-control tanggal" name="fdow" id="fdow" value="<?php echo date("d-m-Y");?>" placeholder="HH/BB/TTTT">
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label" for="roles_user_sub_role">Profesi 
                            <span id="lbl-profesi-notes" class="notes">(minimal satu, bisa lebih)</span>
                          </label>

                          <div class="form-tabs collapsed">
                            <?php foreach($roles as $key => $r):?>
                            <div class="form-tab" data-required="<?php echo $r['poli_req'];?>" data-id="<?php echo $r['id'];?>" data-name="<?php echo strtoupper($r['role']);?>">
                              <div class="form-control form-check">
                                <input type="checkbox" id="checkbox_role_<?php echo $r['id'];?>" name="chk_role[]" class="form-check-input form-check-input-group parent" value="<?php echo $r['id'];?>" data-required="<?php echo $r['poli_req'];?>" data-text="<?php echo strtoupper($r['role']);?>"/>
                                <label class="form-check-label" for="checkbox_role"><?php echo strtoupper($r['role']);?></span></label>
                              </div>
                            </div>
                            <?php endforeach;?>
                          </div>

                          <div class="panel-body child-content hide">
                            <label class="control-label" for="roles_user_sub_role"> 
                              <span class="notes">Departemen (minimal satu, bisa lebih)</span>
                            </label>
                            <span class="pull-right">
                              <label class="control-label" for="roles_user_sub_role">Profesi : </label>
                              <span class="role-name">-</span>
                            </span>
                            <div class="tabpage-content mt20">
                              <?php foreach($roles as $key => $role):?>

                                <?php if($role['poli_req'] == 1):?>
                                <div class="dept-detail hide" id="role-<?php echo $role['id'];?>">
                                  <?php foreach($depts as $key => $dept):?>

                                  <?php if(count($dept['departments']) > 0):?>
                                    <div class="form-group mt-3 mb-1">
                                      <label class="text-primary checkbox-group-title"><?php echo strtoupper($dept['name']);?></label>
                                      <div class="col-lg-12 mb10">
                                        <div class="">
                                        <?php foreach($dept['departments'] as $key => $d):?>
                                          <div class="col-md-6" style="margin-bottom:0px">
                                            <div class="checkbox">
                                              <input type="checkbox" name="chk_dept[]" id="checkbox_dept_<?php echo $role['id'] . '_' . $d['id'];?>"  class="child checkbox_dept_<?php echo $role['id'];?>" data-text="<?php echo strtoupper($d['name']);?>" value="<?php echo $role['id'] . '_' . $d['id'];?>">
                                              <label class="form-check-label" for="checkbox_dept"><?php echo strtoupper($d['name']);?></label>
                                            </div>
                                          </div>
                                        <?php endforeach;?>
                                        </div>
                                      </div>
                                    </div>
                                  <?php endif;?>

                                  <?php endforeach;?>
                                </div>
                                <?php endif;?>
                              <?php endforeach;?>
                            </div>

                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group dkuota hide">
                          <label class="control-label" for="roles_user_sub_role">Kuota</label>
                          <input type="text" id="kuota" name="kuota" class="form-control kuota" value="0"/>
                        </div>
                      </div>

                      <div class="col-md-12 lpoli hide">
                      <div class="form-group">
                        <label class="control-label" for="roles_user_department_id">Select Department</label>
                        <div class="row"></div>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label class="control-label" for="roles_user_phone">Telepon</label>
                          <input class="form-control phone-control" placeholder="" value="" type="text" name="ew_phone" id='ew_phone' />
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label class="control-label" for="roles_user_phone_ext">Ext.</label>
                          <input class="form-control phone-control" placeholder="Ext" name="ew_phone_ext" id='ew_phone_ext'  />
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label" for="roles_user_fax">Fax</label>
                      <input class="form-control phone-control" placeholder="" value="" type="text" name="ew_fax" id ='ew_fax' />
                    </div>

                    <div class="form-group">
                      <label class="control-label" for="roles_user_email">Email</label>
                      <input class="form-control email" type="text" name="ew_email" id='ew_email' />
                    </div>

                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label class="control-label" for="roles_user_salary">Gaji</label>
                          <input type="text" id="salary" name="salary" class="form-control"/>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label class="control-label" for="roles_user_salary">Periode</label>
                          <select class="form-control" id="salary_per">
                            <option value="">--Pilih--</option>
                            <?php foreach($salary as $s):?>
                            <option value="<?php echo $s['id'];?>"><?php echo $s['name']?></option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <canvas id="signature-canvas" style="border-radius:3px;border:1px solid #ccc; width:100%; max-width:700px; max-height:460px;"></canvas>
                          </div>
                        </div>
                      </div>

                      <div class="form-inline">
                        <div class="row">
                          <button class="btn btn-sm btn-default signature-btn-clear">Clear</button>
                          <button class="btn btn-sm btn-default signature-btn-undo">Undo</button>  
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="panel-footer">
              <button type="button" name="commit" class="btn btn-default" onclick="getReset()">Batal</button>
              <button type="button" name="commit" class="btn btn-primary pull-right loading disabled hide"><i class="fa fa-spinner fa-spin" style="font-size:18px"></i> Menyimpan</button>
              <button type="button" name="commit" class="btn btn-primary pull-right btn-simpan">Simpan</button>
              <div style='clear:both'></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="table_content">
      <div class="col-md-12">
        <div class="title" style="margin-bottom: 30px;">
          <h3 style="text-align: center;">Daftar Rekruitment</h3>
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
                            <td><button class="btn btn-sm btn-primary">HIRE</button></td>
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