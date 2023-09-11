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
      </div>
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container col-md-8 mt-4">
      
        <div class="card shadow">
        
              <!-- /.card-header -->
              <div class="card-body">
              <h3 class="fw-bold text-center text-secondary"><strong><i class="fa fa-hamburger"></i> Edit Product</strong></h1>
              <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">
              
               <div class="mb-3">
                  <label for="">Pcode</label>
                  <input readonly type="text" name="pcode" id="pcode" class="form-control" autocomplete="off" value="PC-<?php echo $beta; ?>" >
                </div>
                <div class="mb-3">
                  <label for="">Barcode</label>
                  <input type="number" name="barcode" id="barcode" class="form-control" autocomplete="off" value="<?=set_value('barcode',$row['barcode'])?>">
                </div>
                <div class="mb-3">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control" autocomplete="off" value="<?=set_value('description',$row['description'])?>">
                </div>

                <div class="mb-3">
                <label for="">Category</label>  
                <select name="category" id="" class="form-control">
       
                        <?php 
                        foreach($categorys as $category)
                        { 
                        ?>
                        <option value="<?=set_value('category',$row['category'])?>" disabled selected hidden><?=set_value('category',$row['category'])?></option>
                        <option value="<?php echo $category['category']?>"><?php echo $category['category']?></option>
                        <?php 
                        } 
                        ?>
                      </select>
                </div>
                <div class="mb-3">
                  <label for="">Re-order level</label>
                  <input type="number" name="re_order" id="re_order" class="form-control re_order" autocomplete="off" value="<?=set_value('re_order',$row['re_order'])?>">
                </div>
               
                <div class="row-sm-12 d-flex">
                  <div class="col-sm-6">
                     <a href="index.php?pg=product"><button type="button" class="btn btn-warning text-light px-5">
                          Back
                        </button></a>
                  </div>
                   <div class="col-sm-6">
                     <button type="submit" class="btn btn-success float-right px-5" name="saveProduct">Save</button>
                   </div>
                     
                  </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=admin&tab=product">
                        <button type="button" class="col-md-5 btn btn-danger me-1">Back</button>
                    </a>
    
             <?php endif; ?>
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