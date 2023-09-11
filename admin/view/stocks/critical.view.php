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
        <div class="row mb-2">
        <div class="col-sm-12">
           
          </div>
          <!-- <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
            <a href="stock-create.php" class="btn btn-primary text-light">Add stock</a>     
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container col-md-12">
        <div class="card shadow p-3">
              <!-- /.card-header -->
              <div class="card-header mb-3">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-secondary" style="font-weight: bolder;"><strong><i class="fa fa-arrow-down"></i> Critical Items</strong></h4>
                        </div>
                      </div>
                    </div>
              <div class="card-body">
                <table id="myTable" class="table table-sm table-bordered table-striped bg-light mb-0 text-center">
                 <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Barcode</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Re-order</th>
                    <th class="text-center">Actual Stock</th>
                    <th class="text-center">Status</th>
                  </tr>
                 </thead>
                 <tbody>
                 <?php $no = 1 ?>
                  <?php if(!empty($criticals)):?>
                    <?php foreach ($criticals as $critical):?>
                 
                            <tr>
                              <td class="text-center"><?= $no ?></td>
                              <td class="text-center"><?= $critical['pcode'] ?></td>
                              <td class="text-center" ><?= $critical['barcode'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= strtoupper($critical['description']) ?></td>
                              <td class="text-center"><?= $critical['category'] ?></td>
                              <td class="text-center"><?= $critical['re_order'] ?></td>
                              <td class="text-center"><?= $critical['qty'] ?></td> 
                              <td class="text-center"><?= $critical['status'] == '1' ? "<span class='badge badge-danger text-sm'>Critical</span>" : "<span class='badge badge-danger text-sm'>Critical</span>"?></td> 
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



  
  