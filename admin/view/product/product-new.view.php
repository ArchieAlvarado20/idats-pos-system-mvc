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
                  <label for="">Pcode</label>
                  <input readonly type="text" name="pcode" id="pcode" class="form-control" autocomplete="off" value="PC-<?php echo $beta; ?>"> 
                </div>
                <div class="mb-3">
                  <label for="">Barcode <small>(Empty Field will Generate own Barcode)</small></label>
                  <input value="<?=set_value('barcode')?>" type="number" name="barcode" id="barcode" class="form-control <?=!empty($error['barcode']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['barcode'])):?><small class="text-danger"><?=$error['barcode']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Description</label>
                  <input value="<?=set_value('description')?>" type="text" name="description" id="description" class="form-control <?=!empty($error['description']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['description'])):?><small class="text-danger"><?=$error['description']?></small><?php endif; ?>
                </div>

                <div class="mb-3">
                <label for="">Category</label>  
                    <select name="category" id="" class="form-control">
                        <?php 
                        foreach($categorys as $category)
                        { 
                        ?>
                        <option value="" disabled selected hidden>Select Category</option>
                        <option value="<?php echo $category['category']?>"><?php echo $category['category']?></option>
                        <?php 
                        } 
                        ?>
                      </select>
                      
                  </div>


                <div class="mb-3">
                  <label for="">Re-order level</label>
                  <input value="<?=set_value('re_order')?>" type="number" name="re_order" id="re_order" class="form-control <?=!empty($error['re_order']) ? 'border-danger' : '' ;?>" autocomplete="off">
                  <?php if(!empty($error['re_order'])):?><small class="text-danger"><?=$error['re_order']?></small><?php endif; ?>
                </div>
                <div class="row d-flex">
                  <div class="col-sm-6 mt-2">
                      <a href="index.php?pg=product"><button type="button" class="btn btn-warning px-5">
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