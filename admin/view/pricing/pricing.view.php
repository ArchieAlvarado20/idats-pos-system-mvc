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
      <div class="container col-md-11">
        <div class="card shadow">
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="col-sm-12 mb-3">
                    <h3 class="fw-bold text-secondary" style="font-weight: bolder;"><i class="fa fa-dollar-sign"></i> Price List</h3>
                  </div>
                <table id="myTable" class="table table-sm table-bordered table-striped bg-light mb-0 text-center">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Barcode</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Cost</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Profit</th>
                    <th class="text-center">Percent</th>
                    <th class="text-center">Last Update</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(!empty($pricings)):?>
                <?php foreach ($pricings as $pricing):?>
                            <tr>
                              <td class="text-center" style="font-weight:bolder"><?= $pricing['id'] ?></td>
                              <td class="text-center"><?= $pricing['pcode'] ?></td>
                              <td class="text-center" ><?= $pricing['barcode'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= $pricing['description'] ?></td>
                              <td class="text-center">₱&nbsp;<?= $pricing['cost'] ?></td>
                              <td class="text-center">₱&nbsp;<?= $pricing['price'] ?></td>
                              <td class="text-center">₱&nbsp;<?= $pricing['profit'] ?></td>
                              <td class="text-center"><?= $pricing['percent'] ?>%</td>
                              <td class="text-center"><?= $pricing['date'] ?></td>
                              <td  class="text-center">
                              <a href="index.php?pg=pricing-edit&id=<?= $pricing['id'];?>" class="btn btn-sm btn-success m-0"><i class="fa fa-dollar -sign" title="Update price for this product"></i></a>              
                              </td>
                              
                            </tr>
                         
                            
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
 

  
  