<?php
require_once view_path('partials/header');
?>
<style>
  @import url('dist/css/brand-style.css');
</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container">
    
        <div class="card shadow col-sm-11">
              <div class="card-body">
              <div class="row">
                     <div class="col-sm-6">
                        <h3 class="fw-bold text-secondary" style="font-weight: bolder;"><i class="fa fa-mug-hot"></i> Category</h3>
                      </div>

                    <div class="col-sm-6">
                        <ol class="float-sm-right">
                        <a href="index.php?pg=category-new" class="btn btn-primary">New Category</a>         
                        </ol>
                      </div>
                    </div>
                <table id="myTable" class="table table-sm table-bordered table-hover table-striped bg-light mb-0 text-center">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;?>
                  <?php if(!empty($categorys)):?>
                    <?php foreach ($categorys as $category):?>
                           
                            <tr>
                              <td ><?= $no; ?></td>
                              <td style="font-weight:bolder"><?= $category['category'] ?></td>
                              <td class="p-1" style="width: 200px;">
                                <a href="index.php?pg=category-edit&id=<?=$category['id']?>"><button type="button" class="btn btn-sm btn-success m-1"><i class="fa fa-edit"></i> Edit</button></a>
                                <a href="index.php?pg=category-delete&id=<?=$category['id']?>"><button type="button" class="btn btn-sm btn-danger m-1" ><i class="fa fa-trash"></i> Delete</button></a>

                              </td>
                              
                            </tr>
                              <?php $no++ ?>
                            <?php endforeach?>
                        <?php endif ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  require_once view_path('partials/footer');
 
  ?>
