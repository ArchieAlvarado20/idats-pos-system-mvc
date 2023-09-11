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
              <div class="row p-2">
                      <div class="col-sm-8 mt-1">
                        <h3 class="text-secondary "><strong><i class="fa fa-cart-flatbed"></i> Added Stocks <small>(Stock-History)</small></strong> </h3>
                      </div>
                      <div class="col-sm-2 d-flex">
                      <form action="" method="post">
                      <select name="refno" id="refno" class="form-control refno float-sm-right" required oninvalid="this.setCustomValidity('No reference number available')">
                      <?php 
                      foreach($refno as $row){
                          ?>
                          <option value="<?php echo $row['id'];?>"selected hidden><?php echo $row['refno'];?> (<?php echo $row['stock_by'];?>)</option>
                          <option value="<?php echo $row['id'];?>"><?php echo $row['refno'];?> (<?php echo $row['stock_by'];?>)</option>
                          <?php
                      }
                      ?>
                      </select><br>
                     
                      </div>
                      
                      <div class="col-sm-2 d-flex float-sm-end">
                          <ol class="col-12 text-center">
                            <button class="btn btn-primary px-5">New Stocks</button>         
                          </ol>
                          </form>
                      </div>
                         
                        </div>
                      </div>
        
              <div class="card-body">
              <table id="myTable" class="table table-sm table-bordered table-striped table-hover bg-light mb-0 text-center">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Reference</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Barcode</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Stocked at</th>
                    <th class="text-center">Stocked by</th>
                    <th class="text-center">Supplier</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1?>
                    <?php if(!empty($stocks)):?>
                      <?php foreach ($stocks as $stock):?>
                            <tr>
                            <td class="text-center" ><?= $no ?></td>
               
                              <td class="text-center" ><?= $stock['refno'] ?></td>
                              <td class="text-center"><?= $stock['pcode'] ?></td>
                              <td class="text-center"><?= $stock['barcode'] ?></td>
                              <td class="text-center" style="font-weight:bolder;" ><?= strtoupper($stock['description'])?></td>
                              <td class="text-center" ><?= $stock['qty'] ?></td>
                              <td class="text-center"><?= $stock['stock_at'] ?></td>
                              <td class="text-center"><?= $stock['stock_by'] ?></td>
                              <td class="text-center"><?= $stock['supplier'] ?></td>
                              <td  class="text-center">
                              
                             <a href="index.php?pg=stocks-delete&id=<?=$stock['id']?>" class="btn btn-sm btn-danger " name="delete_qty" value=""><i class="fa fa-trash"></i></button>
                       
                              </td>
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
 


  