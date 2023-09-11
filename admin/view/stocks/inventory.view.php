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
      <div class="container col-md-12">
        <div class="card shadow p-3">
              <!-- /.card-header -->
              <div class="card-header mb-3">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-secondary" style="font-weight: bolder;"><strong><i class="fa fa-chart-simple"></i> Inventory <small>(Current Stocks)</small></strong></h4>
                        </div>
                      </div>
                    </div>
              <div class="card-body">
                <table id="myTable" class="table table-sm table-bordered table-striped bg-light mb-0 text-center">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Barcode</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Brand</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Re-order</th>
                    <th class="text-center">Actual Stock</th>
                    <th class="text-center">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1?>
                    <?php if(!empty($inventorys)):?>
                      <?php foreach ($inventorys as $inventory):?>
                 
                            <tr>
                              <td class="text-center" ><?= $no ?></td>
                              <td class="text-center"><?= $inventory['pcode'] ?></td>
                              <td class="text-center" ><?= $inventory['barcode'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= strtoupper($inventory['description']) ?></td>
                              <td class="text-center"><?= $inventory['brand'] ?></td>
                              <td class="text-center"><?= $inventory['category'] ?></td>
                              <td class="text-center"><?= $inventory['re_order'] ?></td>
                              <td class="text-center"><?= $inventory['qty'] ?></td> 
                              <td class="text-center"><?= $inventory['status'] == '0' ? "<span class='badge badge-success text-sm'>Full-Stock</span>" : "<span class='badge badge-danger text-sm'>Critical</span>"?></td> 
                            </tr>
                              <?php $no++?> 
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
 

  
  