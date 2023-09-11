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
     <section class="content mt-3">
      <div class="container col-md-8">
      
        <div class="card shadow ">
        
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="card-header mb-3">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-secondary" style="font-weight: bolder;"><strong><i class="fa fa-hamburger"></i> Add New Product</strong></h4>
                        </div>
                      </div>
                    </div>
               <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="">Reference No.</label>
                  <input type="text" readonly name="refno" id="refno" class="form-control" autocomplete="off" value="RF-<?php echo $beta; ?>">
                </div>

                <div class="mb-3">
                <label for="">Recieving Personnel</label>  
                    <select name="stock_by" id="" class="form-control">
                        <?php 
                        foreach($users as $user)
                        { 
                        ?>
                        <option value="<?=set_value('stock_by')?>" disabled selected hidden>Select Recieving Personnel</option>
                        <option value="<?php echo $user['name']?>"><?php echo $user['name']?></option>
                        <?php 
                        } 
                        ?>
                      </select>
                      <?php if(!empty($error['stock_by'])):?><small class="text-danger"><?=$error['stock_by']?></small><?php endif; ?>
                  </div>
                
                
                <div class="mb-3">
                <?php date_default_timezone_set("Asia/Manila"); ?>
                  <label for="">Recieving Date</label>
                  <input  value="<?php echo date('Y-m-d');?>" type="date" name="stock_at" id="stock_at" class="form-control <?=!empty($error['stock_at']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['stock_at'])):?><small class="text-danger"><?=$error['stock_at']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
 
                <div class="mb-3">
                <label for="">Supplier</label>  
                    <select name="supplier" id="" class="form-control">
                        <?php 
                        foreach($suppliers as $supplier)
                        { 
                        ?>
                        <option value="<?=set_value('supplier')?>" disabled selected hidden>Select supplier</option>
                        <option value="<?php echo $supplier['supplier']?>"><?php echo $supplier['supplier']?></option>
                        <?php 
                        } 
                        ?>
                      </select>
                      <?php if(!empty($error['supplier'])):?><small class="text-danger"><?=$error['supplier']?></small><?php endif; ?>
                  </div>
               
                <div class="row d-flex">
                  <div class="col-sm-6 mt-2">
                      <a href="index.php?pg=reference"><button type="button" class="btn btn-warning px-5">
                            Back
                          </button></a>
                  </div>
                  <div class="col-sm-6 text-right mt-2">
                <button class="btn btn-success px-5">Save</button>
                  </div>
              </div>
            
               </form>
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
  require view_path('partials/footer');
  ?>