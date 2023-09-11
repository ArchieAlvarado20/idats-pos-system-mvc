<?php 
require_once view_path('partials/header');
?>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <div class="content-wrapper">
    <section class="content-header">
    <div class="container col-md-11 mt-3">
          <div class="card">
            <div class="card-body p-3">
              <div class="row p-3">
                  <div class="col-sm-6 mt-1">
                    <h3 class="text-secondary"><strong><i class="fa fa-users"></i> System Users Information</strong> </h3>
                  </div>
                 <div class="col-sm-6">
                        <ol class="float-sm-right">
                          <a href="index.php?pg=user-new" class="btn btn-primary">Add New User</a>         
                        </ol>
                    </div>  
                </div>
                <div class="table-responsive">
                <table id="myTable" class="table  table-hover table-bordered table-sm table-striped mb-0 text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?> 
                    <?php if(!empty($users)):?>
                      <?php foreach ($users as $user):?>
                                    <tr class="bg-white">
                                        <td><?= $no;?></td>
                                        <td><?= $user['name'];?></td>
                                        <td><?= $user['email'];?></td>
                                        <td><?= $user['phone'];?></td>
                                        <td><?= $user['role'];?></td>
                                        <td><?= $user['verify_status'] == '0' ?"<span class='badge badge-danger text-sm'>De-activated</span>" : "<span class='badge badge-success text-sm'>Active</span>";?></td>
                                        <td class="text-center">
                                              <a href="index.php?pg=user-edit&id=<?= $user['id'];?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                              <a href="index.php?pg=user-delete&id=<?= $user['id'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++?>
                                    <?php endforeach?>
                                <?php endif ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
</section>
  </div>
  </div>

<?php 
include view_path('partials/footer');
?>